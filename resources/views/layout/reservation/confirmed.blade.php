@extends('layout.master_layout')

@section('page_level_css')
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contents')
<h1 class="h3 mb-4 text-gray-800">Confirmed Reservations</h1>
    @if (session('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('message')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

    @endif

  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
        <table class="table table-bordered" id="pedning-reservation">
          <thead class="thead-dark">
            <tr>
              <th>Full Name</th>
              <th>Contact Number</th>
              <th>Email Address</th>
              <th>Customize</th>
              <th class="text-center" scope="col">Action</th>
            </tr>
          </thead>
            <tbody>
              @foreach($reservations as $confirm)
              <tr>
              <td>{{$confirm->full_name}}</td>
              <td>{{$confirm->contact}}</td>
              <td>{{$confirm->email}}</td>
              <td>
                @if ($confirm->isCustomize == 1)
                <button class="btn-success">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </button>
                @else
                <button class="btn-danger">
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    &nbsp;
                </button>
                @endif
            </td>
              <!--<td>{{$confirm->event_type}}</td>
              <td>{{$confirm->event_date}}</td>
              <td>{{$confirm->persons}}</td>
              <td>{{$confirm->message}}</td>-->
              <td class="text-center">
                  <a class="btn btn-sm btn-primary" id="btnsend"
                  href="/send/email/{{$confirm->id}}">Send Payment Form</a>

                    <a class="btn btn-sm btn-outline-info"
                    data-toggle="modal" data-target="#view{{ $confirm->id }}">View Full Details</a>
                    @include('layout.reservation.modal1')
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

