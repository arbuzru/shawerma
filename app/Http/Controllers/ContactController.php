<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact'); // Убедитесь, что файл resources/views/contact.blade.php существует
    }
}

