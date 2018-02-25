@if(count($errors))

    @foreach($errors->all() as $error)

        <div class="form-group">
            <div class="alert alert-danger">

                {{ $error }}</li>

            </div>
        </div>

    @endforeach

@endif