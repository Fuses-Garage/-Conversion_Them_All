<?php session_start();?>
<html>
	  

  <head>
    <title>なんでも換算システム</title>
	<meta charset="UTF-8">
  </head>
  <body>
	
    <?php 
echo($emp);
	if(empty($_SESSION["units"])){//追加された単位は最初の単位？
		$emp=true;
	}else{
		$emp=empty($_SESSION["units"]);
	}
	$rateisvalid=(!empty($_REQUEST["newbef"])&&preg_match("/^[0-9]+(\.[0-9]*)?$/",$_REQUEST["newbef"]));//レートに整数が入ってる？
	if(!empty($_REQUEST["newname"])&&($rateisvalid||$emp)){//名前・レートともに有効なら
		if(!isset($_SESSION["units"])) $_SESSION["units"]=[];//nullなら配列を追加
		array_push($_SESSION["units"], ["name"=>htmlspecialchars($_REQUEST["newname"]),"bef"=>$_REQUEST["newbef"]]);//新しい要素を追加
	}else{
		echo'有効な値を入力してください。';//エラー
	}
	echo '<font size=7><p><center>なんでも換算システム</center></p></font>';
	echo '様々な単位を自身で入力することで、様々な単位の換算を可能にするWebシステムです。';
	require("./component/list.php");//リスト表示
	require("component/addform.php");//追加フォーム	
	echo'<form action="reset.php" method=post>';
	echo'<input type="submit" value="リセット">';
	echo'</form>';
	require("component/convform.php");
	?> 
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
