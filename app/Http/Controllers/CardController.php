<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_cards = Card::all();

        return view('backend_card.cards.index',compact('all_cards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend_card.cards.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'headline'=> 'required',
        'description'=> 'required',
        'image'=> 'required|image|mimes:jpeg,png,jpg,gif'

       ]);

    //    upload image
    //   $ImgName = time().''. $request->file('image')->getClientOriginalExtension();
    $ImageName = time().'.'.$request->image->extension();
    $request->image->move(public_path('cards'), $ImageName);


             Card::insert([
                'headline'=> $request->headline,
                'description'=> $request->description,
                'image'=> $ImageName,
                'created_at'=> Carbon::now()

             ]);
          return back()->with('success_card', 'Card Add Successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card, $id)
    {
          $single_card = Card::where('id',$id)->first();

        return view('backend_card.cards.edit',compact('single_card'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card ,$id)
    {
        $request->validate([
            'headline'=> 'required',
            'description'=> 'required',
            'image'=> 'nullable|image|mimes:jpeg,png,jpg,gif'

           ]);
           $updated_card = Card::where('id',$id)->first();

           if(isset($request->image)){

                    //    upload image
                //   $ImgName = time().''. $request->file('image')->getClientOriginalExtension();
                $ImageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('cards'), $ImageName);

                $updated_card->image = $ImageName;
           }



                    $updated_card->headline = $request->headline;
                    $updated_card->description = $request->description;
                    $updated_card->save();
                   return back()->with('updated_card', 'Card Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card,$id)
    {
         $deleted_card= Card::where('id',$id)->first();
         unlink(public_path('cards/'.$deleted_card->image));
        $deleted_card->delete();
        return back();
    }
}
