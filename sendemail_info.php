<!-- Reminder: Add the link for the 'next page' (at the bottom) --> 
<!-- Reminder: Change 'YourEmail' to Your real email --> 
<?php
$ip = $_POST['ip']; 
$httpref = $_POST['httpref']; 
$httpagent = $_POST['httpagent']; 
$visitor = $_POST['visitor']; 
$visitormail = $_POST['visitormail']; 
$notes = $_POST['notes'];
$attn = $_POST['attn'];
//if (eregi('http:', $notes)) {
//die ("Do NOT try that! ! ");
//}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,"."))) 
{
echo "<h2>Use Back Button - And Please Enter valid E-mail</h2>\n"; 
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
echo'<center><a href="index.php?s=contactus"><input type="submit" value="Back" style="height: 35px; width: 100px"></a></center>';
die ("");
}
if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back Button - And fill in all fields</h2>\n";
echo'<center><a href="index.php?s=contactus"><input type="submit" value="Back" style="height: 35px; width: 100px"></a></center>';
die (""); 
}
$todayis = date("l, F j, Y, g:i a") ;
$attn = $attn ; 
$subject = $attn; 
$notes = stripcslashes($notes); 
$message = " $todayis [EST] \n
Attention: $attn \n
Message: $notes \n 
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";
$from = "From: $visitormail\r\n";
mail("hassan_eagles@hotmail.com", $subject, $message, $from);
?>
<p align="center">
Date: <?php echo $todayis ?> 
<br />
Thank You : <?php echo $visitor ?> 
<br />
Your Email: <?php echo $visitormail ?> 
<br />
Attention: <?php echo $attn ?>
<br /> 
Message:<br /> 
<?php $notesout = str_replace("\r", "<br/>", $notes); 
echo $notesout; ?> 
<br />
<?php echo $ip ?> 
<br /><br />
<a href="index.php?s=contactus"><input type="submit" value="Back" style="height: 35px; width: 100px"></a> 
</p>