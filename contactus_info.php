<form method="post" action="index.php?s=sendemail">
<!-- DO NOT change ANY of the php sections -->
<?php
$ipi = getenv("REMOTE_ADDR");
$httprefi = getenv ("HTTP_REFERER");
$httpagenti = getenv ("HTTP_USER_AGENT");
?>
<input type="hidden" name="ip" value="<?php echo $ipi ?>" />
<input type="hidden" name="httpref" value="<?php echo $httprefi ?>" />
<input type="hidden" name="httpagent" value="<?php echo $httpagenti ?>" />
<h3>Your Name: </h3><font color="red">*</font>Please Enter Your Full Name (First , Middle , Last).
<br/>
<input type="text" name="visitor" size="35" />
<br/><br/>
<h3>Your Email:</h3><font color="red">*</font>Please Enter Valid Email Address To Reply With No Problems.
<br/>
<input type="text" name="visitormail" size="35" />
<br/><br/>
<h3>Attention:</h3><font color="red">*</font>Please Choose Carefully To Send Your Mail To The Specified Person.
<br/>
<select name="attn" size="1">
<option value=" General Support ">General Support </option>
<option value=" Advertising Support ">Advertising Support </option>
<option value=" Webmaster ">Webmaster </option>
</select>
<br/><br/>
<h3>Mail Message:</h3><font color="red">*</font>Try To Explain As Much As You Can To Understande You And Reply Shortly.
<br/>
<textarea name="notes" rows="8" cols="40"></textarea>
<br/><font color="red">*</font>We Will Try To Reply Within 48 Hours .<br/><br/>
<center><input type="submit" value="Send" style="height: 25px; width: 100px"></center>
<br/><br/>
</form>