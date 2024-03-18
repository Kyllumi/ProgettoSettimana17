<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Http\Requests\StoreActivityRequest;
use App\Http\Requests\UpdateActivityRequest;
use App\Models\Project;
use Auth;
use Carbon\Carbon;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $activities = $user->activities;

        return view('activities', ['activities' => $activities]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::where('user_id', Auth::user()->id)->get();
        return view('addActivity', ['user' => Auth::user()], ['projects' => $projects]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
       $data['title'] = $request->title;
       $data['description'] = $request->description;
       $data['project_id'] = $request->project_id;
       $data['start_date'] = Carbon::parse($request->start_date);

       $queryBuilder = Activity::create($data);

        return redirect()->action([ActivityController::class, 'index']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Activity $activity)
    {
        return view('activityDetail', ['activity' => $activity]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Activity $activity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateActivityRequest $request, Activity $activity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('activities.index')->with('success', 'Attività eliminata con successo.');
    }
}
