<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Printer;
class CustomSearchController extends Controller
{
    function index(Request $request)
    {
     if(request()->ajax())
     {
      if(!empty($request->filter_gender))
      {
       $data = DB::table('tbl_customer')
         ->select('CustomerName', 'Gender', 'Address', 'City', 'PostalCode', 'Country')
         ->where('Gender', $request->filter_gender)
         ->where('Country', $request->filter_country)
         ->get();
      }
      else
      {
        $data = Printer::orderBy('created_at','DESC')
        ->join('hr_staffs', 'hr_staffs.id', '=', 'aset_printers.hr_staff_id')
        ->join('aset_models', 'aset_models.id', '=', 'aset_printers.aset_model_id')
        ->join('hr_units', 'hr_units.id', '=', 'hr_staffs.hr_unit_id')
        ->join('aset_brands', 'aset_brands.id', '=', 'aset_printers.aset_brand_id')
        ->select('aset_printers.*','hr_staffs.name','aset_models.name as m_name','aset_brands.name as b_name','hr_units.name as u_name')
       ->get();
      }
      return datatables()->of($data)->make(true);
     }
     $country_name = DB::table('tbl_customer')
          ->select('Country')
          ->groupBy('Country')
          ->orderBy('Country', 'ASC')
          ->get();
     return view('custom_search', compact('country_name'));
    }
}

?>
