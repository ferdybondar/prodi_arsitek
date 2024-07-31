<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Dosen;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminDosenController extends Controller
{
  public function index()
    {
      $data = [
        'title' => 'Manajemen Guru',
        'dosen'  => Dosen::get(),
        'content' => 'admin/dosen/index'
    ];
    return view('admin.layouts.wrapper', $data );
}

/**
 * Show the form for creating a new resource.
 */
public function create()
{
    //
    $data = [
        'title' => 'Tambah Guru',
       
        'content' => 'admin/dosen/add'
    ];
    return view('admin.layouts.wrapper', $data);
}

/**
 * Store a newly created resource in storage.
 * @param \illuminate\Http\Request $request
 * @return \illuminate\Http\Response
 */
public function store(Request $request)
{
    // dd($request->all());//
    $data = $request->validate([
        'title' => 'required',
        //'name' => 'required',
        'desc' => 'required',

    ]);


        Dosen::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan',);
        return redirect('/admin/dosen');

}

/**
 * Display the specified resource.
 */
public function show(string $id)
{
    //
}

/**
 * Show the form for editing the specified resource.
 */
public function edit(string $id)
{
    //
    $data = [
        'title' => 'Edit Guru',
        'dosen'=> Dosen::find($id),
        'content' => 'admin/dosen/add'
    ];
    return view('admin.layouts.wrapper', $data);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //
    $dosen = Dosen::find($id);
    $data = $request->validate([
        'title' => 'required',
        //'name' => 'required',
        'desc' => 'required',

    ]);
        $dosen->update($data);
        Alert::success('Sukses', 'Data Berhasil Diupdate',);
        return redirect('/admin/dosen');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    //
    $dosen = Dosen::find($id); 
    $dosen->delete();
    Alert::success('Sukses', 'Data Berhasil Dihapus',);
    return redirect('/admin/dosen');
}
}
