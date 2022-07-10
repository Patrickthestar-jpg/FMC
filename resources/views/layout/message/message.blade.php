@extends('layout.master_layout')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Messages</h1>

    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered" id="pedning-reservation">
                    <thead class="thead-dark">
                        <tr>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Subjects</th>
                            <th>Message</th>
                            <th class="text-center" scope="col" >Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $message->full_name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                                <td class="text-center"><a class="btn btn-outline-info btn-sm" data-toggle="modal"
                                        data-target="#accept{{ $message->id }}">View Full Details</a>
                                    @include('layout.message.modalmessage')
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
