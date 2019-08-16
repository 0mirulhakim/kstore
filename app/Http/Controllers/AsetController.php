<?php

namespace App\Http\Controllers;

use App\Models\Apps\PMR;
use App\Printer;
use App\AsetModel;
use App\Brand;
use App\Staff;
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
        return view('admin.aset.index')->with(['asets' => $asets, 'brands' => $brands, 'asetModels' => $asetModels]);

    }

    public function formPrinter()
    {
        return view('admin.aset.formPrinter');
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
