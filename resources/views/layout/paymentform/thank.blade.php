<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('paymentcss/ty.css') }}">
    <link rel="icon" type="image/png" sizes="16×16" href="img/fmclogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMC Catering and Services Payment Form</title>
    <link rel="stylesheet" href="{{ URL::asset('paymentcss/waiting.css') }}">

    <style>
        @media (max-width:768px) {
            .cardred{
                width: 500px;
                margin-left: 0;
                margin-right: 0;
                padding: 0;
            }
        }
    </style>

</head>

<body style="background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.959), rgba(119, 119, 119, 0.945)), url('/img/4.jpg'); background-repeat: no-repeat; background-size: cover; height:100vh;">
    <div class="container  d-flex justify-content-center align-items-center">
        <div class="col-md-6 fbg cardred mt-5">
            
            <div class="card-body">
                <h5 class="card-title text-white">Thank you for trusting <br> FMC Catering Services!</h5>
                <div class="container justify-content-center d-flex">
                    <img src="/img/fmclogo1.png" alt="Logo" style="object-fit: cover; width:200px; ">
                </div>

            </div>
        </div>
    </div>

</body>


</html>