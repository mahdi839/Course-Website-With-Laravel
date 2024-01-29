
@extends('layouts.header_footer')
 @section('content')
 <style>
     h1 {
            position: relative;
            display: inline-block;
            text-align: center;
            padding-bottom: 10px; /* Adjust this value to control the space between text and border */
        }

        h1::after {
            content: "";
            position: absolute;
            left: 50%; /* Center the border */
            bottom: 0;
            transform: translateX(-50%); /* Center the border horizontally */
            width: 50%; /* Set the border width to half of the text width */
            height: 2px; /* Set the border thickness */
            background-color: #000; /* Set the border color */
        }
</style>
 <div class="container p-4">

    <div class=" mt-5 mb-5  d-flex justify-content-center">
        <h1 style="color:#B81398;font-family:Poppins">Our Teachers</h1>
    </div>
    <div class="row d-flex justify-content-center">
        @foreach ($teachers as $teacher)


        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets') }}/photos/teacher.jpg"  class="card-img-top rounded-circle" alt="..." height="200">
            <div class="card-body">
              <h4 class="card-title text-center "style='color:#B81398'>{{ $teacher->name }}</h4>
              <p class="card-text text-center ">{{ $teacher->profession }}</p>

            </div>
          </div>
          @endforeach
    </div>
 </div>

 @endsection
