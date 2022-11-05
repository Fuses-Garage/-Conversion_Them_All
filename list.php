<?php
	echo'<hr>';
	$size=count($_SESSION["units"]);
	echo '<font size=5><p><center>現在の単位一覧</center></p></font>';
	echo"<table><tr><hr>名前</hr><hr></hr></tr>";
	for($i=0;$i<$size;$i++){
		if($i!=0){
			$b="1".$_SESSION["units"][$i]["name"]."=".$_SESSION["units"][$i]["bef"].$_SESSION["units"][$i-1]["name"];
		}else{
			$b="";
		}
		echo"<tr><td>",$_SESSION["units"][$i]["name"],"</td><td>",$b,"</td></tr>";
	}
	echo"</table>";
	echo'<hr>';
?>