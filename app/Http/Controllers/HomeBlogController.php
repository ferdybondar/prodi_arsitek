<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Support\Facades\Str;
use Illuminate\Http\Request;

class HomeBlogController extends Controller
{
    function index() {
        $data = [
            'blog' => Blog::get(),
          'content' => 'home/blog/index'
        ];
        return view('home.layouts.wrapper', $data);
      }

      public function show($id)
    {
        $data = [
            'blog'=> Blog::find($id),
            'content' => 'home/blog/show'
        ];
        return view('home.layouts.wrapper', $data);
    }
}
