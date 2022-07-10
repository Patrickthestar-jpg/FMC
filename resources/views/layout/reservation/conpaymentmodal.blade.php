<div class="modal fade bd-example-modal-lg" id="view{{$payment->id}}" tabindex="-1" role="dialog"
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
                    <input type="hidden" name="id" value="{{$payment->id}}">
                    <input type="hidden" name="full_name" value="{{$payment->full_name}}">
                    <input type="hidden" name="contact" value="{{$payment->contact}}">
                    <input type="hidden" name="email" value="{{$payment->email}}">
                    <input type="hidden" name="event_type" value="{{$payment->event_type}}">
                    <input type="hidden" name="event_date" value="{{$payment->event_date}}">
                    <input type="hidden" name="mode_payment" value="{{$payment->mode_payment}}">
                    <input type="hidden" name="refference" value="{{$payment->refference}}">

                    <br>
                    <br>
                    <table align="center" class="table table-striped">
                        <tr>
                            <th>PAYMENT ID</th>
                            <td>{{$payment->id}}</td>
                        </tr>
                        <tr>
                            <th>FULL NAME</th>
                            <td>{{$payment->full_name}}</td>
                        </tr>
                        <tr>
                            <th>CONTACT NUMBER</th>
                            <td>{{$payment->contact}}</td>
                        </tr>
                        <tr>
                            <th>EMAIL ADDRESS</th>
                            <td>{{$payment->email}}</td>
                        </tr>
                        <tr>
                            <th>EVENT TYPE</th>
                            <td>{{$payment->event_type}}</td>
                        </tr>
                        <tr>
                            <th>EVENT DATE</th>
                            <td>{{$payment->event_date}}</td>
                        </tr>
                        <tr>
                            <th>MODE OF PAYMENT</th>
                            <td>{{$payment->mode_payment}}</td>
                        </tr>
                        <tr>
                            <th>REFERENCE</th>
                            <td>{{$payment->refference}}</td>
                        </tr>
                    </table>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">Confirm</button>
                    </div>
                    </div>
                </form>

            </div>



        </div>
    </div>
</div>
