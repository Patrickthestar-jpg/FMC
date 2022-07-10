@extends('layout.master_layout')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contents')
<h1 class="h3 mb-4 text-gray-800">Ongoing Reservations</h1>

<div class="row">
    <div class="col-12">
    <table class="table-responsive">
        <table class="table table-bordered" id="pedning-reservation">
  <thead class="thead-dark">
    <tr>
    <th scope="col">Full Name</th>
      <th scope="col">Contact Number</th>
      <!--<th scope="col">Email Address</th>
      <th scope="col">Type of Event</th>
      <th scope="col">Event Date</th> -->
      <th scope="col">Mode of Payment</th>
      <th scope="col">Reference</th>
      <th class="text-center" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->full_name }}</td>
                                <td>{{ $payment->contact }}</td>
                                <!--<td>{{ $payment->email }}</td>
                                <td>{{ $payment->event_type }}</td>
                                <td>{{ $payment->event_date }}</td> -->
                                <td>{{ $payment->mode_payment }}</td>
                                <td>{{ $payment->refference }}</td>
                                <td class="text-center">
                                      <a class="btn btn-sm btn-outline-info"
                                      data-toggle="modal" data-target="#view{{ $payment->id }}">View Full Details</a>
                                      @include('layout.reservation.ongoingmodal')
                                  </td>
                            </tr>
                        @endforeach
  </tbody>
</table>
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

