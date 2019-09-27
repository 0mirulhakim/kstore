<?php

namespace App\Http\Controllers;

use App\Http\Requests;

use Illuminate\Http\Request;

use DB;

class HomeController extends Controller
{
    public function myform()

    {

<<<<<<< HEAD
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
=======
        $states = DB::table("demo_state")->pluck("name","id");

        return view('myform',compact('states'));

    }


    /**

     * Get Ajax Request and restun Data

     *

     * @return \Illuminate\Http\Response

     */

    public function myformAjax($id)

    {

        $cities = DB::table("demo_cities")

            ->where("state_id",$id)

            ->pluck("name","id");

        return json_encode($cities);
>>>>>>> 5ff3ba89a601acd470c960025a4c18899385c181

    }
}
