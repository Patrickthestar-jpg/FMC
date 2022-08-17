<head>
    <link rel="stylesheet" href="/css/modal1.css">
</head>
<div class="modal fade bd-example-modal-lg" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header ">
                <h3 class="modal-title text-white font-weight-bold" id="exampleModalLabel">Edit Auto Reply</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">


                <div class="container mt-5">
                    <form action="{{route('autorep.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label text-dark">Message</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="message">
                            </div>

                        </div>
                        <br> <br>

                        <div class="input-group">
                            <label class="col-sm-2 col-form-label text-dark">Reply</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="reply">
                            </div>

                        </div>

                        <div class="modal-footer mt-4">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg mt-4 justify-self-end ">
                                Save
                            </button>
                        </div>


                    </form>
                </div>



            </div>
        </div>
    </div>