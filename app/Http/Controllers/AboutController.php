<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $info = Storage::disk('json_data')->json('about.json');

        return view('pages.about', compact('info'));
    }
}
