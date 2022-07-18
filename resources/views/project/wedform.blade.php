@extends('layouts.sched')

@section('title')
    Reservation Form
@endsection

@section('content')
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('project/css/wedform.css') }}">
    </head>

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="col-md-6 fbg">
                <form action="{{ route('layout.reservation.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name: *</label>
                        <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname Middlename Lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Number: *</label>
                        <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address: *</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Here" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Type of Event: *</label>
                        <input type="text" class="form-control" name="event_type" value="Wedding/Debut" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Package: *</label>
                        <input type="number" class="form-control" name="package" value="1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Date: *</label>
                        <input type="date" class="form-control" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 01, 2021" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Number of Persons: *</label>
                        <input type="number" class="form-control" name="persons" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="123" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Additional Message: *</label>
                        <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Message Here" required>
                    </div>
                    <p><a href="/agreement">FMC Agreement</a></p>
                    <div class="form-check">
                        <input type="checkbox" required  class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions of FMC Catering and Services</label>
                    </div>
                        <button type="submit" role="button" class="btn btn-success fbtn" onclick="myGeeks()">Submit</button>
                </form>

            </div>
        </div>



        <!-- Script to use required property -->
        <script>
            function myGeeks() {
                var g = document.getElementById("exampleCheck1").required;
            }
        </script>

    </body>
@endsection


@section('scripts')

@endsection
