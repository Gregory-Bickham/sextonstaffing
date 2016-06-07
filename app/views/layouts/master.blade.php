<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Sexton Staffing</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>

	<!-- CSS Global Compulsory-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="css/custom.css">

    @yield('top-script')

</head>
<body>
	
    
    @yield('content')
	


	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- JS Implementing Plugins -->
	<script src="js/back-to-top.js"></script>
	<script src="js/smoothScroll.js"></script>
	<script src="js/countdown/jquery.plugin.js"></script>
	<script src="js/countdown/jquery.countdown.js"></script>
	<script src="js/wow.min.js"></script>

	<!-- JS Page Level -->
	<script src="js/app.js"></script>
	<script src="js/page_coming_soon.js"></script>
	
	@yield('scripts')

	<script>
		jQuery(document).ready(function() {
			App.init();
			PageComingSoon.initPageComingSoon();
			new WOW().init();
		});
	</script>

</body>
</html>
