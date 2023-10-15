<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminServiceController extends Controller
{
  public function index()
    {
      $data = [
        'title' => 'Manajemen Service',
        'service'  => Service::get(),
        'content' => 'admin/service/index'
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
        'title' => 'Tambah Service',
       
        'content' => 'admin/service/add'
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
        'icon' => 'required',
        'desc' => 'required',

    ]);


        Service::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan',);
        return redirect('/admin/service');

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
        'title' => 'Edit Service',
        'service'=> Service::find($id),
        'content' => 'admin/service/add'
    ];
    return view('admin.layouts.wrapper', $data);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //
    $service = Service::find($id);
    $data = $request->validate([
        'title' => 'required',
        'icon' => 'required',
        'desc' => 'required',

    ]);
        $service->update($data);
        Alert::success('Sukses', 'Data Berhasil Diupdate',);
        return redirect('/admin/service');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    //
    $service = Service::find($id); 
    $service->delete();
    Alert::success('Sukses', 'Data Berhasil Dihapus',);
    return redirect('/admin/service');
}
}
