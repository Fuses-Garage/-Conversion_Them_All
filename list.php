<?php
	echo'<hr>';//横棒で区切る
	$size=count($_SESSION["units"]);//登録されている単位の数を取得
	echo '<font size=5><p><center>現在の単位一覧</center></p></font>';
	echo"<table><tr><hr>名前</hr><hr></hr></tr>";
	for($i=0;$i<$size;$i++){//すべての単位について
		if($i!=0){//1つ目でなければ
			$b="1".$_SESSION["units"][$i]["name"]."=".$_SESSION["units"][$i]["bef"].$_SESSION["units"][$i-1]["name"];//前の単位のレートとまとめて記述
		}else{
			$b="";
		}
		echo"<tr><td>",$_SESSION["units"][$i]["name"],"</td><td>",$b,"</td></tr>";
	}
	echo"</table>";
	echo'<hr>';//横棒で区切る
?>