<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about'); // Убедитесь, что файл resources/views/about.blade.php существует
    }
}

