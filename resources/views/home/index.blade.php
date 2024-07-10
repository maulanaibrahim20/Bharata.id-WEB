<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Bharata.id</title>
    <style>
        .square-image {
            width: 100%;
            height: auto;
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
    </style>

</head>

<body>
    @include('components.navbar')

    <br />

    {{-- CONTENT --}}
    @yield('content')
    {{-- END CONTENT --}}

    </br>

    {{-- FOOTER --}}
    @include('components.footer')
    {{-- END FOOTER --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('script')
</body>

</html>
