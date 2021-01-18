<!DOCTYPE html>
<html lang="en">

<head>
    <title>HEART -  @yield('title')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('') }}">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="upload/logo/icon.png">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="home_asset/vendor/bootstrap/css/bootstrap-4-1-1.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/css/util.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="home_asset/css/main.css">
    <link rel="stylesheet" type="text/css" href="home_asset/css/profile.css">
    <script type="text/javascript" language="javascript" src="assets/ckeditor/ckeditor.js" ></script>
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @yield('css')
    <!--===============================================================================================-->
</head>

<body>

    @include('home.layout.header')

    @yield('content')

    @include('home.layout.footer')

    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <span class="fas fa-angle-up"></span>
        </span>
    </div>

    <!-- Modal Video 01-->
    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document" data-dismiss="modal">
            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">
                <div class="video-mo-01">
                    <iframe src="https://www.youtube.com/embed/wJnBTPUQS5A?rel=0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <!--===============================================================================================-->
    <script src="home_asset/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="home_asset/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="home_asset/vendor/bootstrap/js/popper.js"></script>
    <script src="home_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="home_asset/js/main.js"></script>
    <script src="home_asset/js/alert.js"></script>
    @yield('script')
</body>

</html>