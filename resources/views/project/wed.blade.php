@extends('layouts.sched')

@section('title')
    Wedding
@endsection

@section('content')
    <html>

    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('project/css/wedding.css') }}">
    </head>

    <body   style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">
        <p class="FMC">FMC Catering Services</p>
        <p class="wd"><u>Wedding and Debut Package</u></p>
        <!--Carousel Wrapper-->
        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

            <!--Controls-->
            <div class="controls-top">
                <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                        class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controls-->

            <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-example" data-slide-to="1"></li>
                <li data-target="#multi-item-example" data-slide-to="2"></li>

            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

                <!--First slide-->
                <div class="carousel-item active">

                    <section class="wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg');">
                                        <img class="card-img d-none" src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        1</a></h4>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal1"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--second card-->
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg')">
                                        <img class="card-img d-none" src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        2</a></h4>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal2"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Third card-->
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg')">
                                        <img class="card-img d-none" src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        3</a></h4>
                                                <small class="card-meta mb-2">Per Plate</small>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal3"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>
                </div>
                <!--/.First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                    <section class="wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg');">
                                        <img class="
                                        card-img d-none"
                                            src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        4</a></h4>
                                                <small class="card-meta mb-2">Per Plate</small>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal4"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg')">
                                        <img class="card-img d-none" src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        5</a></h4>
                                                <small class="card-meta mb-2">Per Plate</small>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal5"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg')">
                                        <img class="card-img d-none" src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        6</a></h4>
                                                <small class="card-meta mb-2">Service Only</small>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal6"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>

                </div>
                <!--/.Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <section class="wrapper">
                        <div class="container">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg');">
                                        <img class="
                                        card-img d-none"
                                            src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Wedding and Debut</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        7</a></h4>
                                                <small class="card-meta mb-2">Service Only</small>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <button type="button" data-toggle="modal" data-target="#modal7"
                                                            class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">View More Details</h6>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card text-white card-has-bg click-col"
                                        style="background-image:url('img/1.jpg');">
                                        <img class="
                                        card-img d-none"
                                            src="img/1.jpg" alt="Package 1">
                                        <div class="card-img-overlay d-flex flex-column">
                                            <div class="card-body">
                                                <small class="card-meta mb-2">Customize</small>
                                                <h4 class="card-title mt-0 "><a class="text-white" herf="#">Package
                                                        8</a></h4>
                                                <small class="card-meta mb-2"></small>
                                                <small><i class="far fa-clock"></i> </small>
                                            </div>
                                            <div class="card-footer">
                                                <div class="media">

                                                    <div class="media-body">
                                                        <a href="{{ route('customize.package.index')}}" class="btn btn-outline-info">
                                                            <h6 class="my-0 text-white d-block">Customize</h6>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </section>

                </div>
                <!--/.Third slide-->



            </div>
            <!--/.Slides-->

        </div>
        <!--/.Carousel Wrapper-->


        <!-- Modal1 -->
        <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">100 Person at Php 44,999.00</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Buffet</h2>
                        <ul>
                            <li>Steam Rice</li>
                            <li>Pork</li>
                            <li>Fish</li>
                            <li>Chicken</li>
                            <li>Vegetable</li>
                            <li>Desert</li>
                            <li>Drinks</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete Set Up With Backdrop</p>
                        <h2>Free</h2>
                        <p>Pasta or 1 Desert</p>
                    </div>
                    <div class="modal-footer">
                        <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal2 -->
        <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">50 Person at Php 24,999.00</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Buffet</h2>
                        <ul>
                            <li>Steam Rice</li>
                            <li>Pork</li>
                            <li>Fish</li>
                            <li>Chicken</li>
                            <li>Vegetable</li>
                            <li>Desert</li>
                            <li>Drinks</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete Set Up With Backdrop</p>
                        <div class="modal-footer">
                            <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal3 -->
        <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Php 420.00 per plate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Menu A</h2>
                        <ul>
                            <li>Steam Rice</li>
                            <li>Pork</li>
                            <li>Fish</li>
                            <li>Chicken</li>
                            <li>Vegetable</li>
                            <li>Desert</li>
                            <li>Drinks</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete set up with service</p>
                        <p>Not included: Stage backdrop Styling</p>
                        <div class="modal-footer">
                            <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal4 -->
        <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Php 490.00 per plate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Menu B</h2>
                        <ul>
                            <li>Steam Rice</li>
                            <li>Pork</li>
                            <li>Beef</li>
                            <li>Fish</li>
                            <li>Chicken</li>
                            <li>Vegetable</li>
                            <li>Desert</li>
                            <li>Drinks</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete set up with service</p>
                        <p>Not included: Stage backdrop Styling</p>
                        <div class="modal-footer">
                            <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal5 -->
        <div class="modal fade" id="modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Php 560.00 per plate</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Menu C</h2>
                        <ul>
                            <li>Steam Rice</li>
                            <li>Pork</li>
                            <li>Beef</li>
                            <li>Fish</li>
                            <li>Seafood</li>
                            <li>Chicken</li>
                            <li>Vegetable</li>
                            <li>Desert</li>
                            <li>Drinks</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete set up with service</p>
                        <p>Not included: Stage backdrop Styling</p>
                        <div class="modal-footer">
                            <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal6 -->
        <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">50 Person Php15,000</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Service A</h2>
                        <ul>
                            <li>100 set of utensils</li>
                            <li>Chairs and Tables</li>
                            <li>Elegant Buffet</li>
                            <li>Presendentcial tables</li>
                            <li>Couple tables</li>
                            <li>Parent Tables</li>
                            <li>Couch</li>
                            <li>Red carpet</li>
                            <li>Rolling shipping dish</li>
                            <li>Juicer</li>
                            <li>Cakes Tables</li>
                            <li>Charger Plate</li>
                            <li>Center piece for each table</li>
                            <li>Color motif</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete set up with backdrop Only!</p>

                        <div class="modal-footer">
                            <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal7 -->
        <div class="modal fade" id="modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class=" modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">100 Person P25,000</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h2>Service B</h2>
                        <ul>
                            <li>100 set of utensils</li>
                            <li>Chairs and Tables</li>
                            <li>Elegant Buffet</li>
                            <li>Presendentcial tables</li>
                            <li>Couple tables</li>
                            <li>Parent Tables</li>
                            <li>Couch</li>
                            <li>Red carpet</li>
                            <li>Rolling shipping dish</li>
                            <li>Juicer</li>
                            <li>Cakes Tables</li>
                            <li>Charger Plate</li>
                            <li>Center piece for each table</li>
                            <li>Color motif</li>
                        </ul>
                        <h2>Inclusions</h2>
                        <p>Complete set up with backdrop Only!</p>

                        <div class="modal-footer">
                            <a role="button" class="btn btn-success" href="/wedform">Reserve Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection

@section('scripts')
@endsection
