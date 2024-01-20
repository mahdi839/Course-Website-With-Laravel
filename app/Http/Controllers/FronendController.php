<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Card;
use Illuminate\Http\Request;

class FronendController extends Controller
{
     public function showHome (){
        $backend_about_info = About::latest()->first();
        $all_cards = Card::all();
        return view('layouts.master',compact('backend_about_info','all_cards'));
     }



}
