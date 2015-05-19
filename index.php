<!DOCTYPE html>
<html>
<head>
<title>.: AIA DASHBOARD :.</title>
<meta name = "keywords" content = "" />
<meta name = "description" content = "" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">
<!-- Nice Scrollling -->
<script src="assets/js/scrolling/jquery.min.js"></script>
<script src="assets/js/scrolling/jquery.nicescroll.min.js"></script>

<!-- Back to top -->
<script src="assets/js/backtotop/jquery.scrollToTop.min.js"></script>

<!-- Style -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css">

<!-- Windows 8 -->
<link rel="stylesheet" href="assets/css/demo-styles.css" />
<script src="assets/js/win8/modernizr-1.5.min.js" type="text/javascript"></script>
 
<!-- slider --> 
<link rel="stylesheet" type="text/css" href="assets/css/slider.css" />
<script type="text/javascript" src="assets/js/slider/modernizr.custom.28468.js"></script>
 
<link rel="stylesheet" href="assets/css/rotation.css" />
 
<script type="text/javascript" 	src="assets/js/jquery.smint.js"></script>
<script type="text/javascript" src="assets/js/function.js"></script>

</head>
<body >

<a href="#top" id="toTop"></a>

<div id="dvLoading"></div>
<?php
include 'index/menu.php';
?>
	<div class="wrap">
	<div class="section sTop">
		<div class="inner_content" style="padding:0px;">
            <?php 
			include 'index/home.php';
			?>
		</div>
	<div class="section s1">
		<div class="inner_content">
			<h1>ROADMAP </h1>
			<?php
           // include 'index/about.php';
			?>
		</div>
	</div>
	<div class="section s2">
		<div class="inner_content">
			<h1>AVAILABLE EVENT</h1>
			<?php
            //include 'index/work.php';
			?>
		</div>
	</div>
	<div class="section s3">
		<div class="inner_content">
		<h1>REGISTERED & ATTENDED EVENT</h1>
		<?php
            //include 'index/contact.php';
			?>
		</div>
	</div>
    <div class="section s4">
		<div class="inner_content">
		<h1>E-Learning</h1>
		<?php
            //include 'index/contact.php';
			?>
		</div>
	</div>
    <div class="section s5">
		
		<?php
            include 'index/achievement.php';
			?>
		
	</div>
    <div class="section s6">
		
		
		<?php
            include 'index/profile.php';
			?>
		
	</div>
</div>
<!-- windows 8 -->
<script src="assets/js/win8/scripts.js" type="text/javascript"></script>

<!-- slider -->
<script type="text/javascript" src="assets/js/slider/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
		</script>	


</body>
</html>