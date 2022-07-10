@extends('layouts.sched')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 bg-white p-5">
            <form action="{{ route('customize.package.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="card">
                    <div class="card-header bg-transparent border-bottom-0">
                        <h4>title</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Full Name: (Required)</label>
                            <input type="text" class="form-control" name="full_name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Firstname Middlename Lastname" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Contact Number: (Required)</label>
                            <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="09XXXXXXXXX" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email Address: (Required)</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Here" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Type of Event: (Required)</label>
                            <input type="text" class="form-control" name="event_type" value="Wedding/Debut" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wedding" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Event Date: (Required)</label>
                            <input type="date" class="form-control" name="event_date" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="January 01, 2021" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Number of Persons: (Required)</label>
                            <input type="number" class="form-control" name="persons" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="123" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Additional Message: (Required)</label>
                            <input type="text" class="form-control" name="message" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Message Here" required>
                        </div>
                        <hr class="my-3">

                        <div class="form-group">
                            <label for="pork">pork</label>
                            <select class="form-control" id="pork" name="pork">
                                <option value="afritada">afritada</option>
                                <option value="menudo">menudo</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="chiken">chiken</label>
                            <select class="form-control" id="chiken" name="chiken">
                                <option value="spicy chiken">spicy chiken</option>
                                <option value="chiken asado">chiken asado</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vegitable">vegitable</label>
                            <select class="form-control" id="vegitable" name="vegitable">
                                <option value="kare-kare">kare-kare</option>
                                <option value="steam asorted vegitable">steam asorted vegitable</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="beef">beef</label>
                            <select class="form-control" id="beef" name="beef">
                                <option value="beef with broccoly">beef with broccoly</option>
                                <option value="beef salticao">beef salticao</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="sea_food">sea foods</label>
                            <select class="form-control" id="sea_food" name="sea_food">
                                <option value="rellenong pusit">rellenong pusit</option>
                                <option value="rellenong bangus">rellenong bangus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="deserts">deserts</label>
                            <select class="form-control" id="deserts" name="diserts">
                                <option selected>select item</option>
                                <option value="fruit salad">fruit salad</option>
                                <option value="buko salad">buko salad</option>
                            </select>
                        </div>
                        <p><a href="/agreement">FMC Agreement</a></p>
                        <div class="form-check">
                            <input type="checkbox" required  class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I agree to the Terms and Conditions of FMC Catering and Services</label>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-transparent">
                        <div></div>
                        <button type="submit">submit</button>
                    </div>
            </form>
        </div>

    </div>
    </div>
@endsection
