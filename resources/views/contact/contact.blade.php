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
    <form action="{{route('update-contact', $contact->id)}}" method="post" class="col-md-12 ">
        @csrf
        <div class="container card ">

            <div class="card-body">
                <div class="input-group form-group row pt-2">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="name" value="{{$contact->name}}">
                    </div>
                </div>

                <div class="input-group form-group  row">
                    <label  class="col-sm-2 col-form-label">Conatct Number</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="contact_no" value="{{$contact->contact_no}}">
                    </div>
                </div>

                <div class="input-group form-group row">
                    <label  class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="address" value="{{$contact->address}}">   
                    </div>
                    
                </div>

                <div class="input-group form-group row">
                    <label class="col-sm-2 col-form-label">Social Media</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="socmed" value="{{$contact->socmed}}">
                    </div>
                </div>

                <input name="_method" type="hidden" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                    Update
                </button>
            </div>


        </div>
    </form>
</div>
@endsection