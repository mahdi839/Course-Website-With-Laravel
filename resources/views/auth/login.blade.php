 @extends('layouts.header_footer')
@section('content')
{{-- <div class="container mt-3">
    <div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h2 style="color:#B81398;">Log In</h2>
        </div>
        <div class="card-body">

    <form method="POST" action="{{ route('login') }}">
        @csrf

      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Password:</label>
        <input type="password" class="form-control" id="email" placeholder="Enter email" name="password">
      </div>


      <button type="submit" class="btn" style="background: #B81398;color:white;">Submit</button>
    </form>
    <br>
    <h5>don't have an account?</h5>
    <a href="{{ route('register') }}" style="text-decoration: none;color:#B81398"> Register your account!</a>
        </div>
    </div>
   </div>
  </div>
    </div> --}}
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block register_photo_div  ">

                      <div class="login_welcome">
                        <img src="{{ asset('assets') }}/photos/logo.png" alt="">
                        <h1 class="ms-3">أهلا و سهلا</h1>
                      <h1 class="ms-3">مرحبا بك</h1>
                      </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">

                                <h1 class="h4  mb-4" style="color:black"> Admin <span style="color: #B81398 ">Log In</span> </h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Password" name="password">
                                </div>


                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                  Lon In
                                </button>
                                <hr>

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="{{ route('register') }}"> haven't an account? Register!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
