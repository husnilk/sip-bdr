<?php

namespace App\Http\Controllers;

use App\Models\ClassroomSchedule;
use Illuminate\Http\Request;
use App\Http\Resources\ClassroomScheduleResource;

class ClassroomScheduleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classroomSchedule = ClassroomScheduleResource::collection(ClassroomSchedule::with('classroom')->get());

        return $classroomSchedule;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClassroomSchedule  $classroomSchedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $classroomSchedule = ClassroomSchedule::findOrFail($id);
        return new ClassroomScheduleResource($classroomSchedule);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClassroomSchedule  $classroomSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(ClassroomSchedule $classroomSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClassroomSchedule  $classroomSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ClassroomSchedule $classroomSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClassroomSchedule  $classroomSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClassroomSchedule $classroomSchedule)
    {
        //
    }
}
