<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('danger'))
<div class="alert alert-danger" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info" role="alert">
    <strong>{{ $message }}</strong>
</div>
@endif