<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applied_students = Enrollment::all();
       return view('applied_students_list.applied_student',compact('applied_students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'name'=> 'required',
            'father_name'=> 'required',
            'course_name'=> 'required',
            'email'=> 'required|email',
            'gender'=> 'required',
            'age'=> 'required',
            'fb_profile_link'=> 'required',
            'phone_number'=> 'required',
            'current_address'=> 'required',


         ]);
         Enrollment::insert([
            'name'=>$request->name,
            'father_name'=>$request->father_name,
            'course_name'=>$request->course_name,
            'email'=>$request->email,
            'gender'=>$request->gender,
            'age'=>$request->age,
            'fb_profile_link'=>$request->fb_profile_link,
            'phone_number'=>$request->phone_number,
            'current_address'=>$request->current_address,
            'created_at'=>Carbon::now()
         ]);
         return back()->with('success', 'successfully submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enrollment $enrollment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enrollment $enrollment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enrollment $enrollment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enrollment $enrollment,$id)
    {
       $deleted_student =  Enrollment::where('id',$id)->first();
        $deleted_student->delete();
        return back();
    }

    public function registration_enroll (){
        return view('enrollment.registration_enroll');
    }

}
