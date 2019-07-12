<?php namespace App\Http\Controllers;


use App\application;
use App\Models\Blog;
use Illuminate\Support\MessageBag;
use Sentinel;
use Analytics;
use View;
use Spatie\Activitylog\Models\Activity;
use Yajra\DataTables\DataTables;
use Charts;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Spatie\Analytics\Period;
use File;

class guestController extends Controller
{
    public function showHome()
    {
        return view('guest.index' );
    }

    Public function toner_appl(){
        $keyword = request()->get('nokp');

       // $staffs = Staff::where('identification_card','=',$keyword)->get();

//         //$id = $applications->id;
        //if($applications){
//      $actions = Action::where('application_id', $applications->id)
//         ->orderBy('id', 'desc')
//         ->get();
//}
        //dd($actions);


//        $applications = Action::join('applications as a', 'a.id','=','actions.application_id')
//            ->where('a.nofail',$keyword)->orderBy('actions.id', 'desc')->get();
//        $status = Status::all();
        //dd($applications);
        return view('guest.application');//->with(compact('staffs'));
    }
}
