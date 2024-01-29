@extends('dashboard')
@section('backend_header_footer')

<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block register_photo_div  ">

                  <div class="register_welcome">
                    <img src="{{ asset('assets') }}/photos/logo.png" alt="">

                  </div>
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">

                            <h1 class="h4  mb-4" style="color: #3D63D2;font-weight:bold;">Add Teacher Info</h1>
                        </div>


                        @if (session('success'))
                           <div class="alert alert-success">{{ session('success')}}</div>
                        @endif

                        <form class="user" method="POST" action="{{ route('teacher_backend.store') }}" >
                            @csrf
                            <div class="form-group ">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="Enter Teacher Name" name="name">
                                </div>
                                @error('Name')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror

                            </div>
                            <div class="form-group">
                                <label for="comment">Add Profession</label>
                                <textarea class="form-control rounded " rows="3" id="comment" name="profession" >{{ old('profession') }}</textarea>
                                @error('profession')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                               ADD Teacher
                            </button>
                            <hr>

                        </form>
                        <hr>




                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
