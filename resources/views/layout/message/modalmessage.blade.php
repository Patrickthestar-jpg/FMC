<div class="modal fade bd-example-modal-lg" id="accept{{$message->id}}" tabindex="-1" role="dialog"
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
                <form action="{{ route('layout.message.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{$message->id}}">
                    <input type="hidden" name="full_name" value="{{$message->full_name}}">
                    <input type="hidden" name="email" value="{{$message->email}}">
                    <input type="hidden" name="subject" value="{{$message->subject}}">
                    <input type="hidden" name="message" value="{{$message->message}}">

                    <br>
                    <br>
                    <table align="center" class="table table-striped">
                        <tr>
                            <th>MESSAGE ID</th>
                            <td>{{$message->id}}</td>
                        </tr>
                        <tr>
                            <th>FULL NAME</th>
                            <td>{{$message->full_name}}</td>
                        </tr>
                        <tr>
                            <th>EMAIL ADDRESS</th>
                            <td>{{$message->email}}</td>
                        </tr>
                        <tr>
                            <th>SUBJECT</th>
                            <td>{{$message->subject}}</td>
                        </tr>
                        <tr>
                            <th>MESSAGE</th>
                            <td>{{$message->message}}</td>
                        </tr>
                    </table>

                </form>

            </div>



        </div>
    </div>
</div>
