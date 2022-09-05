<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('paymentcss/payment.css') }}">
    <link rel="icon" type="image/png" sizes="16×16" href="img/fmclogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FMC Catering and Services Payment Form</title>
</head>
<script>
    function img(x) {
        if (x == 0)
            document.getElementById("img-thumbnail").style.display = "block";
        else
            document.getElementById("img-thumbnail").style.display = "none";
        return;
    }
</script>

<body style="background-image:url('img/fmcbg.jpg'); background-repeat: no-repeat; background-size: cover;">



    <!-- start -->
    <div class="limiter " style="margin-top: -30px;">
        <div class="container-login100 position-relative" style="background-image:url('img/21.jpg');">
            <!-- cIRCLE -->
            <div class="circle-top"></div>
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="post" action="{{route('layout.paymentform.store')}}">
                    @csrf
                    <span class="login100-form-title p-b-34 p-t-27" style="margin-top: 90px;">
                        Payment
                    </span>

                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            <!-- Left side -->
                            <div class="col-md-5">
                                <div class=" form-group">
                                    <label for="exampleInputEmail1" class="text-white">Full Name: *</label>
                                    <input type="text" class="form-control my-2 " name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="FirstName MiddleName LastName" required>
                                </div>

                                <div class="form-group ">
                                    <label for="exampleInputEmail1" class="text-white">Contact Number: *</label>
                                    <input type="text" class="form-control  my-2" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Email Address: *</label>
                                    <input type="email" class="form-control  my-2" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="sample@gmail.com" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Type of Event: *</label>
                                    <input type="text" class="form-control  my-2" name="event_type" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding/Debut" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="text-white">Event Date: *</label>
                                    <input type="date" class="form-control  my-2" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 20, 2022" required>
                                </div>

                            </div>
                            <!-- Right side -->
                            <div class="col-md-6 d-flex justify-content-center">
                                <fieldset class="form-group">

                                    <label for="exampleInputEmail1" class="text-white">Mode of Payment</label>
                                    <div>
                                        <div class="form-check ">
                                            <input class="form-check-input" required type="radio" name="mode_payment" onclick="img(0)" id="gridRadios1" value="Gcash" checked>
                                            <label class="form-check-label text-white px-2" for="gridRadios1" >
                                                Gcash
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="mode_payment" onclick="img(1)" id="gridRadios1" value="Cash">
                                            <label class="form-check-label text-white px-2" for="gridRadios2" >
                                                Cash
                                            </label>
                                        </div>
                                        <img src="img/gcashqr.jpg" alt="qrcode" id="img-thumbnail" class="center">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="text-white">Reference Number (Gcash)</label>
                                            <input type="text" class="form-control" name="refference" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="XXXX XXX XXXXXX">
                                        </div>
                                    </div>

                                </fieldset>
                            </div>

                        </div>





                    </div>






                    <div class="modal-footer container-login100-form-btn">
                        <button type="submit" class="login100-form-btn" onclick="myGeeks()">Submit</button>
                    </div>

                    <div class="modal-footer container-login100-form-btn"></div>






                </form>
            </div>
        </div>
    </div>
    <!-- end -->



    <div class="limiter">
        <div class="container-login100 position-relative" style="background-image:url('img/21.jpg');">
            <div class="bgx">
            <div style="margin-top:50px; margin-bottom:50px;">
                <div class="container">
                    <div class="card p-5 d-flex justify-content-center flex-row position-relative">

                        <div class="text-cont m-4">
                            <p class="guide">Check out this guidelines for paying 50% of the payment for your selected package:</p>
                                <p class="desc">If you choose:
                                    <br> <br> Package 1: P44,999  (50% is P22,499.5)
                                    <br> <br> Package 2: P24,999 (50% is P12,499.5)
                                    <br> <br> Package 3: P420 per plate minimun of 50 plates 420 x 50 = P21,000 (50% is P10,500)
                                    <br> <br> Package 4: P490 per plate minimun of 50 plates 490 x 50 = P24,500 (50% is P12,250)
                                    <br> <br> Package 5: P560 per plate minimun of 50 plates 560 x 50 = P28,000 (50% is P14,000)
                                    <br> <br> Package 6: P15,000 (50% is P7,500)
                                    <br> <br> Package 7: P25,000 (50% is P12,500)
                                    <br> <br> Package 8: P25,000 (50% is P12,500)
                                </p>
                        </div>
                    </div>

                </div>
            </div>
            </div>
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
