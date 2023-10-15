<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Kurikulum;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminKurikulumController extends Controller
{
  public function index()
    {
      $data = [
        'title' => 'Manajemen Kurikulum',
        'kurikulum'  => Kurikulum::get(),
        'content' => 'admin/kurikulum/index'
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
        'title' => 'Tambah Kurikulum',
       
        'content' => 'admin/kurikulum/add'
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
        'body' => 'required',

    ]);


        Kurikulum::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan',);
        return redirect('/admin/kurikulum');

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
        'title' => 'Edit Kurikulum',
        'kurikulum'=> Kurikulum::find($id),
        'content' => 'admin/kurikulum/add'
    ];
    return view('admin.layouts.wrapper', $data);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //
    $kurikulum = Kurikulum::find($id);
    $data = $request->validate([
        'title' => 'required',
        'name' => 'required',
        'desc' => 'required',
        'body' => 'required',

    ]);
        $kurikulum->update($data);
        Alert::success('Sukses', 'Data Berhasil Diupdate',);
        return redirect('/admin/kurikulum');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    //
    $kurikulum = Kurikulum::find($id); 
    $kurikulum->delete();
    Alert::success('Sukses', 'Data Berhasil Dihapus',);
    return redirect('/admin/kurikulum');
}
}
