<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.header')
<body>
    @include('includes.navbar')
    <div class="container-fluid">
        <div class="row">
            @include('includes.sidebar')
            @yield('main_page')
        </div>
    </div>
</body>
</html>
