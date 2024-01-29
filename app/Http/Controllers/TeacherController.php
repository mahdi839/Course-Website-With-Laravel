<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers =Teacher::all();
        return view('teacher_backend.index',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher_backend.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'profession'=>'required',
        ]);

           Teacher::insert([
            'name'=>$request->name,
            'profession'=>$request->profession
           ]);
           return back()->with('success', 'successfully Added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher ,$id )
    {
        $single_teacher = Teacher::where('id',$id)->first();
          $single_teacher->delete();
          return back()->with('success_delete','successfully deleted!');
    }
}
