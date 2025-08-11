<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(Project::all());
    }
    public function show(Project $project)
    {
        return new ProjectResource($project);
    }

    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required|string',
    //         'description' => 'required|string',
    //         'link' => 'required|string',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);

    //     $data['image'] = $request->file('image')->store('images', 'public');

    //     $project = Project::create($data);
    // }
}
