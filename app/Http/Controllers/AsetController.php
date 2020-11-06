<?php

namespace App\Http\Controllers;

use App\AsetStatus;
use App\Printer;
use App\AsetModel;
use App\Brand;
use App\Procurement_type;
use App\Staff;
use App\History;
use App\Supplier;
use Illuminate\Http\Request;
use DB;

class AsetController extends Controller
{
    public function index()
    {
       // $keyword = request()->get('nokp');

       // $staff = Staff::where('identification_card','=',$keyword)->get();

        //$details = Printer::orderBy('created_at','DESC')->take(181)->get();
        $details = Printer::orderBy('created_at','DESC')->get();
       // $details = Printer::WHERE('id',$id)->get();
        //$brands = Brand::all();
        //$asetModels = AsetModel::all();
       // dd($details);
        return view('admin.aset.index', compact('details'));

    }
    public function laporanindex()
    {
       // $keyword = request()->get('nokp');

       // $staff = Staff::where('identification_card','=',$keyword)->get();

        //$details = Printer::orderBy('created_at','DESC')->take(181)->get();
        $details = Printer::orderBy('created_at','DESC')->get();
        $brands = DB::table("aset_brands")->pluck("name", "id");
        //$brands = Brand::all();
        $models = AsetModel::all();
        $suppliers = Supplier::all();
        $proc_types = Procurement_type::all();
        $asetStatus = AsetStatus::all();
        $staffs = Staff::all();
       // $details = Printer::WHERE('id',$id)->get();
        //$brands = Brand::all();
        //$asetModels = AsetModel::all();
       // dd($details);
        return view('admin.editor', compact('details','brands','models','suppliers','proc_types','asetStatus','staffs'));

    }

    public function asetDetails($id){
        $details = Printer::WHERE('id',$id)->get();
        $asets = History::WHERE('aset_printer_id',$id)->orderBy('created_at','DESC')->get();
        return view('admin.aset.asetDetails', compact('details','asets'));
    }
    public function KemaskiniPenempatan($id){
        $details = Printer::WHERE('id',$id)->get();
        $asetStatus = AsetStatus::all();
        $staffs = Staff::all();
        return view('admin.aset.KemaskiniPenempatan', compact('details', 'asetStatus','staffs'));
    }
    public function editPenempatan(Request $request)
    { 
        $Penempatan=new Printer;
        $id = $request->input('id');
        $Penempatan= Printer::select('*')
        ->where('id', '=', $id )->first();
       // $Penempatan=Printer::find($id);
        $Penempatan->location=$request->input('location');
        $Penempatan->allocate_date=$request->input('allocate_date_end');
        $Penempatan->aset_status_id=$request->input('aset_status_id');
        $Penempatan->hr_staff_id=$request->input('hr_staff_id');
        $Penempatan->remarks=$request->input('remarks');
        $Penempatan->save();

        $history=new History;
        $history->aset_printer_id=$request->input('id');
        $history->allocate_date_end=$request->input('allocate_date_end');
        $history->hr_staff_id=$request->input('hr_staff_id_1');
        $history->hr_unit_id=$request->input('hr_unit_id');
        $history->location=$request->input('location_1');
        $history->remarks=$request->input('remarks_1');
        $history->save();
       // $history=new History;
       // $history->aset_printer_id=$request->input('id');
      //  $history->allocate_date_end=$request->input('allocate_date_end');
      //  $history->hr_staff_id=$request->hr_staff_id;
       // $history->hr_unit_id=$request->input('hr_unit_id');
       // $history->location=$request->location;
       // $history->remarks=$request->remarks;
      //  $history->save();
       // $name=new Staff;
        //$hr_staff_id = $request->input('hr_staff_id');
        //$name = Staff::where('id', $hr_staff_id)->first();
        //$name->name=$request->input('name');
       // $name->save();
      // dd($history);
      return redirect()->route('aset:aset')->with('message', 'Maklumat Telah Dikemaskini');
       // return $this->index()->with('success','Maklumat Telah Disimpan');
    }

    public function regAsetPrinter()
    {
        $brands = DB::table("aset_brands")->pluck("name", "id");
        //$brands = Brand::all();
        $models = AsetModel::all();
        $suppliers = Supplier::all();
        $proc_types = Procurement_type::all();
        $asetStatus = AsetStatus::all();
        $staffs = Staff::all();
        return view('admin.aset.createAsetPrinter', compact('brands', 'models', 'suppliers', 'proc_types', 'asetStatus', 'staffs'));
    }
    public function KemaskiniAset( $id)
    {
        $brands = DB::table("aset_brands")->pluck("name", "id");
        //$brands = Brand::all();
       // $models = AsetModel::all();
        $models = AsetModel::orderBy('name')->get(); 
        $suppliers = Supplier::all();
        $proc_types = Procurement_type::all();
        $asetStatus = AsetStatus::all();
        $staffs = Staff::all();
       // $id = $request->input('id');
        $details = Printer::WHERE('id',$id)->get();
        return view('admin.aset.KemaskiniAset', compact('brands', 'models', 'suppliers', 'proc_types', 'asetStatus', 'staffs','details'));
    }
    public function editAset(Request $request)
    { 
        $Aset=new Printer;
        $id = $request->input('id');
        $Aset= Printer::select('*')
        ->where('id', '=', $id )->first();
       // $Penempatan=Printer::find($id);
       $Aset->aset_brand_id=$request->input('aset_brand_id');
       $Aset->aset_model_id=$request->input('aset_model_id');
       $Aset->serial_no=$request->input('serial_no');
       $Aset->registration_no=$request->input('registration_no');
       $Aset->receive_date=$request->input('receive_date');
       $Aset->aset_stor_supplier_id=$request->input('aset_stor_supplier_id');
       $Aset->aset_procurement_ty_id=$request->input('aset_procurement_ty_id');
       $Aset->allocate_date=$request->input('allocate_date');
      // $Aset->remarks=$request->input('remarks');
        $Aset->location=$request->input('location');
        $Aset->aset_status_id=$request->input('aset_status_id');
        $Aset->remarks=$request->input('remarks');
        $Aset->hr_staff_id=$request->input('hr_staff_id');
        $Aset->save();
       // $name=new Staff;
        //$hr_staff_id = $request->input('hr_staff_id');
        //$name = Staff::where('id', $hr_staff_id)->first();
        //$name->name=$request->input('name');
       // $name->save();
        
       // return $this->index()->with('success','Maklumat Telah Disimpan');
        return redirect()->route('aset:aset')->with('message', 'Maklumat Telah Dikemaskini');
    }
    // Fetch records
    public function getModel($aset_brand_id=0){

    	// Fetch Employees by Departmentid
        $empData['data'] = AsetModel::orderby("name","asc")
        			->select('id','name')
        			->where('aset_brand_id',$aset_brand_id)
        			->get();
  
        return response()->json($empData);
     
    }
    

    public function regAsetPrinterAjax($id){
        $models = DB::table("aset_models")
            ->where("aset_brand_id", $id)
            ->pluck("name","id");
        return json_encode($models);

    }

    public function storeAsetPrinter(Request $request){

        $data = request()->validate([
            'aset_brand_id' => 'required',
            'aset_model_id' => 'required',
            'serial_no' => 'required',
            'aset_status_id' => 'required',
            'aset_stor_supplier_id' => 'required',
            'aset_procurement_ty_id' => 'required',
            'hr_staff_id' => 'required',
            'registration_no' => 'nullable',
            'receive_date' => 'nullable',
            'location' => 'nullable',
            'remarks' => 'nullable',
            'allocate_date' => 'nullable'],
            ['aset_brand_id.required' => 'Sila masukkan Jenama',
            'aset_model_id.required' => 'Sila Masukkan Model',
                'serial_no.required' => 'Sila Masukkan No.Siri Aset',
            'aset_status_id.required' => 'Sila Masukkan Status Aset',
                'hr_staff_id.required' => 'Sila Masukkan Pegawai Bertanggungjawab']);

        Printer::create($data);
   // dd($data);
       // return $this->index()->with('message','Maklumat Telah Disimpan');
        return redirect()->route('aset:aset')->with('message', 'Maklumat Telah Disimpan');
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
