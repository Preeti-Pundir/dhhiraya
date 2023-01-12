<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.layouts.head')
</head>

<body class="js">


    <!-- Notification -->
    @include('frontend.layouts.notification')


    <!-- Header -->
    @include('frontend.layouts.header')


    <!-- Main-content -->
    @yield('main-content')



    <!-- Footer -->
    @include('frontend.layouts.footer')



</body>

</html>