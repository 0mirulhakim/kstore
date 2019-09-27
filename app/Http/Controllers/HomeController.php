<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    public function myform()

    {

        /*  $states = DB::table("demo_state")->pluck("name","id");

          return view('myform',compact('states'));*/

         $departments = DB::table("aset_brands")->pluck("name","id");

           return view('myform',compact('departments'));

     }


     /**

      * Get Ajax Request and restun Data

      *

      * @return \Illuminate\Http\Response

      */

    public function createStaffAjax($id)

    {

        /*  $cities = DB::table("demo_cities")

              ->where("state_id",$id)*/
            $units = DB::table("aset_models")

                  ->where("aset_brand_id",$id)

            ->pluck("name","id");

        return json_encode($units);

    }
}
