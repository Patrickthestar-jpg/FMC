@extends('layout.master_layout')


@section('contents')
    <h1 class="h3 mb-4 text-gray-800">Contact Details</h1>

    @if (session('message'))

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('message')}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    @endif

    <div class="row">
        <form action="{{route('update-contact', $contact->id)}}" method="post">
        @csrf
            <div class="container ">

                <div class="input-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" value="{{$contact->name}}">
                </div>

                <div class="input-group">
                    <label>Conatct Number</label>
                    <input class="form-control" type="text" name="contact_no" value="{{$contact->contact_no}}">
                </div>

                <div class="input-group">
                    <label>Address</label>
                    <input class="form-control" type="text" name="address" value="{{$contact->address}}">
                </div>

                <div class="input-group">
                    <label>Social Media</label>
                    <input class="form-control" type="text" name="socmed" value="{{$contact->socmed}}">
                </div>

                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Update
                </button>
            </div>
        </form>
    </div>
@endsection

