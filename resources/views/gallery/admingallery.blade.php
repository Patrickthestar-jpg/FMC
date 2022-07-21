@extends('layout.master_layout')

@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Gallery Pictures</h1>

    <div class="row">
        <div class="col-9">

        </div>
        <div class="col-3">
            <a class="btn btn-sm btn-outline-info" data-toggle="modal"
            data-target="#add_pic">Upload New Photo</a>
        </div>
        <br>  <br>  <br>  <br>
        <div class="col-12">
            <table class="table-responsive">
                <table class="table table-bordered" id="pedning-reservation">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Picture</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallery as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img src="{{$item->picture}}" alt="picture"></td>
                                <td class="text-center">
                                    {{-- <a class="btn btn-sm btn-outline-info" data-toggle="modal"
                                        data-target="#view{{}}">View Full Details</a>
                                    @include('layout.reservation.conpaymentmodal') --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
        </div>
    </div>
    @include('gallery.modal1')
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
