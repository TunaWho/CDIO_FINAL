<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/index.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/header.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('assets/css/responsive.css') }}"
        />
        @stack('styles')
        <title>Document</title>
    </head>
    <body>
        @include('customer.layouts.header')

        <div class="body">
            @yield('content')
        </div>

        @include('customer.layouts.footer')
        
        <script src="{{ asset('assets/js/index.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        @stack('scripts')
    </body>
</html>
