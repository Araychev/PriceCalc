<?php
	session_start();
?>
<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta charset="utf-8">
	
	<!-- Always force latest IE rendering engine (even in intranet) -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<title>Man and van Croydon</title>
	<meta name="author" content="" />
	<meta name="description" content="" />
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-touch-icon-152x152.png" />
	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/dark.css" />
	<link rel="stylesheet" href="css/bootstrap.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="stylesheet" href="css/sliders.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/icon-fonts.css" />
    <link rel="stylesheet" href="css/formStyle.css" >
	
	<?php
		$file = '../mymagicremovals_lib/croydonCounter.txt';

		//get the number from the file
		$uniq = file_get_contents($file);

		//add +1
		$orderNum = $uniq + 1 ;
		file_put_contents($file, $orderNum);
	?>

</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 ) -->
<body class="preloader2">
<div id="preloader">
	<div class="spinner1">
		<div class="rect1"></div><div class="rect2"></div><div class="rect3"></div><div class="rect4"></div><div class="rect5"></div>
	</div>
	<div class="spinner2">
		<div class="sk-dot1"></div><div class="sk-dot2"></div>
	</div>
</div>

<div id="main_wrapper">

	
				
				
        <!-- End Main Header -->	
	
	<!-- Page Title -->
	<section class="content_section page_title">
		<div class="content clearfix">
			<h1 class="">Man and van Croydon</h1>
			<div class="breadcrumbs">
				<a href="http://manandvancroydon.biz/">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#"></a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Intro Banner -->
	<section class="content_section">
		
		<div class="container">
		    <div class="section-title text-left">

				<form method="post" id="detailForm" action="index-quote-croydon-2.php" onsubmit="if(document.getElementById('termsAndConditions').checked) { return true; } else { alert('Please indicate that you have read and agree to the Terms and Conditions'); return false; }">		
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<?php 
								$movingTime = array("8"=>"08:00", "9"=>"09:00", "10"=>"10:00", 
													"11"=>"11:00", "12"=>"12:00", "13"=>"13:00", 
													"14"=>"14:00", "15"=>"15:00", "16"=>"16:00",
													"17"=>"17:00", "18"=>"18:00", "19"=>"19:00"); 
								$vanSize = array("24"=>"Small L2.3m x W1.7m x H1.4m", 
												 "34"=>"Large L4m x W1.7m x H1.8m", 
												 "39"=>"Luton L4m x W2m x H2.2m");
												 
								$numberOfMen = array("1"=>"1 man", "2"=>"2 men", "3"=>"3 men");
								
								$floor = array("-5"=>"Basement", "0"=>"Ground floor", "5"=>"1st floor", "10"=>"2nd floor", "15"=>"3rd floor");
									
								$time = array("30"=>"30 min", "60"=>"1 hour", "90"=>"1h 30 min", "120"=>"2 hours", 
												"150"=>"2h 30min", "180"=>"3 hours", "210"=>"3h 30min", "240"=>"4 hours",
												"270"=>"4h 30min", "300"=>"5 hours");
							
							?>
							<div>
								<label>Order number:</label> 
								<?php echo $orderNum; ?>
								<input type="hidden" name="orderNumber" id="orderNumber" value="<?php echo $orderNum; ?>" />
							</div>
							<div>
								<label>Moving date:</label> 
								<?php if (isset($_REQUEST['movingDate'])) {echo $_REQUEST['movingDate'];} ?> 
							</div>
							<div>
								<label>Moving time:</label> 
								<?php if (isset($_REQUEST['movingTime'])) {echo $movingTime[$_REQUEST['movingTime']];} ?> 
							</div>
							<div>
								<label>Van size:</label> 
								<?php if (isset($_REQUEST['vanSize'])) {echo $vanSize[$_REQUEST['vanSize']];} ?> 
							</div>
							<div>
								<label>Number of men:</label> 
								<?php if (isset($_REQUEST['numberOfMen'])) {echo $numberOfMen[$_REQUEST['numberOfMen']];} ?> 
							</div>
							<div>
								<label>Congestion zone:</label> 
									<?php 
										if (isset($_REQUEST['congestionZone'])){
											if ($_REQUEST['congestionZone'] == "0"){
												echo "No";
											}
											else{
												echo "Yes";
											}	
										}
									?> 
							</div>
							<div>
								<label>From address:</label> 
								<?php if (isset($_REQUEST['fromAddress'])) {echo $_REQUEST['fromAddress'];} ?> 
							</div>
							<div>
								<label>Floor:</label> 
								<?php if (isset($_REQUEST['fromFloor'])) {echo $floor[$_REQUEST['fromFloor']];} ?> 
							</div>
							<div>
								<label>Lift:</label> 
								<?php 
									if (isset($_REQUEST['fromLift'])){
										if ($_REQUEST['fromLift'] == "0"){
											echo "No";
										}
										else{
											echo "Yes";
										}
									}
								?> 
							</div>
							<div>
								<label>Loading Time:</label> 
								<?php if (isset($_REQUEST['loadingTime'])) {echo $time[$_REQUEST['loadingTime']];} ?> 
							</div>
							<div>
								<label>To address:</label> 
								<?php if (isset($_REQUEST['toAddress'])) {echo $_REQUEST['toAddress'];} ?> 
							</div>
							<div>
								<label>Floor:</label> 
								<?php if (isset($_REQUEST['toFloor'])) {echo $floor[$_REQUEST['toFloor']];} ?> 
							</div>
							<div>
								<label>Lift:</label> 
								<?php 
									if (isset($_REQUEST['toLift'])){
										if ($_REQUEST['toLift'] == "0"){
											echo "No";
										}
										else{
											echo "Yes";
										}
									}
								?>
							</div>
							<div>
								<label>Unloading Time:</label> 
								<?php if (isset($_REQUEST['unloadingTime'])) {echo $time[$_REQUEST['unloadingTime']];} ?> 
							</div>
							<div>
								<label>Distance:</label> 
								<?php if (isset($_REQUEST['distance'])) {echo $_REQUEST['distance'];} ?> miles
							</div>
							<div>
								<label>Travell Time:</label> 
								<?php 
									if (isset($_REQUEST['seconds'])){
										$hours = floor(($_REQUEST['seconds'] / 3600));
										$min = ceil(($_REQUEST['seconds'] - ($hours * 3600)) / 60);
										if ($hours > 0){
											echo $hours."h ";
										}
										echo $min."min";
									}
								?>
							</div>
							<div>
								<label>Total Time:</label> 
								<?php if (isset($_REQUEST['totalTime'])){echo $_REQUEST['totalTime'];} ?>
							</div>
							<div>
								<label>Total:</label> 
								<?php if (isset($_REQUEST['total'])){echo "£".$_REQUEST['total'];} ?>
								
							</div>
							<div>
								<label>Discount:</label> 
								<?php if (isset($_REQUEST['discount'])){echo "£".$_REQUEST['discount'];} ?>										
							</div>
							<div>
								<label>Total with Discount:</label> 
								<?php if (isset($_REQUEST['totalWithDiscount'])){echo "£".$_REQUEST['totalWithDiscount'];} ?>
								<input type="hidden" name="totalWithDiscount" id="totalWithDiscount" value="<?php if (isset($_REQUEST['totalWithDiscount'])){echo $_REQUEST['totalWithDiscount'];} ?>" />
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div>
								<label for="clientName">Name:</label>
								<input type="text" name="clientName" required/>
							</div>
							<div>
								<label for="clientPhone">Phone:</label>
								<input type="text" name="clientPhone" required/>
							</div>
							<div>
								<label for="clientEmail">Email:</label>
								<input type="email" name="clientEmail" required/>
							</div>
							<div>
								<input type="checkbox" name="termsAndConditions" id="termsAndConditions" value="check" unchecked>I have read and agree to the
								<a href="..\mymagicremovals_lib\TermsAndCond.pdf" target="_blank"><u><strong>Terms & Conditions</strong></u></a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<input type="submit" id="btnContinue" value="Continue" />
							<input type="button" id="btnBack" value="Back" onclick="window.history.back();" />
						</div>
					</div>
				</form>
				<?php		
					
						
					$calcMsg = "";
					if (isset($_REQUEST['movingDate']))  {
						$calcMsg .= "<p>Order number: ".$orderNum."</p>";
						$calcMsg .= "<p>Moving date: ".$_REQUEST['movingDate']."</p>";
						$calcMsg .= "<p>Moving time: ".$movingTime[$_REQUEST['movingTime']]."</p>";
						$calcMsg .= "<p>Van size: ".$vanSize[$_REQUEST['vanSize']]."</p>";
						$calcMsg .= "<p>Number of men: ".$numberOfMen[$_REQUEST['numberOfMen']]."</p>";
						
						if ($_REQUEST['congestionZone'] == "0"){
							$calcMsg .= "<p>Congestion zone: No</p>";
						}
						else{
							$calcMsg .= "<p>Congestion zone: Yes</p>";
						}
						$calcMsg .= "<p>From address: ".$_REQUEST['fromAddress']."</p>";
						$calcMsg .= "<p>Floor: ".$floor[$_REQUEST['fromFloor']]."</p>";								
						if ($_REQUEST['fromLift'] == "0"){
							$calcMsg .= "<p>Lift: No</p>";
						}
						else{
							$calcMsg .= "<p>Lift: Yes</p>";
						}
						$calcMsg .= "<p>Loading Time: ".$time[$_REQUEST['loadingTime']]."</p>";
						$calcMsg .= "<p>To address: ".$_REQUEST['toAddress']."</p>";
						$calcMsg .= "<p>Floor: ".$floor[$_REQUEST['toFloor']]."</p>";
						if ($_REQUEST['toLift'] == "0"){
							$calcMsg .= "<p>Lift: No</p>";
						}
						else{
							$calcMsg .= "<p>Lift: Yes</p>";
						}
						$calcMsg .= "<p>Unloading Time: ".$time[$_REQUEST['unloadingTime']]."</p>";
						$calcMsg .= "</br>";
						$calcMsg .= "<p>Distance: ".$_REQUEST['distance']."miles</p>";
						$calcMsg .= "<p>Travell Time: ";
						$hours = floor(($_REQUEST['seconds'] / 3600));
						$min = ceil(($_REQUEST['seconds'] - ($hours * 3600)) / 60);
						if ($hours > 0){
							$calcMsg .= $hours."h ";
						}
						$calcMsg .= $min."min"."</p>";
						
						$calcMsg .= "<p>Total Time: ".$_REQUEST['totalTime']."</p>";			
						$calcMsg .= "<p>Total: £".$_REQUEST['total']."</p>";
						$calcMsg .= "<p>Discount: £".$_REQUEST['discount']."</p>";
						$calcMsg .= "<p>Total with Discount: £".$_REQUEST['totalWithDiscount']."</p>";
						$deposit = round((30 * $_REQUEST['totalWithDiscount']) / 100, 2);
						$calcMsg .= "<p>Deposit: £".$deposit."</p>";
					}	
					$_SESSION['calcMsg'] = $calcMsg;
				
				?>
			</div>
		</div>
		
	</section>
	<footer>	
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-6">
					<span class="footer_copy_text"> <a href="http://kp-uk.com/">All rights reserved</a> <a href="#"></a></span>
				</div>
				<div class="col-md-6 clearfix">
					
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->
	<a href="#" class="hm_go_top">Top</a>
</div>
<!-- End wrapper -->

<script src="js/jquery-1.11.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/modernizr-2.7.1.dev.js" type="text/javascript"></script>
<script src="js/jquery.appear.js" type="text/javascript"></script>
<script src="js/jquery.countTo.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js" type="text/javascript"></script>
<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="js/isotope.pkgd.min.js" type="text/javascript"></script>
<script src="js/retina.min.js" type="text/javascript"></script>
<!-- this is where we put our custom functions -->
<script src="js/jquery.sticky.js"></script>
<script src="js/functions.js"></script>
</body>
</html>