<?php


namespace App\Http\Controllers;
use App\Models\item;
use App\Models\trackableitems;
use App\Models\category;
use App\Models\faultytrackableitems;
use App\Models\faultygeneralitems;
use App\Models\compartments;
use App\Models\borrowedgeneralitems;
use App\Models\borrowedtrackableitems;
use App\Models\users;
use App\Models\borrow;
use App\Models\consignments;
use Illuminate\Http\Request;

class reports extends Controller
{
    public function fetch_reports(){

        $unreturned_orders = borrow::where('status', 'not returned')->count();
        $incomplete_orders = borrow::where('status', 'incomplete')->count();
        $closed_orders = borrow::where('status', 'completed')->count();


        //this open orders variable includes both partially returned and fully unnreturned orders.
        $open_orders = $incomplete_orders + $unreturned_orders;

        $total_orders = $unreturned_orders + $incomplete_orders + $closed_orders;

        $totalusers = users::count();

        $total_trackable = trackableitems::count();
        
        $total_general = item::count();
        $total_categories = category::count();
        $total_consignments = consignments::count();

        $total_faulty1 = faultytrackableitems::count();
        $total_faulty2 = faultygeneralitems::count();

           $total_faulty = $total_faulty1 + $total_faulty2;



           //lets now send these to the reports page.

             return view('/dashboard')->with([
            'total_orders' => $total_orders,
            'closed_orders' => $closed_orders,
            'incomplete_orders'=> $open_orders,
            'users'=> $totalusers,
            'trackableitems'=> $total_trackable,
            'generalitems'=> $total_general,
            'categories'=> $total_categories,
            'consignments'=> $total_consignments,
            'faultyitems'=> $total_faulty,
        ]);
    }
}
