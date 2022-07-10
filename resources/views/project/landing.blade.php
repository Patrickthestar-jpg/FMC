<html>
    <title>Home</title>
    <link rel="stylesheet" href="{{ URL::asset('project/css/landing.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('fullcalendar/main.css') }}">
    <script src="{{ URL::asset('fullcalendar/main.js') }}"></script>
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
                        title : '{{ $event->title }}',
                        start : '{{ $event->start }}{{ $event->time != null ? 'T' . $event->time : null }}',
                        end : '{{ $event->end }}',
                        url : '',
                        color:'{{ $event->color != null ? $event->color : '#2e45e0' }}',
                        },
                    @endforeach
                ],
            });
            calendarFull.render();
        });
    </script>

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover;">

        <div class="content">
            <div class="info">
              <h2>Welcome to <br><span><u>FMC Catering Services</u></span></h2>
              <p>Our only limit is your imagination. Reserve Now!</p>
              <a href="/agreement" class="info-btn">More Info</a>
              <h1 class="ann">CALENDAR EVENT</h1>
            </div>
        </div>


        <section class="margin-top">
            <div class="container-sm">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style calendar-card mb-5">
                            <div id="calendar-full" class="fc fc-media-screen fc-direction-ltr fc-theme-standard">

                            </div>
                        </div>
                    </div>
                    <!-- End Col -->
                </div>
            </div>
        </section>


    </body>
</html>
