<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('project/css/navbar.css') }}">

</head>

<body >
    <div class="topnav " id="myTopnav" style="background-image:url('/project/img/red.jpg'); ">
        <!-- Image and text -->
        <img src="{{ URL::asset('img/fmclogo1.png') }}" style="width: 50px;" class="d-inline-block align-top d-flex justify-content-center m-2" alt="FMC">
        <h3 style=" float: left; font-weight:bolder; color:#ffe600; margin-top:15px;" class="ml-2 text-white">FMC
            Catering Services
        </h3>
        <div class="stroke" class="mr-4">
            <a href="/contacts" >Contact</a>
            <div class="dropdown1">
                <button class="dropbtn">Services
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown1-content " style="z-index: 11;     ">
                    <p class="cat" style="padding:10px; color:black; font-weight:bolder;">CATERING SERVICES</p>
                    <a class="wedd" style="color: black;" href="/wed">Wedding and Debut</a>
                    <!--<a href="#">Corporate</a>
            <a href="#">Kid's Party</a>
            <a href="#">Private Party</a>-->
                </div>
            </div>
            <a href="/gallery">Gallery</a>
            <a href="/about">About</a>
            <a href="/">Home</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
        </div>

    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
</body>

</html>
