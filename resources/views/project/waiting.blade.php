@extends('layouts.sched')

@section('title')
Reservation Confirmation
@endsection

@section('content')

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('paymentcss/waiting.css') }}">
</head>

<body style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.959), rgba(119, 119, 119, 0.945)), url('/img/4.jpg'); background-repeat: no-repeat; background-size: cover; height:100vh;">
    <div class="container  d-flex justify-content-center align-items-center my-5">
        <div class="col-md-6 fbg cardred">
            <div class="card-body">
                <h5 class="card-title text-white">Welcome to <br> FMC Catering and Services.</h5>
                <p class="card-text text-white">Please check your email after 1-2 days to receive your payment form</p>
                <p class="card-text text-white">Thank you for choosing our services</p>
                
                <a href="{{route('home.index')}}" class="login100-form-btn mt-5">Back to Home</a>
            </div>
        </div>
    </div>

</body>
@endsection


@section('scripts')

@endsection