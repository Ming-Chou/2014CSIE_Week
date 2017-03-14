<html>
<head>
<meta charset="utf-8">
<title>票選動態</title>
<style type="text/css">
body {
	background-image: url(images/back.jpg);
	background-repeat: repeat-y;
	font-weight: bold;
	color: #FC0;
}
.word {
	color: #FFF;
	font-weight: bold;
}
.word {
	color: #FFF;
	font-weight: bold;
}
.word {
	color: #FFF;
	font-weight: bold;
}
.word {
	color: #FFF;
	font-weight: bold;
}
.word {
	color: #FFF;
	font-weight: bold;
}
</style>
</head>

<body>
<div align="center"  style="background-color:#000000;margin-top:50px;margin-right:100px;margin-left:100px;margin-bottom:50px;">
<br>
<h2>P出結果</h2>
<?php
require_once("server.php");
$sql="select * from ps";
$result = mysql_query($sql) ;?>

<table align='center' border='1' width='70%' bgcolor="#000000" >
	<tr>
		<td width='10%' align='center' >編號</td>
		<td align='center'>作品</td>
		<td width='10%' align='center' >票數</td>
	</tr>
<?php
  while($row = mysql_fetch_array($result)){
		?>
		<tr>
		<?php
		echo"<td align='center'>".$row['SID']."</td>";
		echo"<td align='center'><img src=".$row['Route']." height='200'></td>";
		echo"<td align='center'>".$row['Votes']."票</td>";
		?>
		</tr>
		<?php
    }
?>
</table>
</div>
</body>

</html>
