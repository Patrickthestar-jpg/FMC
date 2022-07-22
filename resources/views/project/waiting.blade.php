@extends('layouts.sched')

@section('title')
    Reservation Confirmation
@endsection

@section('content')
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('project/css/wedform.css') }}">
    </head>

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="col-md-6 fbg">
                <div class="card-body">
                    <h5 class="card-title">Welcome to <br> FMC Catering and Services.</h5>
                    <p class="card-text">Please check your email after 1-2 days to receive your payment form</p>
                    <p class="card-text">Thank you for choosing our services</p>
                    <a href="{{route('home.index')}}" class="btn btn-primary">Back to Home</a>
                </div>
            </div>
        </div>

        <!-- Script to use required property -->
        {{-- <script>
            function myGeeks() {
                var g = document.getElementById("exampleCheck1").required;
            }
        </script> --}}

    </body>
@endsection


@section('scripts')

@endsection