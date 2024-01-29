@extends('layouts.header_footer')
 @section('content')
{{-- testimonial start --}}

<section id="testimonial">
    <div class="container mt-5">
        <div class="testimonial-header text-center">
            <h4 class=" mb-1" style="color:black; font-family:Poppins;">Our Testimonial</h4>
            <h1 class="display-5 mb-5  mt-3 " style="color:#B81398; font-family: 'Tiro Bangla', serif; "> শিক্ষার্থীরা যা বলেছে</h1>
        </div>

        <div class="row d-flex justify-content-center" >

                @foreach ($single_testimonial as $testimonial)
            <div class="testimonial-item img-border-radius bg-light rounded p-lg-4 col-md-6 col-sm-12 all_testi m-lg-2 ml-md-2 mt-sm-2 " style="max-width:20rem; min-height:25rem;">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x  position-absolute" style="bottom: 30px; right: 0;color:#B81398"></i>
                    <div class="mb-4 pb-4 testimonial-border-bottom ">



                        <p class="mb-0 mt-3"> {{ Illuminate\Support\Str::limit($testimonial->comment,120) }} </p>
                        <hr style="color: #B81398">
                    </div>
                    <div class="d-flex align-items-center ">
                        <div class=" rounded">

                            @if ($testimonial->gender == 1 )
                            <img src="{{ asset('assets') }}/photos/ladis_avater.png" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            @elseif ($testimonial->gender == 0)
                            <img src="{{ asset('assets') }}/photos/man.png" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                            @endif
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="" style="color:black;font-weight:normal; font-family:Poppins;">{{ $testimonial->name }}</h4>
                            <p class="m-0 pb-3">{{ $testimonial->profession }}</p>
                            <div class="d-flex pe-5">
                                <i class="fas fa-star " style="color:#B81398"></i>
                                <i class="fas fa-star " style="color:#B81398"></></i>
                                <i class="fas fa-star " style="color:#B81398"></></i>
                                <i class="fas fa-star " style="color:#B81398"></></i>
                                <i class="fas fa-star" style="color:#B81398"></></i>
                            </div>
                        </div>


                </div>


            </div>
        </div>
        @endforeach



    </div>

</section>


@endsection

{{-- testimonial end --}}

