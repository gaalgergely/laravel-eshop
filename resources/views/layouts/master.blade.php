<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Laravel</title>
</head>
<body>

@if(isset($errors) && $errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        <ul>
            @foreach($errors->all() as $error)
                {{ session()->get('success') }}
            @endforeach
        </ul>
    </div>
@endif

@yield('content')
</body>
</html>
