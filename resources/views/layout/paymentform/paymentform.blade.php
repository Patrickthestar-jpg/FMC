<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('paymentcss/ty.css') }}">
    <link rel="icon"  type="image/png" sizes="16×16" href="img/fmclogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMC Catering and Services Payment Form</title>
</head>
<body style="background-image:url('/project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="col-md-12">
            <div class="fbg">
                <div class="card-body">
                    <h5 class="card-title">Welcome to <br> FMC Catering and Services Payment Form!</h5>
                    <p class="card-text">Please proceed to the payment form.</p>
                    <a href="{{route('layout.paymentform.pform')}}" class="btn btn-primary">Proceed to Payment Form</a>
                </div>
            </div>
        </div>
    </body>
</html>
