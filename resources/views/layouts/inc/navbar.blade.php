<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('project/css/navbar.css') }}">
</head>

<body>
    <div class="topnav" id="myTopnav">
        <!-- Image and text -->
        <img src="{{ URL::asset('img/fmclogo1.png') }}" style="width: 50px;" class="d-inline-block align-top"
            alt="FMC">
        <h6 style="float: left; margin-top:20px; margin-left:3px; font-weight:bolder; color:rgb(255, 255, 255);">FMC
            Catering Services</h6>
        <a href="/contact">Contact</a>
        <a href="/about">About</a>
        <div class="dropdown1">
            <button class="dropbtn">Services
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown1-content">
                <p class="cat" style="padding:10px; color:black; font-weight:bolder;">CATERING SERVICES</p>
                <a class="wedd" style="color: black;" href="/wed">Wedding and Debut</a>
                <!--<a href="#">Corporate</a>
            <a href="#">Kid's Party</a>
            <a href="#">Private Party</a>-->
            </div>
        </div>
        <a href="/gallery">Gallery</a>
        <a href="/">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
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
