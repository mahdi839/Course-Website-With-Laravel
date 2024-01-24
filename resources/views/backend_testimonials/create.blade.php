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

                            <h1 class="h4  mb-4" style="color: #3D63D2;font-weight:bold;">Add Testimonial</h1>
                        </div>


                        @if (session('success_testimonial'))
                           <div class="alert alert-success">{{ session('success_testimonial')}}</div>
                        @endif

                        <form class="user" method="POST" action="{{ route('backend_testimonial.store') }}">
                            @csrf
                            <div class="form-group ">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder=" name" name="name">
                                </div>
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror

                            </div>
                            <div class="form-group ">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder="profession" name="profession">
                                </div>
                                @error('profession')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror

                            </div>

                            <div class="form-group ">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <select name="gender" id="">
                                        <option value="0">male</option>
                                        <option value="1">female</option>
                                    </select>
                                </div>
                                @error('gender')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror

                            </div>
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                <textarea class="form-control rounded" rows="5" id="comment" name="comment" >{{ old('description') }}</textarea>
                                @error('comment')
                                <small class="text-danger">{{ $message }}</small>
                             @enderror
                            </div>


                            @error('image')
                            <small class="text-danger">{{ $message }}</small>
                         @enderror
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                               ADD Testimonial
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

