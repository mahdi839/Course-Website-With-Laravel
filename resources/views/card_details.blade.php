
@extends('layouts.header_footer')
@section('content')

<div class="container mt-5">
    <div class="row">
        <h1 class="text-center" style="color: #B81398">{{ $card_details->headline }}</h1>
        <div class="col-12 ">

            <h6 class="pt-5"> @php
                echo $card_details->description
            @endphp </h6>

        </div>

        <a class="btn  btn-md d-flex justify-content-center mt-5 text-light " data-bs-toggle="modal" data-bs-target="#enrollnow" href="#" role="button" style="background: #B81398"> Enroll Now </a>
    </div>
</div>

{{-- Enrollment Pop Up start --}}
<div class="modal fade" id="enrollnow" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
      <div class="modal-content">
        <div class="modal-header">
            <h4 class="text-center modal-title " id="enrollnow"  style="color: #B81398">{{ $card_details->headline }}</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/action_page.php">
                <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color: #B81398">Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color: #B81398">Father's Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Father's Name" name="father'sname">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color: #B81398">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color: #B81398">Course Name:</label>
                    <input type="text" class="form-control" id="email" placeholder="Course Name" name="course">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color: #B81398">Enter Gender Name(male/female):</label>
                    <input type="text" class="form-control" id="name" placeholder="male/female" name="gender">
                  </div>
                  <div class="mb-3 mt-3">
                    <label for="email" class="form-label" style="color: #B81398">Age</label>
                    <input type="number" class="form-control" id="name" placeholder="Age" name="age">
                  </div>

                <div class="mb-3">
                  <label for="pwd" class="form-label" style="color: #B81398">Fb Profile Link:</label>
                  <input type="text" class="form-control"  placeholder="Enter Facebook Profile Link" name="fb_profile">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label" style="color: #B81398">Phone Number:</label>
                    <input type="number" class="form-control"  placeholder="Enter Your Phone Number" name="number">
                  </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1" style="color: #B81398">Current Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"  >Submit</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                      </div>

              </form>
        </div>

      </div>
    </div>
  </div>
{{-- Enrollment Pop Up end --}}


@endsection
