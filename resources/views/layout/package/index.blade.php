@extends('layout.master_layout')
@section('contents')
    <div class="row shadow align-items-center mb-3">
        <div class="col">
            <h1 class="h3 my-3 text-gray-800">Packages</h1>
        </div>
        <div class="col">
            <div class="d-flex justify-content-end">
                <button class="btn btn-primary" data-toggle="modal" data-target="#add">
                    <span class="d-flex align-items-center"><i class="fas fa-plus-circle"></i>&#160; Add Package</span>
                </button>
                @include('layout.package.model._add')
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <table class="table-responsive">
                <table class="table table-bordered" id="c-reservation">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Service</th>
                            <!--<th scope="col">Email Address</th>
          <th scope="col">Type of Event</th>
          <th scope="col">Event Date</th> -->
                            <th scope="col">Modal Title</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($packages as $package)
                        <tr>
                            <th>
                                {{ $package->title }}
                            </th>
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
            $('#package-reservation').DataTable();
        });
    </script>
@endsection
