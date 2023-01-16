<!DOCTYPE html>
<html lang="zxx">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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