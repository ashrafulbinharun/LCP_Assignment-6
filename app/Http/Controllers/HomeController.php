<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $info = Storage::disk('json_data')->json('home.json');

        return view('pages.home', compact('info'));
    }
}
