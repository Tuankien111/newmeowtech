<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index() {
        return view('services.index');
    }

    public function show() {
            return view('services.data');
    }

    public function showDatasolution($name) {
        return view('services/data-solutions.'.$name);
    }

    public function showChatbot() {
        return view('services.chatbot');
    }

}
