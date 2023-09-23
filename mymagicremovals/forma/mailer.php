<?php session_start();
if(isset($_POST['Submit'])) {
$youremail = 'info@mymagicremovals.co.uk';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$mail = $_POST['mail'];
$city = $_POST['city']; 
$zip = $_POST['zip']; 
$pick  = $_POST['text']; 
$drop  = $_POST['text']; 
$lift  = $_POST['text']; 
$how  = $_POST['text']; 
$phone = $_POST['phone']; 
$gender = $_POST['gender']; 
$mpriority = $_POST['mpriority']; 
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$d = $_POST['d'];
$m = $_POST['m'];
$y = $_POST['y'];
$birthdate = $d.'/'.$m.'/'.$y; 
	$to = $youremail; 
	$mailsubject = 'Masage recived from'.$fromsubject.' Contact Page';
	$body = $fromsubject.'
	
	The person that contacted you is '.$title.' '.$fname.' '.$lname.' '.$city.' '.$zip.' '.$text.' '.$text.'
	 Phone Number: '.$phone.'
	 E-mail: '.$mail.'
	 Lift available: '.$text.'
	 How many helpers: '.$text.'
	 Priority: '.$mpriority.'
	 Subject: '.$subject.'
	
	 Message: 
	 '.$message.'
	
	|---------END MESSAGE----------|'; 
echo "Thank you for your feedback. We will contact you shortly if needed.<br/>Go to <a href='http://mymagicremovals.co.uk/'>Home Page</a>"; 
								mail($to, $subject, $body);
 } else { 
echo "You must write a message. </br> Please go to <a href='/contact.php'>Contact Page</a>"; 
}
?> 