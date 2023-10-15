<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    //
    function index() 
    {

        $data = [
          'content' => 'home/auth/login'
        ];
        return view('home.layouts.wrapper', $data);
    }

    function doLogin(Request $request)
    {
        $data = $request->validate([
            'email'=> 'required',
            'password' => 'required'
        ]);

        try {
            Auth::attempt($data);
            $request->session()->regenerate();
            return redirect('admin/dashboard');
        } catch (\Throwable $th) {
            return back()->with('loginError',$th->getMessage());
        }

        // try {
        //     if (Auth::attempt($data)) {
        //         dd("Sukses Login1");
        //         $request->session()->regenerate();
        //         dd("Sukses Login2");
        //         return redirect('admin/dashboard');
        //     }
        // } catch (\Throwable $th) {
        //     dd($th->getMessage());
        //     // return back()->with('loginError','Gagal Login, Email atau Password tidak ditemukan');
        //     return back()->with('loginError',$th->getMessage());
        // }
    }

    function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}

    

