<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    @include('frontend.layouts.head')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
</head>

<body class="js">


    <!-- Notification -->
    @include('frontend.layouts.notification')


    <!-- Header -->
    @include('frontend.layouts.header', ['brands' => \App\Models\Brand::all()])


    <!-- Main-content -->
    @yield('main-content')

    {{-- Survey Modal --}}

    @include('frontend.layouts.survey')

    <!-- Footer -->
    @include('frontend.layouts.footer')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>


</body>

</html>
