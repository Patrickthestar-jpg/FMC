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


  <!-- Carousel -->
  <div class="containter-fluid d-flex justify-content-center align-items-center bg-gal" style=" height:100vh;">

    <!-- CAROUSEL -->

    <div id="scene" class="row">
      <div id="left-zone" class="col-md-4">
        <ul class="list ">
          <li class="item"><input type="radio" id="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" name="basic_carousel" value="The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" checked="checked" /><label class="label_strawberry labl" for="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)">Wedding</label>
            <div class="content content_strawberry"><span></span>
              <!-- CAROUSEL RIGHT -->
              <!-- Swiper -->
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
                    <img src="img/5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="img/6.jpg" />
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
          </li>

          <li class="item"><input type="radio" id="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." name="basic_carousel" value="The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." /><label class="label_apple labl" for="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.">Debut</label>
            <div class="content content_apple">
              <!-- CAROUSEL RIGHT -->
              <!-- Swiper -->
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
                    <img src="img/5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="img/6.jpg" />
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
          </li>


          <li class="item"><input type="radio" id="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." /><label class="label_orange labl" for="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Others</label>
            <div class="content content_orange">
              <!-- CAROUSEL RIGHT -->
              <!-- Swiper -->
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
                    <img src="img/5.jpg" />
                  </div>
                  <div class="swiper-slide">
                    <img src="img/6.jpg" />
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
          </li>
        </ul>
      </div>
      <div id="middle-border"></div>
      <div id="right-zone" class="col-md-8 d-flex justify-content-center"></div>

    </div>
    <!-- end of scene -->





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
          @foreach ( $gallery as $item)

          <div class="col-md-4 col-sm-6">
            <div class="thumbnail">
              <img src="{{$item->picture}}" style="width:100%">
              <div class="caption">
                <p style="text-align:center;  wieght:bold;">{{$item->caption}}</p>
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