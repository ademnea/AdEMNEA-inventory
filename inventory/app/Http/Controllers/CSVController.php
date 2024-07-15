<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\item;
use App\Models\vendors;
use App\Models\consignments;
use App\Models\compartments;
use App\Models\category;


use Illuminate\Support\Facades\Validator;

class CSVController extends Controller
{
    public function upload(Request $request)
    {
        $file = $request->file('csv_file');
        $path = $file->getRealPath();

        $csvData = array_map('str_getcsv', file($path));
        $header = array_shift($csvData);

        $items = [];
        foreach ($csvData as $row) {

            // adding vendor
            $vendor = vendors::where('name', $row[6])->first();

            // If vendor name doesn't exist, create a new entry
            if (!$vendor) {
                $newVendor = new vendors();
                // Setting all attributes as needed
                $newVendor->name = $row[6];
                $newVendor->email = $row[7];
                $newVendor->vendor_id = $row[8];
                $newVendor->phone = $row[9];
                $newVendor->website = $row[10];
                $newVendor->location = $row[11];
                
                $newVendor->save();
            }
                    // Check if compartment_id exists in the database
            $compartment = compartments::where('number', $row[1])->first();

            // If compartment_id doesn't exist, create a new entry
            if (!$compartment) {
                $newCompartment = new compartments();
                // Setting other attributes as needed
                $newCompartment->number = $row[1];
                $newCompartment->description = $row[1];
                $newCompartment->save();
            }
            $category = category::where('category_name', $row[0])->first();

            // If category_name doesn't exist, create a new entry
            if (!$category) {
                $newCategory = new category();
                // Setting other attributes as needed
                $newCategory->category_name = $row[0];
                $newCategory->description = $row[0];
                $newCategory->save();
            }
            

            

            $consignment = consignments::where('receiptNo', $row[5])->first();
            $currentVendor = vendors::where('name', $row[6])->first();// We retrieve the vendor id 
            // thats existing from the table so as to cater for foreign key constraints 

            // If consignment doesn't exist, create a new entry
            if (!$consignment) {
                $newConsignment = new consignments();
                // Setting other attributes as needed
                $newConsignment->receiptNo = $row[5];
                $newConsignment->vendor_id = $currentVendor -> vendor_id;
                if (isset($row[11])) {
                    $newConsignment->DateBought = $row[12];
                }
                if (isset($row[12])) {
                    $newConsignment->DateReceived = $row[13];
                }
                    $newConsignment->receipt_image_url = $row[14];
                
                $newConsignment->save();
            }

            //retrieving the foreign key values from their tables so as to cater for foreign key contraints
            $retrievedCompartment = compartments::where('number', $row[1])->first();
            $retrievedCategory = category::where('category_name', $row[0])->first();
            $retrievedConsignment = consignments::where('receiptNo', $row[5])->first();

            $item = [
                'category_id' => $retrievedCategory -> category_id,  // Adjust the indices according to your CSV columns
                'compartment_id' => $retrievedCompartment -> compartment_id,
                'name' => $row[2],
                'Type' => $row[3],
                'Quantity' => $row[4],
                'consignment_id' => $retrievedConsignment -> consignment_id,
            ];

            // Validate each item before saving
            $validator = Validator::make($item, [
                'category_id' => 'required|integer',
                'compartment_id' => 'required|integer',
                'name' => 'required|string',
                'Type' => 'required|string',
                'consignment_id' => 'required|integer',
                'Quantity' => 'required|string',
            ]);

            if ($validator->fails()) {
                // Handle validation failure as needed
                continue; // Skip invalid rows
            }

            $items[] = $item;
            
        }

        // Insert all items into the database
        if (!empty($items)) {
            item::insert($items);
        }

        return redirect()->back()->with('success', 'CSV uploaded and processed successfully.');
    }
}
