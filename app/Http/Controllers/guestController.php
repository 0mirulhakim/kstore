<?php namespace App\Http\Controllers;


use App\application;
use App\Models\Blog;
use App\Printer;
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
use App\Staff;

class guestController extends Controller
{
    public function showHome()
{
    return view('guest.index' );
}

    Public function toner_appl(){
        $keyword = request()->get('identification_card');

        $staffs = Staff::where('identification_card','=',$keyword)->get();
        $staffCnt = $staffs->count();

        if($staffCnt > 0){

        foreach ($staffs as $staff)

        $aset = Printer::where('hr_staff_id', '=', $staff->id)->get();


//         //$id = $applications->id;
        //if($applications){
//      $actions = Action::where('application_id', $applications->id)
//         ->orderBy('id', 'desc')
//         ->get();
//}
       // dd($staffs);


//        $applications = Action::join('applications as a', 'a.id','=','actions.application_id')
//            ->where('a.nofail',$keyword)->orderBy('actions.id', 'desc')->get();
//        $status = Status::all();
        //dd($applications);

            return view('guest.application')->with(compact('staffs', 'aset'));
        }else
            return redirect('guest')->with('error', 'Nombor Kad Pengenalan Tiada Dalam Rekod');

    }

    Public function formSemak(){

        return view('guest.semak');//->with(compact('staffs'));
    }

    Public function Semak(){

        return view('guest.semak_result');//->with(compact('staffs'));
    }

    Public function formSejarah(){

        return view('guest.sejarah');//->with(compact('staffs'));
    }

    Public function Sejarah(){

        return view('guest.sejarah_detail');//->with(compact('staffs'));
    }

    Public function SubmitApplication(){

        return redirect('guest')->with('success', 'Permohonan Telah Berjaya Dihantar \n No. ID Permohonan Anda Adalah: 0030');
    }


}
