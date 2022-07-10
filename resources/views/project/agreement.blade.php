@extends('layouts.sched')

@section('title')
    Agreement
@endsection

@section('content')

<html>
    <head>
        <title>Agreement</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('project/css/agreement.css') }}">
    </head>

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">

        <div class="container-fluid ab">
            <div class="row">
                <div class="col-md-9 mid">
                    <div>
                        <h1 style="text-align: center !important;"><u>Terms & Conditions | FMC Catering Services</u></h1>
                        <h2 style="text-align: justify !important;">The customer needs to pay 50% of the package price for reservation fee which deductable to the total of payment. The reservation is valid for 3 days and shall be forfeited thus, not confirm within the period of time. This is base on the terms and condition of FMC Catering Services that will be sign by agreement of the customer and the owner. If the customer wishes to cancel the event the payment is not refundable, non consumable and no transferable. Balance to be paid in cash a day before the event. None payment of the full agreed amount reserves the right for the caterer to cancel all its services.</h2>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

@endsection

@section('scripts')

@endsection


