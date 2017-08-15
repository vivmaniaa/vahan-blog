@if(Session::has('success'))
    <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
@endif

@if(count($errors))
    <div class="alert alert-danger" role="alert">
        <p class="lead">Errors:</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif