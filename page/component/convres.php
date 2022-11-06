<?php
	if(isset($_SESSION["units"])){
		echo'<hr>';//横棒で区切る
		$size=count($_SESSION["units"]);//登録されている単位の数を取得
		echo '<font size=5><p><center>換算結果</center></p></font>';
		echo"<table><tr><hr>名前</hr><hr></hr></tr>";
		$rate=1;//現在のレート
		$summinunit=0;//最小単位換算の合計
		for($i=0;$i<$size;$i++){//すべての単位について
			if(preg_match("/^[0-9]+$/",$_SESSION["units"][$i]["bef"]))$rate*=$_SESSION["units"][$i]["bef"];
			if(preg_match("/^[0-9]+$/",$_REQUEST[$_SESSION["units"][$i]["name"]]))$summinunit+=$_REQUEST[$_SESSION["units"][$i]["name"]]*$rate;
			
		}
		$rate=1;
		for($i=0;$i<$size;$i++){//すべての単位について
			if(preg_match("/^[0-9]+$/",$_SESSION["units"][$i]["bef"]))$rate*=$_SESSION["units"][$i]["bef"];
			echo"<tr><td>",htmlspecialchars($_SESSION["units"][$i]["name"]),"換算で","</td><td>",$summinunit/$rate,htmlspecialchars($_SESSION["units"][$i]["name"]),"</td></tr>";
		}
		echo"</table>";
		echo'<hr>';//横棒で区切る
	}
?>