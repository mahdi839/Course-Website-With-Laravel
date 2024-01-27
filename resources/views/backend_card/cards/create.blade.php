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

                            <h1 class="h4  mb-4" style="color: #3D63D2;font-weight:bold;">Add Card Info</h1>
                        </div>


                        @if (session('success_card'))
                           <div class="alert alert-success">{{ session('success_card')}}</div>
                        @endif

                        <form class="user" method="POST" action="{{ route('backend_card.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder=" Heading" name="headline">
                                </div>
                                @error('headline')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror

                            </div>
                            <div class="form-group">
                                <label for="comment">** এই কোর্সে যা যা শিখতে পারবেন ইনশাআল্লাহ</label>
                                <textarea class="form-control rounded summernote" rows="5" id="comment" name="description" >{{ old('description') }}</textarea>
                                @error('description')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror
                            </div>
                            

                            <div class="form-group">
                                <input type="file"
                                    placeholder="Upload Image" name="image">
                            </div>
                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                         @enderror
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                               ADD CARD
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
