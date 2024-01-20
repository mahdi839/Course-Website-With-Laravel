<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Carbon\Carbon;
class BackendController extends Controller
{
   public function backend_about (){
    $backend_about_info = About::latest()->first();

       return view('backend_pages.backend_about',compact('backend_about_info'));
   }
   public function backend_about_create (Request $request){

            $request->validate([
             'headline'=> 'required',
             'description'=> 'required'
            ]);

            About::insert([
                'headline'=>$request->headline,
                'description'=>$request->description,
                'created_at'=>Carbon::now()

            ]);
            return back()->with('success_about', 'Info Added Successfully!');

        }
                public  function backend_about_edit (){
                    $backend_about_info = About::latest()->first();
                    return view('backend_pages.about_edit',compact('backend_about_info'));
                }


                public  function backend_about_update (Request $request,$id){
                    $about_update =About::where('id',$id)->latest()->first();
                    $about_update->headline = $request->headline;
                    $about_update->description = $request->description;
                    $about_update->save();

                    return back()->with('success_update', 'Updated Successfully');

                }

                public function backend_course (){
                    return view('backend_pages.backend_course');
                }

                public function backend_course_create (){
                    
                }
        }
