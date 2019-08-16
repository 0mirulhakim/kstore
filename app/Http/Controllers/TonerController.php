<?php

namespace App\Http\Controllers;

use App\asetModel;
use App\Toner;
use Illuminate\Http\Request;

class TonerController extends Controller
{
    public function index()
    {
        $toners = Toner::all();
        return view('admin.toner.index', compact('toners'));
    }

    public function tonerList(AsetModel $model){

        $toners = Toner::where('aset_model_id','=',$model)->get();
        return view('admin.toner.tonerList', compact('toners'));

    }

    public function newAppl()
    {
        return view('admin.toner.application');
    }

    public function verifyAppl()
    {
        return view('admin.toner.verify');
    }

    public function submitverifyAppl()
    {
        return redirect('admin/verifyApplication')->with('success', 'Berjaya Buat Pengesahan');
    }

    public function ProcessAppl()
    {

        return view('admin.toner.process')->with('success','Pengesahan Telah Berjaya Dihantar');
    }

    public function SubmitApproval()
    {

        return redirect('admin/newApplication')->with('success', 'Pengesahan Telah Berjaya Dihantar');
    }


}
