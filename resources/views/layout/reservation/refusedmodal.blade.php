<div class="modal fade bd-example-modal-lg" id="accept{{ $reservation->id }}" tabindex="-1" role="dialog"
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
                        <th>RESERVATION ID</th>
                        <td>{{ $reservation->id }}</td>
                    </tr>
                    <tr>
                        <th>FULL NAME</th>
                        <td>{{ $reservation->full_name }}</td>
                    </tr>
                    <tr>
                        <th>CONTACT NUMBER</th>
                        <td>{{ $reservation->contact }}</td>
                    </tr>
                    <tr>
                        <th>EMAIL ADDRESS</th>
                        <td>{{ $reservation->email }}</td>
                    </tr>
                    <tr>
                        <th>EVENT TYPE</th>
                        <td>{{ $reservation->event_type }}</td>
                    </tr>
                    <tr>
                        <th>EVENT DATE</th>
                        <td>{{ $reservation->event_date }}</td>
                    </tr>
                    <tr>
                        <th>PACKAGE</th>
                        <td>{{ $reservation->package }}</td>
                    </tr>
                    <tr>
                        <th>NUMBER OF PERSONS</th>
                        <td>{{ $reservation->persons }}</td>
                    </tr>
                    <tr>
                        <th>MESSAGE</th>
                        <td>{{ $reservation->message }}</td>
                    </tr>
                </table>
            </div>
            <div class="modal-footer">
                <form action="{{ route('layout.restore.restore', $reservation->id) }}" method="post">
                    @csrf
                    @method('put')
                    <button class="btn btn-success" type="submit">Restore</button>

                </form>
            </div>
        </div>
    </div>
</div>
