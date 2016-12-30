<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project|Test</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/assets/css/animate.css" rel="stylesheet">
    <link href="/assets/css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="/assets/css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">
    @section('more_style')

    @show
</head>

<body>

<div id="wrapper">
    @include('layouts.sider')
</div>
<div id="page-wrapper" class="gray-bg">
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
</div>
</body>
<script src="/assets/js/jquery-2.1.1.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/assets/js/inspinia.js"></script>
<script src="/assets/js/plugins/pace/pace.min.js"></script>

<!-- SUMMERNOTE -->
<script src="/assets/js/plugins/summernote/summernote.min.js"></script>
@section('more_js')
@show
</html>