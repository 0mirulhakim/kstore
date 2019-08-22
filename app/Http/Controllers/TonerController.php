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

    public function tonerList($model){

        //$models = AsetModel::where('id', '=', $model)->first();
        $models = AsetModel::find($model);
        $toners = Toner::where('aset_model_id','=',$model)->get();
        $tonerCnt = $toners->count();
        return view('admin.toner.tonerList', compact('toners', 'models', 'tonerCnt'));

    }

    public function createToner($model)
    {
        return view('admin.toner.createToner')->with(compact('model'));
    }

    public function storeToner(Request $request, $model){

        $data = request()->validate(['aset_model_id' => 'required|integer', 'model' => 'required', 'code' => 'required|unique:stor_toners,code'],
            ['aset_model_id.required' => 'Sila Masukkan Model Pencetak', 'aset_model_id.integer' => 'Sila Masukkan Kod Model Pencetak', 'model.required' => 'Sila Masukkan Model Toner', 'code.required' => 'Sila Masukkan SKU No', 'code.unique' => 'SKU No Telah Wujud']);
        Toner::create($data);

        //dd ($data);
        return $this->tonerList($model);
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
