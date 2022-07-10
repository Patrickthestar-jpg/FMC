@extends('layouts.sched')

@section('title')
    About
@endsection

@section('content')

<html>
    <head>
        <title>About</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('project/css/about.css') }}">
    </head>

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">

        <div class="about-section">
            <h1>About FMC Catering Services</h1>
            <p>For more than 16 years , we have been blessed to be a part of thousands of weddings and debuts celebrations.
                In all these events, we make sure we are not only your caterer but more importantly your partner in every step from conceptualizing, budgeting and planning up to final execution.</p>
          </div>

          <h2 style="text-align:center" id="h21">Our Team</h2>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="img/ferdinand.png" alt="Ferdinand" style="width:70%; margin-top: 10px; margin-left:50px;">
                <div class="container">
                  <h2>Ferdinand Carandang</h2>
                  <p class="title" style="text-align: center">CEO & Founder</p>
                  <p>The Hardworking Ceo of FMC Catering Service who manage the day to day aspects of the business and ensures the clients are satisfied.</p>
                  <p >cateringservicesfmc@gmail.com</p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="img/team1.png" alt="TeamA" style="width:80%; margin-top: 46px; margin-left:45px;">
                <div class="container">
                  <h2>Team A</h2>
                  <p class="title">Waiter</p>
                  <p>A well trained team/group. They collaborate with clients to design and manage exceptional food and beverage operations.</p>
                  <p>cateringservicesfmc@gmail.com</p>
                </div>
              </div>
            </div>

            <div class="column">
              <div class="card">
                <img src="img/team2.png" alt="TeamB" style="width:80%; margin-top: 30px; margin-left:45px;">
                <div class="container">
                  <h2>Team B</h2>
                  <p class="title">Waiter/Assistant Designer</p>
                  <p>A well trained team/group. They collaborate with clients to design and manage exceptional food and beverage operations.</p>
                  <p>cateringservicesfmc@gmail.com</p>
                </div>
              </div>
            </div>
          </div>


        <!--<div class="container-fluid ab">
            <div class="row">
                <div class="col-md-9 mid">
                    <div>
                        <h1 style="text-align: center !important;"><u>About FMC Catering Services</u></h1>
                        <h2 style="text-align: justify !important;">For more than 16 years , we have been blessed to be a part of thousands of weddings, debuts, kids' parties, corporate events, and private celebrations.
                            In all these events, we make sure we are not only your caterer but more importantly your partner in every step from conceptualizing, budgeting and planning up to final execution.</h2>
                    </div>
                </div>
            </div>
        </div>-->

    </body>
</html>

@endsection

@section('scripts')

@endsection


