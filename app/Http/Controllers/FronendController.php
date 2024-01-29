<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Card;
use App\Models\Faq;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FronendController extends Controller
{
     public function showHome (){
        $backend_about_info = About::latest()->first();
        $all_cards = Card::all();
        $single_testimonial = Testimonial::all();
        $all_faqs = Faq::all();
        return view('layouts.master',compact('backend_about_info','all_cards','single_testimonial','all_faqs'));
     }
     public function card_details ($id){
        $card_details =Card::where('id',$id)->first();
        return view('card_details', compact('card_details'));
     }
     public function all_card (){
        $all_cards = Card::all();
        return view('Full_pages.all_card',compact('all_cards'));
     }

     public function all_testimonial (){
        $single_testimonial = Testimonial::all();
        return view('Full_pages.all_testimonial',compact('single_testimonial'));
     }
     public function all_faq (){

        $all_faqs = Faq::all();
        return view('Full_pages.all-faq',compact('all_faqs'));
     }

public function all_teachers (){


        return view('Full_pages.teachers');
     }


}
