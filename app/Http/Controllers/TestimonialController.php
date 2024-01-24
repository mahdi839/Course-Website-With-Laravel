<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $single_testimonial =  Testimonial::all();
       return view('backend_testimonials.index',compact('single_testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
            'name'=> 'required',
            'profession'=>'required',
            'gender'=>'required',
            'comment'=>'required',
          ]);

          Testimonial::insert([
                'name'=>$request->name,
                'profession'=>$request->profession,
                'gender'=>$request->gender,
                'comment'=>$request->comment,
                'created_at'=>Carbon::now(),
          ]);
          return back()->with('success_testimonial','Testimonial Added successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial,$id)
    {
        $sin_testimonial =  Testimonial::where('id',$id)->first();
        return view('backend_testimonials.edit',compact('sin_testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial ,$id)
    {
          return dd($request->gender);
        // $request->validate([
        //     'name'=> 'required',
        //     'profession'=> 'required',
        //     'gender'=> 'required',
        //     'comment'=> 'required'

        //    ]);

        // $updated_testimonial =  Testimonial::where('id',$id)->first();


        // $updated_testimonial->name = $request->name;
        // $updated_testimonial->profession = $request->profession;
        // $updated_testimonial->gender = $request->gender;
        // $updated_testimonial->comment = $request->comment;
        // $updated_testimonial->save();

        // return back()->with('success_updated', 'Updated Successfully!');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial ,$id)
    {
        $single_testimonial =  Testimonial::where('id',$id)->first();
        $single_testimonial->delete();

        return back()->with('success_delete','Successfully Deleted!');

    }
}
