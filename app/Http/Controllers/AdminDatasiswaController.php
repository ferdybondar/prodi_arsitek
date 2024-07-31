<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Datasiswa;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class AdminDatasiswaController extends Controller
{
  public function index(Request $request)
    {
        $data = [
            'title' => 'Manajemen Datasiswa',
            'datasiswa'  => Datasiswa::paginate(5),
            'content' => 'admin/datasiswa/index'
    ];
    return view('admin.layouts.wrapper',$data);
}

    public function cetak()
    {
        $datasiswa  = Datasiswa::get();
        return view('admin.datasiswa.cetak',compact('datasiswa'));
}
/**
 * Show the form for creating a new resource.
 */
public function create()
{
    //
    $data = [
        'title' => 'Tambah Datasiswa',
       
        'content' => 'admin/datasiswa/add'
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
    // $request->validate([
    //     'title' => 'required|string',
    //     'nis' => 'required|max:7|unique:Datasiswa,nis',
    //     'alamat' => 'required',
    //     'jenis_kelamin' => 'required',
    //     'agama' => 'required',
    // ]);

    // $title = $request->input('title');
    // $nis = $request->input('nis');
    // $alamat = $request->input('alamat');
    // $jenis_kelamin = $request->input('jenis_kelamin');
    // $agama = $request->input('agama');
    // $data = [
    //     'title' => $title,
    //     'nis' => $nis,
    //     'alamat' => $alamat,
    //     'jenis_kelamin' => $jenis_kelamin,
    //     'agama' => $agama,
    // ];

    // $existingNIS = Datasiswa::pluck('nis')->toArray();

    // if (in_array($nis, $existingNIS)) {
    //     return redirect()->back()->with('error', 'NIS sudah ada dalam database.');
    // }

    $data = $request->validate([
        'title' => 'required',
        'nis' => 'required|numeric|unique:datasiswas,nis',
        'kelas' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',

    ]);


        Datasiswa::create($data);
        Alert::success('Sukses', 'Data Berhasil Ditambahkan',);
        return redirect('/admin/datasiswa')->with('success', 'Data berhasil ditambahkan.');

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
        'title' => 'Edit Datasiswa',
        'datasiswa'=> Datasiswa::find($id),
        'content' => 'admin/datasiswa/add'
    ];
    return view('admin.layouts.wrapper', $data);
}

/**
 * Update the specified resource in storage.
 */
public function update(Request $request, string $id)
{
    //
    $datasiswa = Datasiswa::find($id);
    $data = $request->validate([
        'title' => 'required',
        'nis' => 'required|numeric',
        'kelas' => 'required',
        'tanggal_lahir' => 'required',
        'alamat' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
    ]);
        $datasiswa->update($data);
        Alert::success('Sukses', 'Data Berhasil Diupdate',);
        return redirect('/admin/datasiswa');
}

/**
 * Remove the specified resource from storage.
 */
public function destroy(string $id)
{
    //
    $datasiswa = Datasiswa::find($id); 
    $datasiswa->delete();
    Alert::success('Sukses', 'Data Berhasil Dihapus',);
    return redirect('/admin/datasiswa');
}

public function search(Request $request)
{
    $search_text = $request['query'];
    $datasiswa = Datasiswa::where('title', 'LIKE', '%' . $search_text. '%')
    ->orWhere('nis', 'LIKE', '%' . $search_text. '%')
    ->orWhere('kelas', 'LIKE', '%' . $search_text. '%')
    ->orWhere('tanggal_lahir', 'LIKE', '%' . $search_text. '%')
    ->orWhere('alamat', 'LIKE', '%' . $search_text. '%')
    ->orWhere('agama', 'LIKE', '%' . $search_text. '%')
    ->get();
    $data = [
        'content' => 'admin/datasiswa/search'
    ];
    return view('admin.layouts.wrapper', compact('datasiswa'), $data);
}
 public function tes(Request $request)
 {

 }
}
