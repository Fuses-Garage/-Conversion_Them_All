<?php session_start();?>
<html>
	  

  <head>
    <title>なんでも換算システム</title>
	<meta charset="UTF-8">
  </head>
  <body>
	
    <?php 
echo($emp);
	if(empty($_SESSION["units"])){
		$emp=true;
	}else{
		$emp=empty($_SESSION["units"]);
	}
	$rateisvalid=(!empty($_REQUEST["newbef"])&&preg_match("/^[0-9]+$/",$_REQUEST["newbef"]));
	if(!empty($_REQUEST["newname"])&&($rateisvalid||$emp)){
		if(!isset($_SESSION["units"])) $_SESSION["units"]=[];
		array_push($_SESSION["units"], ["name"=>htmlspecialchars($_REQUEST["newname"]),"bef"=>$_REQUEST["newbef"]]);
	}else{
		echo'有効な値を入力してください。';
	}
	echo '<font size=7><p><center>なんでも換算システム</center></p></font>';
	echo '様々な単位を自身で入力することで、様々な単位の換算を可能にするWebシステムです。';
	if(isset($_SESSION["units"])){
		require("list.php");//リスト表示
		echo'<form action="addunit.php" method="post">';
		echo'単位名:<input type="text" name="newname"><br>';
		echo '1新単位=<input type="text" name="newbef">',htmlspecialchars($_SESSION["units"][$size-1]["name"]),"<br>";
	}else{
		$_SESSION["units"];
		echo'<form action="addunit.php" method="post">';
		echo'単位名:<input type="text" name="newname">';

	}
	echo'<input type="submit" value="追加">';
	echo'</form>';	
	echo'<form action="reset.php" method=post>';
	echo'<input type="submit" value="リセット">';
	echo'</form>';
	require("convform.php");
	?> 
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
