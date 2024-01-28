@extends('layouts.header_footer')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center" style="color: #B81398">{{ $card_details->headline }}</h1>
            <div class="col-12 ">
               

                <h6 class="pt-5"> @php
                    echo $card_details->description;
                @endphp </h6>

            </div>

            <a class="btn  btn-md d-flex justify-content-center mt-5 text-light "
                 href="{{ route('registration_enroll') }}" role="button" style="background: #B81398"> Enroll Now </a>
        </div>
    </div>
@endsection
