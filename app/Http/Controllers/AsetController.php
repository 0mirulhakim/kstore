<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsetController extends Controller
{
    public function formPrinter()
    {
        return view('admin.aset.formPrinter' );
    }
}
