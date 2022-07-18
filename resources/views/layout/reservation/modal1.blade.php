<div class="modal fade bd-example-modal-lg" id="view{{$confirm->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-info">
                <h3 class="modal-title text-light font-weight-bold" id="exampleModalLabel">DETAILS</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">


                <form action="{{ route('layout.payment.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$confirm->id}}">
                    <input type="hidden" name="full_name" value="{{$confirm->full_name}}">
                    <input type="hidden" name="contact" value="{{$confirm->contact}}">
                    <input type="hidden" name="email" value="{{$confirm->email}}">
                    <input type="hidden" name="event_type" value="{{$confirm->event_type}}">
                    <input type="hidden" name="event_date" value="{{$confirm->event_date}}">
                    <input type="hidden" name="package" value="{{$confirm->package}}">
                    <input type="hidden" name="persons" value="{{$confirm->persons}}">
                    <input type="hidden" name="message" value="{{$confirm->message}}">

                    <br>
                    <br>
                    <table align="center" class="table table-striped">
                        <tr>
                            <th>CONFIRM ID</th>
                            <td>{{$confirm->id}}</td>
                        </tr>
                        <tr>
                            <th>FULL NAME</th>
                            <td>{{$confirm->full_name}}</td>
                        </tr>
                        <tr>
                            <th>CONTACT NUMBER</th>
                            <td>{{$confirm->contact}}</td>
                        </tr>
                        <tr>
                            <th>EMAIL ADDRESS</th>
                            <td>{{$confirm->email}}</td>
                        </tr>
                        <tr>
                            <th>EVENT TYPE</th>
                            <td>{{$confirm->event_type}}</td>
                        </tr>
                        <tr>
                            <th>EVENT DATE</th>
                            <td>{{$confirm->event_date}}</td>
                        </tr>
                        <tr>
                            <th>NUMBER OF PERSONS</th>
                            <td>{{$confirm->persons}}</td>
                        </tr>
                        <tr>
                            <th>MESSAGE</th>
                            <td>{{$confirm->message}}</td>
                        </tr>
                        <hr>
                        @foreach ($confirm->menus as $menu)
                        <tr>
                            <th>PORK</th>
                            <td>{{ $menu->pork }}</td>
                        </tr>
                        <tr>
                            <th>CHICKEN</th>
                            <td>{{ $menu->chiken }}</td>
                        </tr>
                        <tr>
                            <th>VEGETABLE</th>
                            <td>{{ $menu->vegitable }}</td>
                        </tr>
                        <tr>
                            <th>BEEF</th>
                            <td>{{ $menu->beef }}</td>
                        </tr>
                        <tr>
                            <th>SEA FOODS</th>
                            <td>{{ $menu->sea_food }}</td>
                        </tr>
                        <tr>
                            <th>DESSERT</th>
                            <td>{{ $menu->diserts }}</td>
                        </tr>
                    @endforeach
                    </table>

                    <div class="modal-footer">

                    </div>
                </form>

            </div>



        </div>
    </div>
</div>
