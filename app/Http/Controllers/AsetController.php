<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function index()
    {
        return view('admin.aset.index');
    }

    public function formPrinter()
    {
        return view('admin.aset.formPrinter');
    }
}
