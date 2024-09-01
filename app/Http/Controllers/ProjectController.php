<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller {
    public function index() {
        $info = Storage::disk('json_data')->json('projects.json');

        return view('pages.projects', compact('info'));
    }

    public function show($id) {
        $info = Storage::disk('json_data')->json('projects.json');

        $project = collect($info['projects'])->firstWhere('id', $id);

        return view('pages.project-details', compact('project'));
    }
}