@include('web.layouts.head')
<body>
    <!-- Header -->
    <x-navbar></x-navbar>
    <!-- /Header -->

    @yield('main-content')

    <!-- Footer -->
   @include('web.layouts.footer')
    <!-- /Footer -->


    <!-- jQuery Plugins -->
    @include('web.layouts.scripts')
</body>
</html>
