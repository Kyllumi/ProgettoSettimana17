<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::with('activities')->where('user_id', Auth::user()->id)->paginate(7);

        return view('projects', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('addProject', ['user' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $data = $request->only(['name', 'description', 'language']);
        $data['user_id'] = Auth::user()->id;
        $data['created_at'] = Carbon::now();

        $queryBuilder = Project::create($data);

        return redirect()->action([ProjectController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('projectDetail', ['project' => $project->load('activities')]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
