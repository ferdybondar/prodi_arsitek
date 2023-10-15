<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Pesan;

class HomeContactController extends Controller
{
    //
    function index()
    {
        $data = [
            'content' => 'home/contact/index'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function send(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'desc' => 'required'
        ]);

        Pesan::create($data);
        Alert::success('Sukses', 'Pesan anda berhasil dikirim');
        return redirect('/contact');

    }
}
