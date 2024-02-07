<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function showcategories(){
        return view('categories.index');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $projects = Project::paginate(10);
      return view('projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project=Project::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success','Project Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::where('id',$id)->first();

        return view('projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $project->name = $request->name;
        $project->status=$request->status;
        $project->save();

        return redirect()->back()->with('success','Project has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
