<?php
include("mysql.php");
if(!isset($_GET['go'])){
	$_GET['go'] = "false";
}
switch ($_GET['go']){
case "true":
$to=$_POST["value2"];
		$from=$_POST["value1"];
		$amount=$_POST["amount1"];
		$value = $db->query("SELECT $to FROM converter WHERE (name LIKE '$from%')");
if($db->num_rows($value)!=""){
	while($fetch = $db->nqfetch($value)){
		$amounts = nl2br($fetch[$to]);
}
}	
$res = $amounts*$amount;
echo '<div align="center"><table><tr><td><h3>result :</h3></td><td><input type="text" name="result" value="'.$res.'" size="10"></td></tr></table><BR>';
echo '<form action="index.php?s=home&go=false"><input type="submit" value="Back To Converter" style="height: 25px; width: 150px"></div>';

break;

case "false" :
$select = $db->query("select * from converter ORDER BY ID DESC");
$result = "";
if($db->num_rows($select)!=""){
	while($fetch = $db->nqfetch($select)){
		$Sid = $fetch['ID'];
		$name = nl2br($fetch['name']);
		$result .= '
			<option name="'.$name.'" value="'.$name.'" >'.$name.'</option>
			';
	}
	if($result!=""){
		echo 'Dear User , Here You can convert between currency values to get information about amount of currency you want .
		      ';
		      echo '<BR><BR><BR><BR><BR><BR>';
		echo '<form action="index.php?s=home&go=true" method="post" enctype="multipart/form-data">
		      ';
		//echo '<table border="1"><tr><td><h3>Amount:</h3></td><td><input type="text" name="amount1" ID="name"></td><tr>';
		echo '<div align="center"><table border="1"><tr><td><h3>Amount:</h3></td><td><input type="text" name="amount1" id="name"></td></tr>';
		echo '<tr><td><h3>From :</td><td><select name="value1" ID="from" size="1">';
       		echo $result;
		echo '</select></h3></td><tr>';
		echo '<tr><td><h3>To :&nbsp;</td><td><select name="value2" ID="to" size="1">';
    echo $result;
		echo '</select></h3></td><tr></table>';
		echo '<BR>&nbsp;<input type="submit" value="convert" style="height: 25px; width: 100px">
         </div></form>';
	}
}
break;
}
?> 