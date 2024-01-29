@extends('layouts.header_footer')
 @section('content')
 {{-- FAQ section start --}}
<div class="container mt-5 ">
    <div class="row">
        <div class="col-12">
            <section id="faq" class="pb-5">
                <h1 class="text-center mt-5 mb-4" style="color: #B81398">আপনার প্রশ্ন ও উত্তর</h1>



                <div class="accordion" id="accordionExample">
                    @foreach ($all_faqs as $faq)
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class=" accordion-button collapsed" type="button" data-bs-toggle="collapse"  data-bs-target="#collapseOne{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne">
                            <span style="color: #2307f0 ; font-weight:600; font-family:Poppins;"> {{ $faq->question }}   </span>    </button>
                      </h2>
                      <div id="collapseOne{{ $faq->id }}" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          {{ $faq->answer }}
                        </div>
                      </div>

                    </div>


                 @endforeach
                  </div>

            </section>
        </div>
    </div>
</div>
{{-- FAQ section start --}}
@endsection
