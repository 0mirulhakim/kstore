<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index()
    {
        $keyword = request()->get('nokp');

        $staff = Staff::where('identification_card','=',$keyword)->get();
        return view('admin.aset.index')->with(compact('staff'));
    }

    public function formPrinter()
    {
        return view('admin.aset.formPrinter');
    }
}
