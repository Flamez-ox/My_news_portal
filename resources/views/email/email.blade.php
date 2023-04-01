<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    
        <link rel="icon" type="image/png" href="{{ asset('admin/uploads/favicon.png') }}">
    
        <title>Forgot password</title>
    
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap" rel="stylesheet">
    
        @include('admin.layouts.styles')
    </head>
<body>
  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg btn-block">
            {!! $body !!}
        </button>
    </div>
    <br>
    <img width="100" src="{{ asset('admin/uploads/unnamed.gif') }}" alt="Duolingo"><br>
    <i>User: Laravel developer</i>
</body>
@include('admin.layouts.scripts')
</html>