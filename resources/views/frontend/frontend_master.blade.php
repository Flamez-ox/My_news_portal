<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 04:04:31 GMT -->
<head>
    @include('frontend.layouts.styles')
</head>

<body>
    <div class="se-pre-con"></div>
    @include('frontend.layouts.header')

   
    @yield('body')


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


    <!-- footer Area
        ============================================ -->
        @include('frontend.layouts.footer')
   @include('frontend.layouts.scripts')
</body>


<!-- Mirrored from news365htmllatest.bdtask.com/Demo/DemoNews365/home-style-four.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Mar 2023 04:04:32 GMT -->
</html>
