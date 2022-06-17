<?php

namespace App\Http\Controllers;

use App\Models\library;
use Illuminate\Http\Request;


class LibraryController extends Controller
{

    public function index(){
        $data = library::all();
        return view('buku',compact('data'));
    }

    public function tambah(){
        return view('layouts/tambah');
    }

    public function insert(Request $request)
    {
        library::create($request->all());
        return redirect()->route('buku')->with('success ',' Data Berhasi di Tambahkan. ');
    }

    public function tampilkanData($id){
        $data = library::find($id);
        // dd($data);

        return view('layouts\edit', compact('data'));
    }

    public function updateData(Request $request, $id){
        $data = library::find($id); 
        $data->update($request->all());

        return redirect()->route('buku')->with('success ',' Data Berhasil Di Update . ');
    }

    public function delete($id){
        $data = library::find($id); 
        $data->delete();   

        return redirect()->route('buku')->with('success ',' Data Berhasil Di Hapus . ');
    }

    public function detail($id){
        $data = library::find($id);
        return view('layouts\detail', compact('data'));
    
    }

}
