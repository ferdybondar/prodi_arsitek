<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\About;
use App\Models\Blog;
use App\Models\Dosen;
use App\Models\Kurikulum;
use Illuminate\Support\Facades\Str;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    function index() { 
      //dd(request('search'));
      //  $/ = home::latest(); 
      //  if(request('search')){
      //  $/ -> where('title', 'like', '%'. request('search').'%');
      //  }
      $data = [
            'about' => About::first(),
            'service' => Service::limit(4)->get(),
            'blog' => Blog::limit(4)->get(),
            'content' => 'home/home/index'
        ];
        return view('home.layouts.wrapper', $data);
}

function about() {
  $data = [
      'about' => About::first(),
    'content' => 'home/about/index'
  ];
  return view('home.layouts.wrapper', $data);
}

function service() {
  $data = [
      'service' => Service::get(),
    'content' => 'home/services/index'
  ];
  return view('home.layouts.wrapper', $data);
}

function dosen() {
  $data = [
      'dosen' => Dosen::get(),
    'content' => 'home/dosen/index'
  ];
  return view('home.layouts.wrapper', $data);
}

function kurikulum() {
  $data = [
      'kurikulum' => Kurikulum::get(),
    'content' => 'home/kurikulum/index'
  ];
  return view('home.layouts.wrapper', $data);
}
}

