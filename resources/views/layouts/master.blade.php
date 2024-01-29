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
   <section id='about'>
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


        <div class="card  " >

            <img src="/cards/{{$card->image }}"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title card-heading">{{ $card->headline }}</h5>
              <p class="card-text">
                {!! \Illuminate\Support\Str::limit(strip_tags($card->description), 68) !!}
               </p>
              <a href="{{ route('card_details',$card->id) }}" class="btn " style="background: #B81398;color:white;" ‍>View Details</a>
            </div>
          </div>
          @endforeach
        </div>
        <a class="btn" href="{{ route('all_card') }}" style="background: #B81398;color:white;">View All Courses</a>
    </div>
   </div>
   </section>
   {{-- our course part end --}}

{{-- testimonial start --}}

<section id="testimonial">
    <div class="container mt-5">
        <div class="row">
            <div class="testimonial-header text-center">
                <h4 class=" mb-1" style="color:black; font-family:Poppins;">Our Testimonial</h4>
                <h1 class="display-5 mb-5  mt-3 " style="color:#B81398; font-family: 'Tiro Bangla', serif; "> শিক্ষার্থীরা যা বলেছে</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                @foreach ($single_testimonial as $testimonial)
            <div class="testimonial-item img-border-radius bg-light rounded p-4" style="min-height:25rem;">
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

    </div>
    <a href="{{ route('all_testimonial') }}" class="btn justifiy-content-right" style="background: #B81398;color:#fff"> View All Testimonial &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
</section>




{{-- testimonial end --}}

{{-- FAQ section start --}}
<div class="container mt-5 ">
    <div class="row">
        <div class="col-12">
            <section id="faq" class="pb-5">
                <h1 class="text-center mt-5 mb-4" style="color: #B81398">আপনার প্রশ্ন ও উত্তর</h1>



                <div class="accordion" id="accordionExample">
                    @foreach ($all_faqs->take(5) as $faq)
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">

                        <button class=" accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseOne{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne">
                       <span style="color: #2307f0 ; font-weight:600; font-family:Poppins;"> {{ $faq->question }}   </span>                      </button>
                      </h2>
                      <div id="collapseOne{{ $faq->id }}" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          {{ $faq->answer }}
                        </div>
                      </div>

                    </div>


                 @endforeach
                  </div>
                  <a href="{{ route('all_faq') }}" class="btn justifiy-content-right mt-4" style="background: #B81398;color:#fff"> View All &nbsp; <i class="fa-solid fa-arrow-right"></i></a>
            </section>
        </div>
    </div>
</div>
{{-- FAQ section start --}}
 @endsection

