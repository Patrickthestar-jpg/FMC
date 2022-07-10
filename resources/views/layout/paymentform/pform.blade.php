<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('paymentcss/payment.css') }}">
    <link rel="icon"  type="image/png" sizes="16×16" href="img/fmclogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMC Catering and Services Payment Form</title>
</head>
<script>
    function img(x)
    {
    if (x == 0)
    document.getElementById("img-thumbnail").style.display="block";
    else
    document.getElementById("img-thumbnail").style.display="none";
    return;
    }
</script>
<body style="background-image:url('img/fmcbg.jpg'); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <div class="col-md-6 fbg">
                <form method="post" action="{{route('layout.paymentform.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Full Name: (Required)</label>
                        <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FirstName MiddleName LastName"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Contact Number: (Required)</label>
                        <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address: (Required)</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sample@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Type of Event: (Required)</label>
                        <input type="text" class="form-control" name="event_type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding/Debut" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Event Date: (Required)</label>
                        <input type="date" class="form-control" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 20, 2022" required>
                    </div>
                    <fieldset class="form-group">

                    <label for="exampleInputEmail1">Mode of Payment</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" required type="radio" name="mode_payment" onclick="img(0)" id="gridRadios1" value="Gcash" checked >
                            <label class="form-check-label" for="gridRadios1">
                                Gcash
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input"  type="radio" name="mode_payment" onclick="img(1)" id="gridRadios1" value="Cash">
                            <label class="form-check-label" for="gridRadios2">
                                Cash
                            </label>
                            </div>
                            <img src="img/gcashqr.jpg" alt="qrcode" id="img-thumbnail" class="center">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Reference Number (Gcash)</label>
                                <input type="text" class="form-control" name="refference" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="XXXX XXX XXXXXX">
                            </div>
                        </div>

                    </fieldset>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" onclick="myGeeks()">Submit</button>
                    </div>
                </form>
            </div>
        </div>


        <!-- Script to use required property -->
        <script>
            function myGeeks() {
                var g = document.getElementById("exampleCheck1").required;
                var g1 = document.getElementById("gridRadios1").required;
                var g2 = document.getElementById("gridRadios2").required;
            }
        </script>



    </body>
</html>
