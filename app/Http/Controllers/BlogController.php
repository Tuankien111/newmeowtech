<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index() {
        return view('blog.index');
    }

    public function showDetail($id) {
        return view('blog.detail', ['id' => $id]);
    }
    
}
