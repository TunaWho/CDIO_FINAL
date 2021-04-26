<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        />
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
            href="{{ asset('assets/css/detail.css') }}"
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

        <div class="body container">
            @yield('content')
        </div>

        @include('customer.layouts.footer')
        
        <script src="{{ asset('assets/js/index.js') }}"></script>
        @stack('scripts')
    </body>
</html>
