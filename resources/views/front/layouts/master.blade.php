<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ env('APP_NAME') }}</title>

    <link rel="icon" type="image/png" href="{{ asset('uploads/'.$global_setting->favicon) }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />

    @include('front.layouts.style')
    @include('front.layouts.script')
</head>
<body>

    @include('front.layouts.nav')

    @yield('main_content')

    @include('front.layouts.footer')

    <div class="scroll-top">
        <i class="fas fa-angle-up"></i>
    </div>

    @include('front.layouts.script_footer')
    @stack('scripts')
</body>
</html>