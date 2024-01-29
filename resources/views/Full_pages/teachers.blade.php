
@extends('layouts.header_footer')
 @section('content')

 <div class="container p-4">

    <h1 class="text-center mt-5" style="color:#B81398;font-family:Poppins">Our Teachers</h1>
    <div class="row d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets') }}/photos/teacher.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
    </div>
 </div>

 @endsection
