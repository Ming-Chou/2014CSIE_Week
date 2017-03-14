<html>
<head>
<meta http-equiv="Content-type" content="text/html ; charset=utf-8">
<title>有獎徵答抽籤結果</title>
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
<div align="center"  style="background-color:#000000;margin-top:50px;margin-right:250px;margin-left:250px;margin-bottom:50px;">
<br>
<h1 align=center>獎到誰家</h1>
<br>
<br>
有答有獎&nbsp;&nbsp;中獎名單
<br>
<br>
<?php
	require_once("server.php");
	$res = mysql_query("select * from rol");
	while($list3=mysql_fetch_array($res))
	{
	?>
		</span></span>
		<p align=center><span class="word"><span class="word"><?php echo $list3['Class']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $list3['NO']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $list3['Name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		echo $list3['Text']."<br>";
	}
?></span></span></p>
<br>
</div>
</body>
</html> 