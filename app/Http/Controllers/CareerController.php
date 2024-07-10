<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index() {
        return view('careers.index');
    }

    public function showCareers($job) {
        return view('careers/careers.'.$job);
    }
}
