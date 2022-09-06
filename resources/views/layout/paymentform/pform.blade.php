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
            <div class="bgxx">
            <div style="margin-top:50px; margin-bottom:50px; margin-left:10%; margin-right:10%;">

                        <div class="text-cont m-4">
                            <p class="guide">Check out this guidelines for paying 50% of the payment for your selected package:</p>
                            <br>
                            <p class="desc" style="text-align: center">If you choose:</p>
                            <p class="p1">Package 1</p>
                            <p class="desc" style="text-align: center">300 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">300 x 50 = 15,000.00 (50% is 7,500.00)</p>
                            <p class="desc" style="text-align: center">300 x 75 = 22,500.00 (50% is 11,250.00)</p>
                            <p class="desc" style="text-align: center">300 x 100 = 30,000.00 (50% is 15,000.00)</p>
                            <p class="desc" style="text-align: center">300 x 125 = 37,500.00 (50% is 18,750.00)</p>
                            <p class="desc" style="text-align: center">300 x 150 = 45,000.00 (50% is 22,500.00)</p>
                            <p class="desc" style="text-align: center">300 x 175 = 52,500.00 (50% is 26,500.00)</p>
                            <p class="desc" style="text-align: center">300 x 200 = 60,000.00 (50% is 30,000.00)</p>
                            <br>
                            <p class="p1">Package 2</p>
                            <p class="desc" style="text-align: center">250 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">250 x 50 = 12,500.00 (50% is 6,250.00)</p>
                            <p class="desc" style="text-align: center">250 x 75 = 18,750.00 (50% is 9,375.00)</p>
                            <p class="desc" style="text-align: center">250 x 100 = 25,000.00 (50% is 12,500.00)</p>
                            <p class="desc" style="text-align: center">250 x 125 = 31,250.00 (50% is 15,625.00)</p>
                            <p class="desc" style="text-align: center">250 x 150 = 37,500.00 (50% is 18,750.00)</p>
                            <p class="desc" style="text-align: center">250 x 175 = 43,750.00 (50% is 21,875.00)</p>
                            <p class="desc" style="text-align: center">250 x 200 = 50,000.00 (50% is 25,000.00)</p>
                            <br>
                            <p class="p1">Package 3</p>
                            <p class="desc" style="text-align: center">450 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">450 x 50 = 22,500.00 (50% is 11,250.00)</p>
                            <p class="desc" style="text-align: center">450 x 75 = 33,750.00 (50% is 16,875.00)</p>
                            <p class="desc" style="text-align: center">450 x 100 = 45,000.00 (50% is 22,500.00)</p>
                            <p class="desc" style="text-align: center">450 x 125 = 67,500.00 (50% is 33,750.00)</p>
                            <p class="desc" style="text-align: center">450 x 150 = 78,750.00 (50% is 39,375.00)</p>
                            <p class="desc" style="text-align: center">450 x 175 = 43,750.00 (50% is 21,875.00)</p>
                            <p class="desc" style="text-align: center">450 x 200 = 90,000.00 (50% is 45,000.00)</p>
                            <br>
                            <p class="p1">Package 4</p>
                            <p class="desc" style="text-align: center">500 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">500 x 50 = 24,999.00 (50% is 12,500.00)</p>
                            <p class="desc" style="text-align: center">500 x 75 = 37,500.00 (50% is 18,750.00)</p>
                            <p class="desc" style="text-align: center">500 x 100 = 50,000.00 (50% is 25,000.00)</p>
                            <p class="desc" style="text-align: center">500 x 125 = 62,500.00 (50% is 31,250.00)</p>
                            <p class="desc" style="text-align: center">500 x 150 = 75,000.00 (50% is 37,500.00)</p>
                            <p class="desc" style="text-align: center">500 x 175 = 87,500.00 (50% is 43,750.00)</p>
                            <p class="desc" style="text-align: center">500 x 200 = 100,000.00 (50% is 50,000.00)</p>
                            <br>
                            <p class="p1">Package 5</p>
                            <p class="desc" style="text-align: center">420 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">420 x 50 = 21,000.00 (50% is 10,500.00)</p>
                            <p class="desc" style="text-align: center">420 x 75 = 31,500.00 (50% is 15,750.00)</p>
                            <p class="desc" style="text-align: center">420 x 100 = 42,000.00 (50% is 21,000.00)</p>
                            <p class="desc" style="text-align: center">420 x 125 = 52,500.00 (50% is 26,250.00)</p>
                            <p class="desc" style="text-align: center">420 x 150 = 63,000.00 (50% is 31,500.00)</p>
                            <p class="desc" style="text-align: center">420 x 175 = 73,500.00 (50% is 36,750.00)</p>
                            <p class="desc" style="text-align: center">420 x 200 = 84,000.00 (50% is 42,000.00)</p>
                            <br>
                            <p class="p1">Package 6</p>
                            <p class="desc" style="text-align: center">490 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">490 x 50 = 24,000.00 (50% is 12,250.00)</p>
                            <p class="desc" style="text-align: center">490 x 75 = 36,750.00 (50% is 18,375.00)</p>
                            <p class="desc" style="text-align: center">490 x 100 = 49,000.00 (50% is 24,500.00)</p>
                            <p class="desc" style="text-align: center">490 x 125 = 61,250.00 (50% is 30,625.00)</p>
                            <p class="desc" style="text-align: center">490 x 150 = 73,500.00 (50% is 36,750.00)</p>
                            <p class="desc" style="text-align: center">490 x 175 = 85,750.00 (50% is 42,875.00)</p>
                            <p class="desc" style="text-align: center">490 x 200 = 98,000.00 (50% is 49,000.00)</p>
                            <br>
                            <p class="p1">Package 7</p>
                            <p class="desc" style="text-align: center">560 Per Plate Minimun of 50 Plates</p>
                            <p class="desc" style="text-align: center">560 x 50 = 28,000.00 (50% is 14,000.00)</p>
                            <p class="desc" style="text-align: center">560 x 75 = 42,000.00 (50% is 21,000.00)</p>
                            <p class="desc" style="text-align: center">560 x 100 = 56,000.00 (50% is 28,000.00)</p>
                            <p class="desc" style="text-align: center">560 x 125 = 70,000.00 (50% is 35,000.00)</p>
                            <p class="desc" style="text-align: center">560 x 150 = 84,000.00 (50% is 24,000.00)</p>
                            <p class="desc" style="text-align: center">560 x 175 = 98,000.00 (50% is 49,000.00)</p>
                            <p class="desc" style="text-align: center">560 x 200 = 112,000.00 (50% is 56,000.00)</p>
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
