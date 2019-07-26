<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from demo.themeregion.com/jobs/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 15:06:39 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Theme Region">
   	<meta name="description" content="">

    <title>@yield('title') - Job Portal</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('asset/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('asset/css/icofont.css') }}"> 
    <link rel="stylesheet" href="{{ asset('asset/css/slidr.css') }}">     
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">  
	<link id="preset" rel="stylesheet" href="{{ asset('asset/css/presets/preset1.css') }}">	
    <link rel="stylesheet" href="{{ asset('asset/css/responsive.css') }}">
	
	<!-- font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Signika+Negative:400,300,600,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">


    @yield('css')

	<!-- icons -->
	<link rel="icon" href="{{ asset('asset/images/ico/favicon.ico') }}">	
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('asset/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('asset/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('asset/images/ico/apple-touch-icon-72-precomposed.html') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('asset/images/ico/apple-touch-icon-57-precomposed.png') }}">
    <!-- icons -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Template Developed By ThemeRegion -->
  </head>
  <body>
	<!-- header -->
    @include('partial._header')


    @yield('content')
	
    @include('partial._footer')
	
    <!-- JS -->
    <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('asset/js/popper.min.js') }}"></script>
    <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/js/price-range.js') }}"></script>   
    <script src="{{ asset('asset/js/main.js') }}"></script>
    <script src="{{ asset('asset/js/switcher.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>

    @yield('js')
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-73239902-1', 'auto');
	  ga('send', 'pageview');

	</script>

    <script>

        @if(session()->get('message'))
        swal({
            title: "Success!",
            text: "{{ session()->get('message') }}",
            type: "success",
            timer: 3000
        });
        @endif

        @if(session()->get('error'))
        swal({
            title: "Error!",
            text: "{{ session()->get('error') }}",
            type: "error",
            timer: 3000
        });
        @endif

    </script>

  </body>

<!-- Mirrored from demo.themeregion.com/jobs/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Jul 2019 15:07:24 GMT -->
</html>