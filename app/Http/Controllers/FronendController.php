<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Card;
use App\Models\Faq;
use App\Models\Testimonial;
use Illuminate\Http\Request;

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



}
