@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $errors)
        <p>{{$errors}}</p>

        @endforeach
    </div>
@endif
