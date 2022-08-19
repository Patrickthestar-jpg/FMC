@extends('layouts.sched')

@section('title')
Gallery
@endsection

@section('content')
<html>

<head>
  <title>Gallery</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="{{ URL::asset('project/css/gallery.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/carousel.css') }}">
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
  <div class="container-fluid d-flex justify-content-center align-items-center bg-gal" style=" height:100vh;">

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="img/1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/4.jpg" />
        </div>
      
        <div class="swiper-slide">
          <img src="img/7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/10.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/11.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="img/12.jpg" />
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>







  </div>



  <!-- Event Gallery -->
  <section>
    <div class="container-fluid bg-gal2 d-flex flex-column align-items-center">

      <div class="container " style="background-color: transparent;">
        <!-- <div class="jumbotron " style="left: 0; right:0; top:0; bottom:0; margin:auto;">
          <h1><i class="fa fa-camera-retro"></i> FMC Catering Services</h1>
          <p class="h3">Event Gallery</p>
        </div> -->
        <div class="title">
          <h5>Event Gallery</h5>
          <h2><i class="fa fa-camera-retro"></i> FMC Catering Services</h2>
        </div>
      </div>

      <!-- IMAGES gallery -->
      <div class="container">
        <div class="row">
          @foreach ( $gallery as $item)

          <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
              <img src="{{$item->picture}}" style="width:100%">
              <div class="caption">
                <p style="text-align:center; color:white; wieght:bold;">{{$item->caption}}</p>
              </div>
            </div>
          </div>

          @endforeach


        </div>
      </div>
    </div>
  </section>




  <!-- Food Gallery -->
  <section>
    <div class="container-fluid bg-gal2-1 d-flex flex-column align-items-center">

      <div class="container " style="margin-top: 100px;">
        <!-- <div class="jumbotron " style="left: 0; right:0; top:0; bottom:0; margin:auto;">
          <h1><i class="fa fa-camera-retro"></i> FMC Catering Services</h1>
          <p class="h3">Food Gallery</p>
        </div> -->
        <div class="title">
          <h5 style="color: firebrick;">Food Gallery</h5>
          <h2 class="text-dark"><i class="fa fa-camera-retro "></i> FMC Catering Services</h2>
        </div>
      </div>

      <!-- IMAGES gallery -->
      <div class="container">
        <div class="row">
          @foreach ( $food as $f)

          <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
              <img src="{{$f->picture}}" style="width:100%">
              <div class="caption">
                <p style="text-align:center;  wieght:bold;">{{$f->caption}}</p>
              </div>
            </div>
          </div>

          @endforeach


        </div>
      </div>
    </div>
  </section>





  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });
  </script>


</body>

</html>

@endsection

@section('scripts')

@endsection