<?php
	echo'<form action="/page/addunit.php" method="post">';
	echo'単位名:<input type="text" name="newname"><br>';//新しい単位の名前
	if(isset($_SESSION["units"])){//二個目以降の単位なら
		echo '1新単位=<input type="text" name="newbef">',$_SESSION["units"][$size-1]["name"],"<br>";
		//レートの入力欄を追加
	}
	echo'<input type="submit" value="追加">';//submit
	echo'</form>';
?>