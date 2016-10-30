<?php
class OnlineBank{
	function get_file($fName){
	$mainArr = array('home','contactus','aboutus','sendemail','admin','login','banks','bank_info','atms','atm_info','converter','sitemap');
		if(!in_array($fName,$mainArr)){
			$fName = 'home';
		}
		include("header".".php");
		include($fName.".php");
		include("footer.php");
	}
}
if(!isset($_GET['s'])){
	$_GET['s'] = "home";
}
$Onlinebank = new OnlineBank;
$Onlinebank->get_file($_GET['s']);
?>