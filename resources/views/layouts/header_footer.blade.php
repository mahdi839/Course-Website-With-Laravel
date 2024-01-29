<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets') }}/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- Custom fonts for this template-->
     <link href="{{ asset('assets') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link
         href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
         rel="stylesheet">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
         <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Tiro+Bangla&display=swap" rel="stylesheet">

     <!-- Custom styles for this template-->
     <link href="{{ asset('backend_assets') }}/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
    {{-- header start --}}

    <div class='nav-div'>
        <div class="   para">
        <a href="#" class='pe-lg-5 ahlan'>আসসালামু আলাইকুম।---- আহলান- সাহলান</a>

      </div>

       <section id='nav-section'>
       <nav class="navbar navbar-expand-lg navbar-light ">
       <div class="container">
         <a class="navbar-brand" href="/"><img src='{{ asset('assets') }}/photos/logo.png' alt="" /></a>
         <button class="navbar-toggler bg-light " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon  "></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active " aria-current="page" href="/">Home</a>
             </li>

             <li class="nav-item">
             <a class="nav-link" href="{{ route('all_card') }}">Course</a>
           </li>
           <li class="nav-item">
            <a class="nav-link" href="{{ route('all_testimonial') }}">Testimonial</a>
          </li>
           <li class="nav-item">
               <a class="nav-link"  href="{{ route('all_faq') }}">FAQ</a>
             </li>
             <li class="nav-item">
                <a class="nav-link"  href="{{ route('all_teachers') }}">Our-Teachers</a>
              </li>
           </ul>



          <div class="enb"> <a class="btn  btn-md mr-5   text-light "
            href="{{ route('registration_enroll') }}" role="button" style="background: #B81398;font-family:Poppins;"> Enroll Now </a></div>

           <div class="dropdown me-5 mt-sm-2 register-dropdown ">
            <a class="btn text-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">

                <i class="fa-solid fa-user"></i>

            </a>

            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                @auth
                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Go To Dashboard</a></li>
                @endauth
                @guest
                <li><a class="dropdown-item" href="{{ route('login') }}">Admin Login</a></li>
                @endguest


            </ul>
          </div>
         </div>
       </div>

     </nav>
       </section>


        </div>

   {{-- header end --}}


   @yield('content')


 {{-- footer start --}}
 <div class="footer-main mt-5">
    <div class='container footer'>
      <div class="row">

      <div class="col-lg-7 first">
      <div class="footer-img-div">
      <img src='{{ asset('assets') }}/photos/logo.png' alt=""  />
      </div>
      <p class='p-2'>দারুল উলুম একাডেমি শুধু একটি নামই নয়। এটিকে এক মহান কর্ম-পরিকল্পনা বাস্তবায়নের সূচনা বলা যেতে পারে। উম্মতে মুসলিমার ইলমি জাগরণের ফিকির নিয়ে ২০২২ সালের ২ সেপ্টেম্বর দারুল উলুম একাডেমি প্রতিষ্ঠিত হয়। বাংলা ভাষাভাষী আপামর মুসলিম মানসে ইলমে দ্বীনের বিভিন্ন শাখার বিস্তার ঘটানোর সুদূরপ্রসারী কর্মপন্থা হাতে নেয়‌। তারই আলোকে দারুল উলুম একাডেমী শুদ্ধ কোরআন শিক্ষা, নাজেরা ও হিফজুল কুরআন এবং আরবি ভাষা শিক্ষার কোর্স চালু করে। এবং সাধারণ মানুষের কাছে ব্যাপক জনপ্রিয়তা লাভ করে। আল্লাহ তায়ালা এই একাডেমীকে কেয়ামত পর্যন্ত কবুল ও মঞ্জুর করেন। </p>
      <div class="footer-icon p-3">
     <a href="https://mobile.facebook.com/profile.php?id=100085300484151&eav=Afbkq52vIyC19vt83t3f34uqbAJ1YZHn8sljMHuC3TkhdLv6MWa3MKCTXFldofnSb1g&paipv=0" > <i class="fa-brands fa-facebook facebook"></i> </a>
     <a href=""> <i class="fa-brands fa-youtube"></i></a>
      </div>
      </div>
       <div class="col-lg-5 footer-secend ">

       <div class="footer-third pt-lg-5 p-lg-3 ">
       <h4 class='pb-2 '>Contact Info</h4>
       <div class="phone mb-2">

       <a href=""> <i class="fa-solid fa-phone phone-icon"></i>  </a>
       <h6 >01643016545</h6>

       </div>
       <div class="gmail mb-2">
       <a href=""> <i class="fa-solid fa-envelope gmail-icon"></i> </a>
       <h6  > darululoomacademydua@gmail.com</h6>
       </div>
       <div class="gmail mb-2">
       <a href=""> <i class="fa-brands fa-edge gmail-icon"></i>  </a>
       <h6 > Darululoomacademydua.com</h6>
       </div>
       <div class="gmail mb-2 mt-5 ">
       <h6 ><span class="fw-bold">অফিস: </span>&nbsp; দেওভোগ মাদ্রাসা, মুন্সিগঞ্জ সদর, মুন্সিগঞ্জ</h6>
       </div>
       </div>

      </div>
      <p class='text-center p-sm-3'>© All Rights Reseved by Mahdi.&nbsp; This Webite Developed By Mahdi Hasan.&nbsp; 01795802507</p>
      </div>
    </div>
    </div>
{{-- footer end --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

  $('.owl-carousel').owlCarousel({
      loop:true,
      margin:10,
      nav:true,
     autoplay:true,
     autoplayTimeout:3000,
     autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          768:{
            items:2
          },
          1000:{
              items:3
          }
      }
  })

</script>

</body>
</html>
