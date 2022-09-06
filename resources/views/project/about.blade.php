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

  <!-- ABout  -->
  <div class="about-section" style="border: 2px solid;">
    <div class="container">
      <div class="card p-5 d-flex justify-content-center flex-row position-relative">
        <div class="circle-top">

        </div>
        <div class="text-cont m-4">
          <h1 class="mb-5">About FMC Catering Services</h1>
          <p>For more than 16 years , we have been blessed to be a part of thousands of weddings and debuts celebrations.
            In all these events, we make sure we are not only your caterer but more importantly your partner in every step from conceptualizing, budgeting and planning up to final execution.</p>
        </div>
      </div>

    </div>
  </div>


  <!-- about the team -->
  <div class="container-fluid bg-team" style="border: 2px solid ;">
  <h2 style="text-align:center" id="h21">Our Team</h2>
    <!-- 1 -->
    <div class="row resprow">
      <div class="container-fluids aboutteam">
        <div class="content">
          <div class="left-side">

            <ul class="cards">
              <li>
                <a href="" class="card teamcard">
                  <img src="/img/ferdi.jpg" class="card__image" alt="" />
                  <div class="card__overlay">
                    <div class="card__header">
                      <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                        <path />
                      </svg>
                      <img class="card__thumb" src="/img/ferdi.jpg" alt="" />
                      <div class="card__header-text">
                        <h3 class="card__title ">Ferdinand Carandang</h3>
                      </div>
                    </div>
                    <p class="card__description">CEO & Founder</p>
                    <p class="card__description">cateringservicesfmc@gmail.com</p>
                  </div>
                </a>
              </li>

            </ul>


          </div>

          <div class="right-side mr-5">
            <div class="topic-text tcenter">Ferdinand Carandang</div>

            <p class="text-white mt-5 text-left tcenter">The Hardworking Ceo of FMC Catering Service who manage the day to day aspects of the business and ensures the clients are satisfied.</p>
          </div>
        </div>
      </div>
    </div>

    <hr width="90%" >

    <!-- 2 -->
    <div class="row resprow">

      <div class="container-fluids aboutteam ">
        <div class="content team-even">


          <div class="right-side mr-5">
            <div class="topic-text tcenter">Team A</div>

            <p class="text-white mt-5 text-left tcenter">A well trained team/group. They collaborate with clients to design and manage exceptional food and beverage operations.</p>
          </div>

          <div class="left-side mr-4">

            <ul class="cards">
              <li>
                <a href="" class="card teamcard">
                  <img src="/img/team1.png" class="card__image" alt="" />
                  <div class="card__overlay">
                    <div class="card__header">
                      <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                        <path />
                      </svg>
                      <img class="card__thumb" src="/img/team1.png" alt="" />
                      <div class="card__header-text">
                        <h3 class="card__title">Team A</h3>
                      </div>
                    </div>
                    <p class="card__description">Waiter</p>
                    <p class="card__description">cateringservicesfmc@gmail.com</p>
                  </div>
                </a>
              </li>

            </ul>


          </div>
        </div>
      </div>
    </div>

    <hr width="90%">

     <!-- 3 -->
     <div class="row resprow">
      <div class="container-fluids aboutteam">
        <div class="content">
          <div class="left-side">

            <ul class="cards">
              <li>
                <a href="" class="card teamcard">
                  <img src="/img/team2.png" class="card__image" alt="" />
                  <div class="card__overlay">
                    <div class="card__header">
                      <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                        <path />
                      </svg>
                      <img class="card__thumb" src="/img/team2.png" alt="" />
                      <div class="card__header-text">
                        <h3 class="card__title">Team B</h3>
                      </div>
                    </div>
                    <p class="card__description">Waiter/Assistant Designer</p>
                    <p class="card__description">cateringservicesfmc@gmail.com</p>
                  </div>
                </a>
              </li>

            </ul>


          </div>

          <div class="right-side mr-5">
            <div class="topic-text tcenter">Team B</div>

            <p class="text-white mt-5 text-left tcenter">A well trained team/group. They collaborate with clients to design and manage exceptional food and beverage operations.</p>
          </div>
        </div>
      </div>
    </div>


      <!-- <h2 style="text-align:center" id="h21">Our Team</h2> -->

      <!-- <div class="row">

    <div class="column">
      <div class="card">
        <img src="img/ferdinand.png" alt="Ferdinand" style="width:70%; margin-top: 10px; margin-left:50px;">
        <div class="container">
          <h2>Ferdinand Carandang</h2>
          <p class="title" style="text-align: center">CEO & Founder</p>
          <p>The Hardworking Ceo of FMC Catering Service who manage the day to day aspects of the business and ensures the clients are satisfied.</p>
          <p>cateringservicesfmc@gmail.com</p>
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
  </div> -->



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
