<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>System Installation | @yield('title')</title>
    <!-- Bootstrap -->
    <link href="/assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Font Awesome -->
    <link href="/assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- NProgress -->
    <link href="/assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet" type="text/css" media="all">
    <!-- Animate.css -->
    <link href="/assets/admin/vendors/animate.css/animate.min.css" rel="stylesheet" type="text/css" media="all">

    <!-- Custom Theme Style -->
    <link href="/assets/admin/build/css/custom.min.css" rel="stylesheet" type="text/css" media="all">
    @stack('css')
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>

<body class="login">
<div>

    <div class="login_wrapper">

        <div class="animate form login_form">
            <div class="text-center">
                <img src="{{ asset('public/upload/logo.png') }}" style="">
            </div>
            @yield('content')
        </div>
    </div>
</div>
@stack('js')
</body>
</html>
