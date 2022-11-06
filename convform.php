<?php
if(isset($_SESSION["units"])){
		echo'<form action="conv.php" method="post">';//移行先はconv.php
		$size=count($_SESSION["units"]);
		echo"<table><tr><hr></hr><hr></hr></tr>";//<table>で形成
		for($i=0;$i<$size;$i++){//すべての単位に対して
			echo'<p><tr><td><input type="text" name="',htmlspecialchars($_SESSION["units"][$i]["name"]),'">',"</td><td>",htmlspecialchars($_SESSION["units"][$i]["name"]),"</td></tr></p>";//テキストフォームを生成する
		}
		echo'<input type="submit" value="換算">';
		echo"</table></form>";
	}
?>