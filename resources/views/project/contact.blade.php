@extends('layouts.sched')

@section('title')
    Contact
@endsection

@section('content')

<html>
    <head>
        <title>Contacts</title>
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
        {{-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
        <link rel="stylesheet" href="{{ URL::asset('project/css/footer.css') }}">

    <body style="background-image:url('project/img/red.jpg'); background-repeat: no-repeat; background-size: cover">

        <div class="row">
            <div class="col-md-12 mid">
                <div>
                    <h1 class="tl" style="text-align: center !important;"><u>FMC Catering Services</u></h1>
                </div>
            </div>
        </div>


        <div class="container-fluid footer">
            <div class="row">
                <div class="col-md-12 mid">
                    <div>
                        <h1 style="text-align: center !important;">Feel Free to Contact Us</h1>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mid">
                    <div>
                        <h4 style="text-align: center !important;">Socials</h4>
                        <h5 style="text-align: center !important;">{{$contact->socmed}}</h5>
                    </div>
                </div>

                <div class="col-md-4 mid">
                    <div>
                        <h4 style="text-align: center !important;">Address</h4>
                        <h5 style="text-align: center !important;">{{$contact->address}}</h5>
                    </div>
                </div>

                <div class="col-md-4 mid">
                    <div>
                        <h4 style="text-align: center !important;">Contact</h4>
                        <h5 style="text-align: center !important;">{{$contact->name}}<br>{{$contact->contact_no}}
                            {{-- <img data-toggle="modal" data-target="#modal3" class="img" src="img/mess.png" alt="Message Us"></h5> --}}
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        {{-- <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle" align="center">How Can We Help?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('layout.message.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="formGroupExampleInput">Full Name</label>
                              <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" placeholder="Firstname Middlename Lastname" required>
                            </div>
                            <div class="form-group">
                              <label for="formGroupExampleInput2">Email Address</label>
                              <input type="text" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email Here" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Subject</label>
                                <input type="text" class="form-control" name="subject" id="exampleInputEmail1" placeholder="Subject Here" required>
                              </div>
                              <div class="form-group">
                                <label for="exampleFormControlTextarea1">Message</label>
                                <textarea class="form-control" name="message" id="exampleInputEmail1" rows="3" placeholder="Message Here" required></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" role="button" class="btn btn-success fbtn">Send Message</button>
                            </div>
                          </form>
                    </div>
                </div>
            </div>
        </div> --}}

        <script>
            var botmanWidget = {
            aboutText: 'Write Something',
            introMessage: "✋ Hi! Welcome to FMC catering services",
            title:"FMC Helper",
            mainColor:"#e4e000",
            bubbleBackground:"#b9100a"

            };
          </script>
          
          <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> 
    </body>

</html>

@endsection

@section('scripts')

@endsection

  


