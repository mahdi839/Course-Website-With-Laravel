@extends('layouts.header_footer')
@section('content')

   {{-- our course part start --}}
   <section id='course'>
    <div class='container'>
    <h1 class='text-center p-5 ' style="color: #B81398">আমাদের কোর্সসমূহ </h1>
    <div class="row">

       @foreach ( $all_cards as $card )

         <div class="card" style="width: 18rem;" >

             <img src="/cards/{{$card->image }}"  class="card-img-top" alt="...">
             <div class="card-body">
               <h5 class="card-title card-heading">{{ $card->headline }}</h5>
               <p class="card-text">
                 {!! \Illuminate\Support\Str::limit(strip_tags($card->description), 68) !!}
                </p>
               <a href="{{ route('card_details',$card->id) }}" class="btn " style="background: #B81398;color:white;" ‍>View Details</a>
             </div>
           </div>
           @endforeach

     </div>
    </div>
    </section>
    {{-- our course part end --}}

@endsection
