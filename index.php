<?php session_start();?>
<html>
	  

  <head>
    <title>なんでも換算システム</title>
	<meta charset="UTF-8">
  </head>
  <body>
    <?php 
	echo '<font size=7><p><center>なんでも換算システム</center></p></font>';
	echo '様々な単位を自身で入力することで、様々な単位の換算を可能にするWebシステムです。';
	require("./page/component/list.php");//リスト表示
	require("./page/component/addform.php");//追加フォーム
	echo'<form action="./page/reset.php" method=post>';
	echo'<input type="submit" value="リセット">';
	require("./page/component/convform.php");
	?>
    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>
