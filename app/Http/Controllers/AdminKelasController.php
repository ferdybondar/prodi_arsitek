<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Kelas;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminKelasController extends Controller
{
  public function index()
    {
      $data = [
        'title' => 'Manajemen Kelas',
        'kelas'  => Kelas::get(),
        'content' => 'admin/kelas/index'
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
        'title' => 'Tambah Kelas',
       
        'content' => 'admin/kelas/add'
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
        'name' => 'required',
        'desc' => 'required',
        // 'body' => 'required',

    ]);


        Kelas::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan',);
        return redirect('/admin/kelas');

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
        'title' => 'Edit Kelas',
        'kelas'=> Kelas::find($id),
        'content' => 'admin/kelas/add'
    ];
    return view('admin.layouts.wrapper', $data);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //
    $kelas = Kelas::find($id);
    $data = $request->validate([
        'title' => 'required',
        'name' => 'required',
        'desc' => 'required',
        // 'body' => 'required',

    ]);
        $kelas->update($data);
        Alert::success('Sukses', 'Data Berhasil Diupdate',);
        return redirect('/admin/kelas');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    //
    $kelas = Kelas::find($id); 
    $kelas->delete();
    Alert::success('Sukses', 'Data Berhasil Dihapus',);
    return redirect('/admin/kelas');
}
}
