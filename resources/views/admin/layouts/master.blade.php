<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('admin.layouts.meta')
    @include('admin.layouts.css')
    @yield('css')

</head>

<body>

    <div class="page-wrapper compact-wrapper" id="pageWrapper">

    <!-- header area -->
    @include('admin.layouts.header')
    <!-- header area end -->

     <div class="page-body-wrapper">


    <!-- sidebar-popup -->
    @include('admin.layouts.sidebar')
    <!-- sidebar-popup end -->


     <div class="page-body">
        <!-- Breadcrumb -->
        {{-- @yield('breadcrumbs') --}}
        <!-- / Breadcrumb -->

        @yield('content')
     </div>



    <!-- footer area -->
    @include('admin.layouts.footer')
    <!-- footer area end -->

</div>
    </div>


    <!-- scroll-top -->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- scroll-top end -->


    <!-- js -->
    @include('admin.layouts.script')

</body>

</html>
