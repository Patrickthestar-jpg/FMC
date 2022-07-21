<div class="modal fade bd-example-modal-lg" id="add_pic" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-info">
                <h3 class="modal-title text-light font-weight-bold" id="exampleModalLabel">DETAILS</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">


                <div class="container mt-5">
                    <form action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
                      <h3 class="text-center mb-5">Upload File in Laravel</h3>
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
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input" id="chooseFile">
                            <label class="custom-file-label" for="chooseFile">Upload a Photo</label>
                        </div>
                        <br> <br>
                        <div>
                            <input type="text" name="caption" id="caption">
                            <label  for="caption">Insert Photo Caption</label>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block mt-4">
                            Upload
                        </button>
                    </form>
                </div>


        </div>
    </div>
</div>
