@extends('layout.master_layout')



@section('page_level_css')
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
  
@endsection




@section('contents')
    

    @if (session('message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    @endif

    <div class="row">
        <div class="col-md-9">
            <h1 class="h3 mb-4 text-gray-800">Gallery Pictures</h1>
        </div>
        
        <div class="col-md-2 offset-1 justify-content-end d-flex flex-column pb-4 ">
            <a class="btn btn-sm btn-outline-primary " data-toggle="modal"
            data-target="#add_pic" style="color: #007bff;" onMouseOver="this.style.color='white'"
             onMouseOut="this.style.color='#007bff'" >Upload New Photo</a>
        </div>
        <br>  <br>  <br>  <br>
        <div class="col-12">
            <table class="table-responsive">
                <table class="table table-bordered" id="pedning-reservation">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Type</th>
                            <th scope="col">Caption</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallery as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td><img src="{{$item->picture}}" alt="picture" style="width:100px;"></td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->caption}}</td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-outline-danger" style="color: #dc3545;" onMouseOver="this.style.color='white'"
                                        onMouseOut="this.style.color='#dc3545'" 
                                    data-toggle="modal" data-target="#delete{{ $item->id }}">Delete</a>
                                    @include('gallery.modal2')
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
