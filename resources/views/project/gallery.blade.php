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
    </head>

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">

    <div class="container">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100 imgh" src="img/1.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/2.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/3.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/4.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/9.jpg" alt="Fifth slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/10.jpg" alt="Sixth slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/7.jpg" alt="Seventh slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/8.jpg" alt="Eigth slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/11.jpg" alt="Nineth slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/12.jpg" alt="Tenth slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/13.jpg" alt="Eleventh slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100 imgh" src="img/14.jpg" alt="Twelfth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>



    <div class="container">
		<div class="jumbotron">
			<h1><i class="fa fa-camera-retro"></i> FMC Catering Services</h1>
			<p>Set up Gallery</p>
		</div>


        <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="thumbnail">
                  <img src="img/1.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Wedding at Home in Baguio</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="thumbnail">
                  <img src="img/2.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Wedding at Home in Baguio</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="thumbnail">
                  <img src="img/3.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Wedding at Home in Baguio</p>
                  </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="thumbnail">
                  <img src="img/4.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Wedding at Home in Baguio</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="thumbnail">
                  <img src="img/7.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Wedding at Home in Baguio</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="thumbnail">
                  <img src="img/8.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Event of Bb and Ginoong Calauan</p>
                  </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-4 col-sm-6">
              <div class="thumbnail">
                  <img src="img/9.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Event of Bb and Ginoong Calauan</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="thumbnail">
                  <img src="img/10.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Event of Bb and Ginoong Calauan</p>
                  </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="thumbnail">
                  <img src="img/11.jpg" style="width:100%">
                  <div class="caption">
                    <p style="text-align:center; color:white; wieght:bold;">Event of Bb and Ginoong Calauan</p>
                  </div>
              </div>
            </div>
          </div>




        <!--
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="img/1.jpg" />
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="img/2.jpg" />
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="thumbnail">
					<img src="img/3.jpg" />
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="img/4.jpg" />
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="img/11.jpg" />
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="thumbnail">
					<img src="img/6.jpg" />
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="img/7.jpg" />
				</div>
			</div>

			<div class="col-lg-4 col-sm-6">
				<div class="thumbnail">
					<img src="img/8.jpg" />
				</div>
			</div>
			<div class="col-lg-4 col-sm-12">
				<div class="thumbnail">
					<img src="img/9.jpg"/>
				</div>
			</div>
		</div>
	</div> -->



    </body>
</html>

@endsection

@section('scripts')

@endsection


