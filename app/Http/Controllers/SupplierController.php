<?php

namespace App\Http\Controllers;

use App\Supplier;
use App\Toner;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::all();
        return view('admin.supplier.index', compact('suppliers'));
    }

    public function createSupplier()
    {
        return view('admin.supplier.createSupplier');
    }

    public function storeSupplier(Request $request){

        $data = request()->validate(['name' => 'required|unique:aset_stor_suppliers,name', 'address' => 'required', 'email' => 'required', 'phone' => 'required'],
            ['name.required' => 'Sila Masukkan Nama Pembekal', 'name.unique' => 'Pembekal Telah Wujud', 'address.required' => 'Sila Masukkan Alamat Pembekal',
                'email.required' => 'Sila Masukkan email', 'phone.required' => 'Sila Masukkan No. Telefon']);
        Supplier::create($data);

        //dd ($data);
        return $this->index();
    }
}
