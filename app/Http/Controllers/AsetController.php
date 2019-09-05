<?php

namespace App\Http\Controllers;

use App\AsetStatus;
use App\Models\Apps\PMR;
use App\Printer;
use App\AsetModel;
use App\Brand;
use App\Procurement_type;
use App\Staff;
use App\Supplier;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index()
    {
       // $keyword = request()->get('nokp');

       // $staff = Staff::where('identification_card','=',$keyword)->get();

        $asets = Printer::orderBy('created_at','DESC')->latest()->paginate(config('settings.page_limit'));
        $brands = Brand::all();
        $asetModels = AsetModel::all();
        return view('admin.aset.index', compact('asets'));

    }

    public function regAsetPrinter()
    {
       // $brands = Brand::all();
        $brands = Brand::all();
        $models = AsetModel::all();
        $suppliers = Supplier::all();
        $proc_types = Procurement_type::all();
        $asetStatus = AsetStatus::all();
        $staffs = Staff::all();
        return view('admin.aset.createAsetPrinter', compact('brands', 'models', 'suppliers', 'proc_types', 'asetStatus', 'staffs'));
    }

    public function storeAsetPrinter(Request $request){

        $data = request()->validate(['aset_brand_id' => 'required', 'aset_model_id' => 'required', 'serial_no' => 'required',
            'aset_status_id' => 'required', 'hr_staff_id' => 'required'],['aset_brand_id.required' => 'Sila masukkan Jenama',
            'aset_model_id.required' => 'Sila Masukkan Model', 'serial_no.required' => 'Sila Masukkan No.Siri Aset',
            'aset_status_id.required' => 'Sila Masukkan Status Aset', 'hr_staff_id.required' => 'Sila Masukkan Pegawai Bertanggungjawab']);
        Printer::create($data);
    dd($data);
        return $this->index()->with('message','Maklumat Telah Disimpan');

        //return redirect()->route('brand:Brand')->with('message','Maklumat Telah Disimpan: ');

    }



     public function getModels($id)
    {
        $model = AsetModel::where('aset_brand_id', $id)->get();
        return response()->json($model);
    }

    public function Brand()
    {
        $brands = Brand::orderBy('created_at','DESC')->get();
        return view('admin.aset.brands',compact('brands'));
    }

    public function createBrand()
    {
        return view('admin.aset.createBrand');
    }

    public function storeBrand(Request $request){

        $data = request()->validate(['name' => 'required|unique:aset_brands,name'],['name.required' => 'Sila masukkan Jenama', 'name.unique' => 'Jenama Telah Wujud']);
        Brand::create($data);

        //return $this->Brand();

        return redirect()->route('brand:Brand')->with('message','Maklumat Telah Disimpan: ');

    }

    public function asetModel()
    {
        $models = AsetModel::orderBy('created_at','DESC')->get();

        return view('admin.aset.models',compact('models'));
    }

    public function createModel()
    {
        $brands = Brand::all();
        return view('admin.aset.createModel', compact('brands'));
    }

    public function storeModel(Request $request){

        $data = request()->validate(['aset_brand_id' => 'required|integer', 'name' => 'required|unique:aset_models,name'],
            ['aset_brand_id.required' => 'Sila Pilih Jenama', 'name.required' => 'Sila Masukkan Model', 'name.unique' => 'Model Telah Wujud']);
        AsetModel::create($data);

        return $this->asetModel();
    }


}
