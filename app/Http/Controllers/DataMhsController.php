<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataMhsController extends Controller
{
    public function formMhs(){
        return view('form2');
    }

    public function prosesMhs(Request $request){
        $nama = $request->input('nama');
        $angkatan = $request->input('angkatan');
        $jurusan = $request->input('jurusan');

        return view('hasil2', compact('nama', 'angkatan', 'jurusan'));
    }
}
