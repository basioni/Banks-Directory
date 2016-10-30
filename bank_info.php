<?php
include("mysql.php");
if(isset($_GET['ind'])){
$bname = $_GET['ind'];
}
if(!isset($_GET['ind'])){
$bname = "NSGB";
}
$select = $db->query("SELECT * FROM banks WHERE (bname LIKE '$bname%')");
 $result = "";
if($db->num_rows($select)!=""){
	while($fetch = $db->nqfetch($select)){
		$Sid = $fetch['ID'];
		$name = nl2br($fetch['bname']);
		$phone = nl2br($fetch['phone']);
		$location = nl2br($fetch['address']);
		$result .= '
			<tr>
				<td>
				Bank Name :
				<b>'.$name.'</b><BR>
				<b>Phone :</b>
				'.$phone.'<br>
				<b>Location</b>
				'.$location.'<br>
        </td
			</tr>
		';
	}
}
	if($result!=""){
		echo '<table border="1" width="250" align="center">';
		echo $result;
		echo '</table>';
	}
?>