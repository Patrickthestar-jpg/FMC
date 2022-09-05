@extends('layouts.sched')

@section('title')
Reservation Form
@endsection

@section('content')

<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('project/css/wedform.css') }}">
</head>

<body style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.959), rgba(119, 119, 119, 0.945)), url('/img/4.jpg'); background-repeat: no-repeat; background-size: cover;">
    <div class="container d-flex justify-content-center">
        <div class="col-md-6 fbg d-flex justify-content-center my-5">
            <form action="{{ route('layout.reservation.store') }}" method="post">
                @csrf
                <h4 class="h4">FMC Catering Services</h4>
                <h4 class="h4">Reservation Form</h4>
                <div class="form-group">
                    <label for="exampleInputEmail1 " style="color: white;">Full Name: *</label>
                    <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname Middlename Lastname" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Contact Number: *</label>
                    <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Email Address: *</label>
                    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Here" required>
                    <small id="emailHelp" class="small" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Type of Event: *</label>
                    <input type="text" class="form-control" name="event_type" value="Wedding/Debut" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Package: *</label>
                    <input type="number" class="form-control" name="package" value="1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Event Date: *</label>
                    <input type="date" class="form-control" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 01, 2021" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Number of Persons: *</label>
                    <input type="number" class="form-control" name="persons" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="50" required>
                    <small id="emailHelp" class="small" class="form-text text-muted">Minimun of 50 persons. (50, 75, 100, 125, 150)</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" style="color: white;">Additional Message: *</label>
                    <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Message Here" required>
                </div>
                <br class="mt-4">
                <p><a href="/agreement" style="color: white;">FMC Agreement</a></p>
                <div class="form-check">
                    <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1" style="color: white;">I agree to the Terms and Conditions of FMC Catering and Services</label>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
                        <h5 class="tnc" class="modal-title" id="myModalLabel">FMC Catering Services Terms & Conditions</h5>
                        </div>
                        <div class="modal-body">
                            The customer needs to pay 50% of the package price for reservation fee which deductable to the total of payment. The reservation is valid for 3 days and shall be forfeited thus, not confirm within the period of time. This is base on the terms and condition of FMC Catering Services that will be sign by agreement of the customer and the owner. If the customer wishes to cancel the event the payment is not refundable, non consumable and no transferable. Balance to be paid in cash a day before the event. None payment of the full agreed amount reserves the right for the caterer to cancel all its services.
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>


                <div class="card-footer d-flex justify-content-center container-login100-form-btn">

                    <button type="submit" role="button" class="btn btn-outline-info fbtn login100-form-btn" onclick="myGeeks()">Submit</button>
                </div>

            </form>

        </div>
    </div>



    <!-- Script to use required property -->
    <script>
        $('input[type="checkbox"]').on('change', function(e){
        if(e.target.checked){
        $('#myModal').modal();
         }
        });
    </script>

</body>
@endsection


@section('scripts')

@endsection
