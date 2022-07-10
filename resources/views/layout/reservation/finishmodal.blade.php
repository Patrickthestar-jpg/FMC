<div class="modal fade bd-example-modal-lg" id="view{{$ongoing->id}}" tabindex="-1" role="dialog"
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
                    <table align="center" class="table table-striped">
                        <tr>
                            <th>PAYMENT ID</th>
                            <td>{{$ongoing->id}}</td>
                        </tr>
                        <tr>
                            <th>FULL NAME</th>
                            <td>{{$ongoing->full_name}}</td>
                        </tr>
                        <tr>
                            <th>CONTACT NUMBER</th>
                            <td>{{$ongoing->contact}}</td>
                        </tr>
                        <tr>
                            <th>EMAIL ADDRESS</th>
                            <td>{{$ongoing->email}}</td>
                        </tr>
                        <tr>
                            <th>EVENT TYPE</th>
                            <td>{{$ongoing->event_type}}</td>
                        </tr>
                        <tr>
                            <th>EVENT DATE</th>
                            <td>{{$ongoing->event_date}}</td>
                        </tr>
                        <tr>
                            <th>MODE OF PAYMENT</th>
                            <td>{{$ongoing->mode_payment}}</td>
                        </tr>
                        <tr>
                            <th>REFERENCE</th>
                            <td>{{$ongoing->refference}}</td>
                        </tr>
                    </table>
                    </div>

            </div>



        </div>
    </div>
</div>
