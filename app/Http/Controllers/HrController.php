<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Staff;
use App\Department;
use App\Position;
use App\Unit;

class HrController extends Controller
{
    public function index(){
        $staffs = Staff::orderBy('created_at','DESC')->latest()->paginate(config('settings.page_limit'));
        return view('admin.hr.index', compact('staffs'));
    }


    public function units(Request $request){

        $units = Unit::where('hr_department_id', $request->hr_department_id)->pluck("name", "id");
        dd($units);
        return response()->json($units);
    }

    public function createStaff(){
        $positions = Position::all();
        $departments = Department::all();
        $units = Unit::all();
        return view('admin.hr.createStaff', compact('positions','departments', 'units'));
    }

    public function editStaff($staffs){
        return view('admin.hr.index', compact('staffs'));
    }

    public function storeStaff($staffs){
        return view('admin.hr.index', compact('staffs'));
    }
}
