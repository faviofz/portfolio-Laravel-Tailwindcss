<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Events\ProjectSaved;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SaveProjectRequest;
use App\Models\Category;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('projects.index', [
            'projects' => Project::with('category')->latest()->simplePaginate(9)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create', [
            'project' => new Project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request)
    {
        $project = new Project($request->validated());

        $project->image = Storage::putFile('images', $request->file('image'));

        $project->save();

        ProjectSaved::dispatch($project);

        return redirect()->route('project.index')->with('status', 'El proyecto se guardó con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.show', ['project' => $project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project,
            'categories' => Category::pluck('name', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, SaveProjectRequest $request)
    {
        if ($request->hasFile('image')) {
            Storage::delete($project->image);

            $project->fill($request->validated());

            $project->image = Storage::putFile('images', $request->file('image'));

            $project->save();

            ProjectSaved::dispatch($project);
        } else {
            $project->update($request->validated());
        }

        return redirect()->route('project.show', $project)->with('status', 'El proyecto se actualizó con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Storage::delete($project->image);

        $project->delete();

        return redirect()->route('project.index')->with('status', 'El proyecto se eliminó con éxito.');
    }
}
