<?php
 
namespace App\Http\Controllers;
 
use App\Imports\ItemImport;
use App\Imports\VendorsImport;
use App\Imports\consignmentsImport;
use App\Imports\compartmentsImport;
use App\Imports\categoryImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

 
use App\Models\User;
 

class ExcelCSVController extends Controller
{
    public function index()
    {
        return view('excel-csv-import');
    }

  public function importItems(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        Excel::import(new ItemImport, $file);

        return redirect('/items')->with('success','CSV successfully imported!');
    }

    public function importVendors(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        Excel::import(new VendorsImport, $file);

        return redirect('/vendors')->with('success','CSV successfully imported!');
    }

    public function importConsignments(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        Excel::import(new ConsignmentsImport, $file);

      
        return redirect('/consignments')->with('success', 'CSV imported successfully!');
    }

    public function importCompartments(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        Excel::import(new CompartmentsImport, $file);

        return redirect('/compartments')->with('success', $request->number.' '.'has been imported successfully!');
    }

    public function importCategories(Request $request)
    {
        $validatedData = $request->validate([
            'file' => 'required|file',
        ]);

        $file = $request->file('file');
        Excel::import(new CategoryImport, $file);

        return redirect('/category')->with('success','CSV successfully imported!');
    }
}