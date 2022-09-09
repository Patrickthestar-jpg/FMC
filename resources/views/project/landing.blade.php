<html>
<title>Home</title>
<link rel="stylesheet" href="{{ URL::asset('project/css/landing.css') }}">
<link rel="stylesheet" href="{{ URL::asset('fullcalendar/main.css') }}">
<script src="{{ URL::asset('fullcalendar/main.js') }}"></script>
<!-- Link Swiper's CSS -->
<link rel="stylesheet" href="/css/testimonial.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link rel="stylesheet" href="/css/cards_land.css">
<script>
    // ====== calendar activation
    document.addEventListener("DOMContentLoaded", function() {
                var calendarFullEl = document.getElementById("calendar-full");
                var calendarFull = new FullCalendar.Calendar(calendarFullEl, {
                            initialView: "dayGridMonth",
                            headerToolbar: {
                                end: "today prev,next",
                            },
                            events: [
                    @foreach ($events as $event)
                        {
                            title: '{{ $event->title }}',
                            start: '{{  $event->start }}{{ $event->time != null ? 'T' . $event->time : null }}',
                            end: '{{ $event->end }}',
                            url: '',
                            color: '{{ $event->color != null ? $event->color : '#2e45e0' }}',
                        },
                    @endforeach
                ],
            });
            calendarFull.render();
        });
</script>


<body style="background-image:url('/project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">

    <div class="content d-flex bg-bodylanding">
        <div class="row ">
            <div class="info col-md-6 ">
                <h2 class="text-white" style="font-size: 2em;"> Welcome to </h2>
                <h2 class="mt-0 "><span><u style="letter-spacing: 0.1em; color:white;">FMC Catering Services</u></span></h2>
                <p class="my-5">Our only limit is your imagination. Reserve Now!</p>
                <a href="/agreement" class="info-btn btn button two"><span>More Info</span></a>
            </div>

            <!-- IMAGES -->
            <div class="col-md-6 p-5">

                <div class="content ">
                    <div class="container">
                        <div class="card">
                            <div class="image image1"></div>
                            <div class="info">
                               <!-- <h4>Go to Gallery</h4> -->

                            </div>
                        </div>
                        <div class="card">
                            <div class="image image2"></div>
                            <div class="info">
                               <!--  <h4>Go to Gallery</h4> -->

                            </div>
                        </div>

                    </div>
                    <svg>
                        <filter id="wavy1">
                            <feturbulence x="0" y="0" baseFrequency="0.2" numOctaves="5" seed="1"></feturbulence>
                            <feDisplacementMap in="SourceGraphic" scale="20" />
                        </filter>
                    </svg>
                    <svg>
                        <filter id="wavy2">
                            <feturbulence x="0" y="0" baseFrequency="0.02" numOctaves="5" seed="1"></feturbulence>
                            <feDisplacementMap in="SourceGraphic" scale="20" />
                        </filter>
                    </svg>
                    <svg>
                        <filter id="wavy3">
                            <feturbulence x="0" y="0" baseFrequency="0.1" numOctaves="5" seed="1"></feturbulence>
                            <feDisplacementMap in="SourceGraphic" scale="5" />
                        </filter>
                    </svg>
                </div>
            </div>
            <!-- END OF IMAGES -->
        </div>



    </div>


    <section class="container-fluid margin-top">
        <div class="container-sm">
            <h1 class="ann p-5">Calendar Event</h1>
            <div class="row justify-content-center">
                <div class="col-md-11" style="background-color: white; border-radius:5px;">

                    <div class="card-style calendar-card">
                        <div id="calendar-full" class="fc fc-media-screen fc-direction-ltr fc-theme-standard mb-5" style="height: 500px;">

                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </section>


    <section class="testimonials container-fluid wrapper">
        <div class="title">
            <h5>Our</h5>
            <h2>Featured Client</h2>
        </div>
        <div class="container contafter">

            <div class="row cards">


                <!--Card-->
                <div class="col-md-4">

                    <div class="card-landing text-white card-has-bg click-col" style="background-image:url('img/rosmar.jpg')">
                        <img class="card-img d-none" src="img/rosmar.jpg" alt="Package 2">


                        <!-- CARD HOVER UP -->
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>

                                <div class="card__header-text">
                                    <h3 class="card__title">Rosmarie Peñamora Tan</h3>
                                    <span class="card__status">Daughter's Christening (2022)</span>
                                </div>
                            </div>
                            <p class="card__description"></p>
                        </div>


                    </div>
                </div>

                <!--Second Card-->
                <div class="col-md-4">

                    <div class="card-landing text-white card-has-bg click-col" style="background-image:url('img/calauan.jpg')">
                        <img class="card-img d-none" src="img/calauan.jpg" alt="Package 2">


                        <!-- CARD HOVER UP -->
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>

                                <div class="card__header-text">
                                    <h3 class="card__title">Calauan Pinya Festival</h3>
                                    <span class="card__status">Bb. & Ginoong Calauan (2021)</span>
                                </div>
                            </div>
                            <p class="card__description"></p>
                        </div>


                    </div>
                </div>

                <!--Third Card-->
                <div class="col-md-4">

                    <div class="card-landing text-white card-has-bg click-col" style="background-image:url('img/ags.jpg')">
                        <img class="card-img d-none" src="img/ags.jpg" alt="Package 2">


                        <!-- CARD HOVER UP -->
                        <div class="card__overlay">
                            <div class="card__header">
                                <svg class="card__arc" xmlns="http://www.w3.org/2000/svg">
                                    <path />
                                </svg>

                                <div class="card__header-text">
                                    <h3 class="card__title">Allegis Global Solutions Manila</h3>
                                    <span class="card__status">Welcoming Party (2022)</span>
                                </div>
                            </div>
                            <p class="card__description"></p>
                        </div>


                    </div>
                </div>



            </div>

        </div>
    </section>





    <!-- Testimonials -->
    <!-- <section class="testimonials container-fluid">
        <div class="container">
            <div class="title">
                <h5>Testimonials</h5>
                <h2>What our clients say</h2>
            </div>

            <div class="sswiper mySwiper">
                <div class="swiper-wrapper testi ">


                    <div class="item swiper-slide">
                        <div class="profile">
                            <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&auto=format&fit=crop&h=153&q=80" alt="">
                            <div class="information">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Name</p>
                                <span>Occupation</span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio, officiis deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores impedit ducimus cum accusamus.</p>
                        <div class="icon">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                    </div>



                    <div class="item swiper-slide">
                        <div class="profile">
                            <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&auto=format&fit=crop&h=153&q=80" alt="">
                            <div class="information">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Name</p>
                                <span>Occupation</span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio, officiis deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores impedit ducimus cum accusamus.</p>
                        <div class="icon">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                    </div>



                    <div class="item swiper-slide">
                        <div class="profile">
                            <img src="https://images.unsplash.com/photo-1521225099409-8e1efc95321d?ixlib=rb-1.2.1&auto=format&fit=crop&h=153&q=80" alt="">
                            <div class="information">
                                <div class="stars">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>Name</p>
                                <span>Occupation</span>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita velit labore suscipit distinctio, officiis deserunt rem blanditiis ducimus. Voluptate quaerat assumenda qui veniam facilis doloribus maiores impedit ducimus cum accusamus.</p>
                        <div class="icon">
                            <i class="fa fa-quote-right" aria-hidden="true"></i>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </section> -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>


</body>

</html>
