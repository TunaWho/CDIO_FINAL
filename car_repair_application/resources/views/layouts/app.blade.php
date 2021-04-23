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
            type="text/css"
            href="{{ asset('assets/css/index.css') }}"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('assets/css/responsive.css') }}"
        />
        <title>Document</title>
    </head>
    <body>
        @include('layouts.header')

        <div class="body container">
            @yield('content')
        </div>

        @include('layouts.footer')
        
        <script src="{{ asset('assets/js/index.js') }}"></script>
    </body>
</html>
