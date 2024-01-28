 @extends('layouts.header_footer')
@section('content')
<div class="container mt-5 ">
    <div class="row">
        <div class="col-10">
            <div class="card">
                <div class="card-heading ">

                   <h1 class="text-center" style="font-family: Poppins;"><i class="fa-solid fa-registered"></i> Enroll Now</h1>
                </div>
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
               
                @endif
                <div class="card-body">
                    <form action="{{ route('enroll.store') }}" method="POST">
                        @csrf
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label" style="color: #B81398">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Your Name"
                                name="name">

                        </div>
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label" style="color: #B81398">Father's Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Father's Name"
                                name="father_name">
                        </div>
                        @error('father_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label" style="color: #B81398">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                name="email">
                        </div>
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label" style="color: #B81398">Course Name:</label>
                            <input type="text" class="form-control" id="email" placeholder="Course Name"
                                name="course_name">
                        </div>
                        @error('course_name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label" style="color: #B81398">Enter Gender
                                Name(male/female):</label>
                            <input type="text" class="form-control" id="name" placeholder="male/female"
                                name="gender">
                        </div>
                        @error('gender')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label" style="color: #B81398">Age</label>
                            <input type="number" class="form-control" id="name" placeholder="Age" name="age">
                        </div>
                        @error('age')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3">
                            <label for="pwd" class="form-label" style="color: #B81398">Fb Profile Link:</label>
                            <input type="text" class="form-control" placeholder="Enter Facebook Profile Link"
                                name="fb_profile_link">
                        </div>
                        @error('fb_profile_link')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="mb-3">
                            <label for="pwd" class="form-label" style="color: #B81398">Phone Number:</label>
                            <input type="number" class="form-control" placeholder="Enter Your Phone Number"
                                name="phone_number">
                        </div>
                        @error('phone_number')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" style="color: #B81398">Current Address</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="current_address"></textarea>
                        </div>
                        @error('current_address')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
