@if(Session::has('success'))
    <div class="row mr-2 ml-2">
            <button style="width:600px; margin:auto;" type="text" class="btn btn-block btn-outline-success mb-2"
                    id="type-error">{{Session::get('success')}}
            </button>
    </div>
@endif
