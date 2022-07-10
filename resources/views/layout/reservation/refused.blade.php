@extends('layout.master_layout')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Refused Reservations</h1>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pedning-reservation">
                    <thead class="thead-dark">
                        <tr>
                            <th>Full Name</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <!--<th>Type of Event</th>
                            <th>Event Date</th>
                            <th>Number of Persons</th>
                            <th>Additional Message</th> -->
                            <th class="text-center" scope="col" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->full_name }}</td>
                                <td>{{ $reservation->contact }}</td>
                                <td>{{ $reservation->email }}</td>
                                <!--<td>{{ $reservation->event_type }}</td>
                                <td>{{ $reservation->event_date }}</td>
                                <td>{{ $reservation->persons }}</td>
                                <td>{{ $reservation->message }}</td>-->
                                <td class="text-center"><a class="btn btn-outline-info" data-toggle="modal"
                                        data-target="#accept{{ $reservation->id }}">View Full Details</a>
                                        @include('layout.reservation.refusedmodal')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection

@section('page_level_scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {
            $('#pedning-reservation').DataTable();
        });
    </script>
@endsection
