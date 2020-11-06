<?php

namespace App\Http\Controllers;

use App\AsetModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Staff;
use App\Department;
use App\Position;
use App\Unit;
use DB;

class HrController extends Controller
{
    public function index(){
        $staffs = Staff::orderBy('created_at','DESC')->latest()->get();
        return view('admin.hr.index', compact('staffs'));
    }


    public function units(){
        $units = Unit::orderBy('hr_department_id','ASC')->latest()->paginate(config('settings.page_limit'));
        return view('admin.hr.unit', compact('units'));
    }
    /*public function units(Request $request){

        $units = Unit::where('hr_department_id', $request->hr_department_id)->pluck("name", "id");
        dd($units);
        return response()->json($units);
    }*/

    public function createStaff(){

        $positions = Position::all();
        //$departments = Department::all();
        //$units= Unit::all();

        $departments = DB::table("hr_departments")->pluck("name", "id");
        $units = Unit::orderBy('hr_department_id', 'asc')->get();
        return view('admin.hr.createStaff', compact('positions','departments', 'units'));
    }

    public function createStaffAjax($id){
        $units = DB::table("hr_units")
            ->where("hr_department_id", $id)
            ->pluck("name","id");
        return json_encode($units);

    }

    public function editStaff($staffs){
        return view('admin.hr.index', compact('staffs'));
    }

    public function storeStaff(Request $request){
        $data = request()->validate([
            'identification_card' => 'required|unique:hr_staffs,identification_card',
            'name' => 'required',
            'hr_unit_id' => 'required',
            'hr_position_id' => 'required'
        ],
            [
                'identification_card.required' => 'Sila Masukkan Kad Pengenalan',
                'identification_card.unique' => 'No. Kad Pengenalan Telah Wujud',
                'name.required' => 'Sila Masukkan Nama',
                'hr_unit_id.required' => 'Sila Pilih Unit',
                'hr_position_id.required' => 'Sila Pilih Jawatan'
            ]);
        Staff::create($data);
        //dd($data);

        return $this->index();
    }

    public function createUnit(){
        $departments = Department::all();
        return view('admin.hr.createUnit', compact('departments'));
    }

    public function storeUnit(Request $request){

        $data = request()->validate(['hr_department_id' => 'required', 'name' => 'required|unique:hr_units,name', 'abbr' => 'unique:hr_units,abbr'],
            ['hr_department_id.required' => 'Sila Pilih Bahagian', 'name.required' => 'Sila Masukkan Nama Unit', 'name.unique' => 'Unit Telah Wujud', 'abbr.unique' => 'Sila Masukkan Singkatan Lain']);
        Unit::create($data);

        return $this->units();
    }
}
