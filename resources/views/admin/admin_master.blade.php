<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('admin/uploads/favicon.png') }}">

    <title>Admin Panel</title>

    @include('admin.layouts.styles')

    
</head>

<body>
<div id="app">
    <div class="main-wrapper">

        @include('admin.layouts.navbar')


        @yield('body')

        @include('admin.layouts.sidebar')
       
    </div>
</div>

@include('admin.layouts.scripts')

@if ($errors->any())
@foreach ($errors->all() as $error)
    <script>
    iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ $error }}',
    });
    </script>
    
@endforeach   
@endif

@if (session()->get('error'))

    <script>
    iziToast.error({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('error') }}',
    });
    </script>
    
  
@endif

@if (session()->get('success'))

    <script>
    iziToast.success({
        title: '',
        position: 'topRight',
        message: '{{ session()->get('success') }}',
    });
    </script>
    
  
@endif

</body>
</html>