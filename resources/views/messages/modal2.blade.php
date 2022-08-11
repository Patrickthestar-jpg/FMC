

<div class="modal fade bd-example-modal-lg" id="delete{{$item->id}}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content ">
            <div class="modal-header bg-danger">
                <h3 class="modal-title text-light font-weight-bold" id="exampleModalLabel">Delete</h3>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="container mt-5">
                    <form action="{{route('autorep.destroy', $item->id)}}" method="get">
                        @csrf
                            <h3>Are you sure you want to delete?</h3>
                        <div class="modal-footer">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </div>
                    </form>
                </div>


        </div>
    </div>
</div>
