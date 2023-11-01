<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{$config['singkatan_website']}}</title>
<!-- Stylesheets -->
<link href="{{url('public')}}/assets/css/bootstrap.css" rel="stylesheet">
<link href="{{url('public')}}/assets/css/revolution-slider.css" rel="stylesheet">
<link href="{{url('public')}}/assets/css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="{{url('public')}}/assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="{{url('public')}}/assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{url('public')}}/assets/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{url('public')}}/assets/js/respond.js"></script><![endif]-->
@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"><div class="loader"><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div></div></div>

    @include('components.layout.header')

    @yield('content')

    @include('components.layout.footer')


</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>


<script src="{{url('public')}}/assets/js/jquery.js"></script>
<script src="{{url('public')}}/assets/js/bootstrap.min.js"></script>
<script src="{{url('public')}}/assets/js/revolution.min.js"></script>
<script src="{{url('public')}}/assets/js/jquery.fancybox.pack.js"></script>
<script src="{{url('public')}}/assets/js/jquery.fancybox-media.js"></script>
<script src="{{url('public')}}/assets/js/owl.js"></script>
<script src="{{url('public')}}/assets/js/wow.js"></script>
<script src="{{url('public')}}/assets/js/script.js"></script>
</body>
</html>
