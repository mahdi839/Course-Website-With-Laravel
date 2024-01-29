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

                            <h1 class="h4  mb-4" style="color: #3D63D2;font-weight:bold;">Update Card Info</h1>
                        </div>


                        @if (session('updated_card'))
                           <div class="alert alert-success">{{ session('updated_card')}}</div>
                        @endif

                        <form class="user" method="POST" action="{{ route('backend_card.update',$single_card->id) }}"  enctype="multipart/form-data" >
                            @csrf
                            @method('PUt')
                            <div class="form-group ">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        placeholder=" Heading" name="headline" value="{{ old('headline', $single_card->headline) }}">
                                </div>
                                @error('headline')
                                <small class="text-danger">{{ $message }} </small>
                             @enderror

                            </div>
                            <div class="form-group">
                                <label for="comment">Description:</label>
                                <textarea class="form-control rounded summernote" rows="5" id="comment" name="description" >{{ old('description',$single_card->description) }}</textarea>
                                @error('description_two')
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
                                Update
                            </button>
                            <hr>

                        </form>





                    </div>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
