 @extends('layouts.header_footer')
@section('content')

{{-- <div class="container mt-3">
    <div class="row">
   <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h2 style="color:#B81398;">Registration Form</h2>
        </div>
        <div class="card-body">

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter email" name="name" value="{{ old('name') }}">
            @error('name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
      <div class="mb-3 mt-3">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
        @error('email')
            <small class="text-danger">{{ $message }}</small>
            @enderror
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Password:</label>
        <input type="password" class="form-control" id="email" placeholder="Enter email" name="password" >
        @error('password')
            <small class="text-danger">{{ $message }}</small>
            @enderror
      </div>
      <div class="mb-3 mt-3">
        <label for="email">Confirm Password:</label>
        <input type="password" class="form-control" id="email" placeholder="Enter email" name="password_confirmation">
        @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
            @enderror
      </div>


      <button type="submit" class="btn" style="background: #B81398;color:white;">Submit</button>
    </form>
    <br>
     <h5>have already an account?</h5>
     <a href="{{ route('login') }}" style="text-decoration: none;color:#B81398"> Log In</a>
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

                      <div class="register_welcome">
                        <img src="{{ asset('assets') }}/photos/logo.png" alt="">
                        <h1 class="ms-3">أهلا و سهلا</h1>
                      <h1 class="ms-3">مرحبا بك</h1>
                      </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">

                                <h1 class="h4  mb-4" style="color: #B81398">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group ">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder=" Name" name="name">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Confirm Password" name="password_confirmation">
                                </div>

                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>

                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="{{ route('login') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
