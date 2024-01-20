 @extends('layouts.header_footer')
 @section('content')


 {{-- weave header start --}}
 <section class='wave-header'>
    <div class="contant">
    <div class="div1">
    <h1 > ইসলামী জ্ঞান অর্জনের অনন্য আয়োজন। দ্বীন শেখার সেরা প্লাটফর্ম।</h1>
    <h3>Darul Uloom Academy</h3>
    </div>
    <div class=" div2 ">
   <img src="{{ asset('assets') }}/photos/headerImage.png" alt="" />
    </div>
    </div>
    </section>
   {{-- weave header end --}}

   {{-- about us part start --}}
   <section id='about '>
    <div class='container main-about' >
    <h1 class='text-center about-heading'>{{ $backend_about_info->headline }} </span> </h1>
    <div class="row">

    <div class="col-lg-6  pt-3 pb-5  about-img">
    <img src='{{ asset('assets') }}/photos/about.png' alt="" class='about-us-image' />
    </div>
    <div class="col-lg-6  about-info">

       <p>{{ $backend_about_info->description }} </p>
    </div>
    </div>
    </div>
    </section>
   {{-- about us part end --}}

   {{-- our course part start --}}
 <section id='course'>
   <div class='container'>
   <h1 class='text-center p-5 ' style="color: #B81398">আমাদের কোর্সসমূহ </h1>
   <div class="row">
    <div class="owl-carousel owl-theme">
      @foreach ( $all_cards as $card )

   @php
        $singledes = $card->description
   @endphp
        <div class="card  " >

            <img src="/cards/{{$card->image }}"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title card-heading">{{ $card->headline }}</h5>
              <p class="card-text"> {{ Illuminate\Support\Str::limit($singledes,68) }} </p>
              <a href="#" class="btn " style="background: #B81398;color:white;" ‍>View Details</a>
            </div>
          </div>
          @endforeach
        </div>
    </div>
   </div>
   </section>
   {{-- our course part end --}}

{{-- testimonial start --}}

<section id="testimonial">
    <div class="container mt-5">
        <div class="row">
            <div class="testimonial-header text-center">
                <h4 class=" mb-1" style="color:#B81398;">Our Testimonial</h4>
                <h1 class="display-5 mb-5  mt-3 " style="color:#B81398;"> শিক্ষার্থীরা যা বলেছে</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">

            <div class="testimonial-item img-border-radius bg-light rounded p-4">
                <div class="position-relative">
                    <i class="fa fa-quote-right fa-2x  position-absolute" style="bottom: 30px; right: 0;color:#B81398"></i>
                    <div class="mb-4 pb-4 testimonial-border-bottom "></>
                        <p class="mb-0">Lorem Ipsum is simply dummy text of the printing Ipsum has been the industry's standard dummy text ever since the 1500s,
                        </p>
                        <hr style="color: #B81398">
                    </div>
                    <div class="d-flex align-items-center ">
                        <div class=" rounded">
                            <img src="{{ asset('assets') }}/photos/ladis_avater.png" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                        </div>
                        <div class="ms-4 d-block">
                            <h4 class="" style="color:black;font-weight:normal; font-family:Poppins;">Client Name</h4>
                            <p class="m-0 pb-3">Profession</p>
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


        </div>
    </div>
</section>




{{-- testimonial end --}}
 @endsection

