<!DOCTYPE html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body>

        <header class="bg-light">
            @include('includes.header')
        </header>

        @yield('content')

    </body>
</html>
