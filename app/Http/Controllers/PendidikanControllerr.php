<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanControllerr extends Controller
{
    //
}
public function index()
{
    return view('backend.pendidikan.index');
}
public function create()
{
    $pendidikan = null;
    return view('backend.pendidikan.create',compact('pendidikan'));
}
public function store()
{
    Pendidikan::create(Request $request)

    return redirect()->route('pedidikan.index')
                    ->with('succers','Data Pendidikan baru telah berhasil disimpan.');
}