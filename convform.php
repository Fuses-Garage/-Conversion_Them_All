<?php
if(isset($_SESSION["units"])){
		echo'</form>';
		echo'<form action="conv.php" method="post">';
		$size=count($_SESSION["units"]);
		echo"<table><tr><hr></hr><hr></hr></tr>";
		for($i=0;$i<$size;$i++){
			echo'<p><tr><td><input type="text" name="',$_SESSION["units"][$i]["name"],'">',"</td><td>",$_SESSION["units"][$i]["name"],"</td></tr></p>";
		}
		echo'<input type="submit" value="換算">';
		echo"</table></form>";
	}
?>