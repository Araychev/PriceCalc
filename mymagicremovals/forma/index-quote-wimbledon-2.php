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
	<title>Man and van Wimbledon</title>
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
			<h1 class="">Man and van Wimbledon</h1>
			<div class="breadcrumbs">
				<a href="http://manandvanwimbledon.biz/">Home</a>
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

				<div>
					<label>Order number:</label> 
					<?php 
						$orderNumber = 0;
						if (isset($_REQUEST['orderNumber'])) {
							$orderNumber = $_REQUEST['orderNumber'];
						} 
						echo $orderNumber;
					?>
				</div>
				<div>
					<label>Total:</label>
					<?php if (isset($_REQUEST['totalWithDiscount'])) {echo "£".$_REQUEST['totalWithDiscount'];} ?>
				</div>
				<div>
					<label>Deposit:</label>
					<?php
						$deposit = 0; 
						if (isset($_REQUEST['totalWithDiscount'])) {
							$deposit = round((30 * $_REQUEST['totalWithDiscount']) / 100, 2);
						}
						echo "£".$deposit;
					?>
				</div>
				<?php		
					if (isset($_REQUEST['clientEmail']))  {
						if(empty($_REQUEST['termsAndConditions'])) {
							echo 'Please indicate that you have read and agree to the Terms and Conditions';
							exit;
						}
						date_default_timezone_set('Etc/UTC');
						require '../mymagicremovals_lib/PHPMailer_5.2.0/PHPMailerAutoload.php';
														
						$admin_email = 'info@mymagicremovals.co.uk';
						$admin_email = 'manandvanbiz.com@gmail.com';
						//$admin_email = 'elsi_86@abv.bg';
						$myMagicRemovalsEmail = new PHPMailer;
						//Enable SMTP debugging
						// 0 = off (for production use)
						// 1 = client messages
						// 2 = client and server messages
						$myMagicRemovalsEmail->SMTPDebug = 0;
						$myMagicRemovalsEmail->Debugoutput = 'html';
						$myMagicRemovalsEmail->CharSet = 'utf-8';
						
						//Set who the message is to be sent from
						$myMagicRemovalsEmail->setFrom($_REQUEST['clientEmail']);
						//Set an alternative reply-to address
						$myMagicRemovalsEmail->addReplyTo($_REQUEST['clientEmail']);
						//Set who the message is to be sent to
						$myMagicRemovalsEmail->addAddress($admin_email);
						//Set the subject line
						$myMagicRemovalsEmail->Subject = 'My Magic Removals Quote';
						
						$parts = '<p>From: '.$_REQUEST['clientName'].'</p><p>Phone: '.$_REQUEST['clientPhone'].'</p><p>'.$_SESSION['calcMsg'].'</p>';
						$myMagicRemovalsComment = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>My Magic Cleaners Quote</title></head>';
						$myMagicRemovalsComment .= '<body>'.$parts.'</body></html>';
						
						$myMagicRemovalsEmail->WordWrap = 50;                                 // set word wrap to 50 characters
						$myMagicRemovalsEmail->IsHTML(true);                                  // set email format to HTML
						$myMagicRemovalsEmail->Body = $myMagicRemovalsComment;
						
						if(!$myMagicRemovalsEmail->Send())
						{
						   echo "Message could not be sent. <p>";
						   echo "Mailer Error: " . $myMagicRemovalsEmail->ErrorInfo;
						   exit;
						}
						
						$myMagicRemovalsEmail->ClearReplyTos();
						$myMagicRemovalsEmail->ClearAddresses();
						
						$myMagicRemovalsEmail->setFrom($admin_email);
						$myMagicRemovalsEmail->addReplyTo($admin_email);
						//Set who the message is to be sent to
						$myMagicRemovalsEmail->addAddress($_REQUEST['clientEmail']);
						$clientComment = '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>My Magic Removals Quote</title></head>';
						$clientComment .= '<body></br><p>Dear Sir/Madam</p><p>Thank you for your quote with My Magic Removals.</p></br><p>You can check your quote details below</p></br>'.$parts;
						$clientComment .= '</br></br><p>My Magic Removals</p><p>07492 284949</p><p>info@mymagicremovals.co.uk</p>';
						$clientComment .= '<p><a href="http://mymagicremovals.co.uk">http://mymagicremovals.co.uk</a></p></body></html>';
						$myMagicRemovalsEmail->Body = $clientComment;
						$myMagicRemovalsEmail->addStringAttachment(file_get_contents("https://www.mymagiccleaners.co.uk/mymagicremovals/mymagicremovals_lib/TermsAndCond.pdf"), "Terms_And_Conditions.pdf","base64", "application/pdf");
						if(!$myMagicRemovalsEmail->Send())
						{
						   echo "Message could not be sent.";
						   echo "Mailer Error: " . $myMagicRemovalsEmail->ErrorInfo;
						   exit;
						}
					}
				?>
				
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<!-- Specify a Buy Now button. -->
					<input type="hidden" name="cmd" value="_xclick">
					 
					<!-- Identify your business so that you can collect the payments. -->
					<input type="hidden" name="business" value="mymagicremovals@gmail.com">
					  
					<!-- Specify details about the item that buyers will purchase. -->
					<input type="hidden" name="item_name" value="My Magic Removals Order">
					<input type="hidden" name="item_number" value="<?php echo $orderNumber;?>">
					<input type="hidden" name="amount" value="<?php echo $deposit;?>">
					<input type="hidden" name="currency_code" value="GBP">
					<input type="hidden" name="return" value="http://manandvanwimbledon.biz">
					
					<!--<input type="hidden" name="hosted_button_id" value="5W7CWHH4APCYQ">-->
					<!-- Display the payment button. -->
					<input type="image" src="https://www.paypalobjects.com/en_GB/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
				</form>
				<br> If you prefer you can make direct bank transfer into our bank account. 
				<br> As a payment reference write your order number.
				<br>
				<br> Barclays Business Bank
				<br> CEBT LTD
				<br> Sort code: 20-91-79
				<br> Account No: 50063959
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