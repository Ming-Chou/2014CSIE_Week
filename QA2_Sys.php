<html>
<head>
<meta charset="utf-8">
<title>問題&回答區</title>
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
<div align="center"  style="background-color:#000000;margin-top:50px;margin-right:150px;margin-left:150px;margin-bottom:50px;">
<h1 align=center>我要回答 2</h1>
<div class=out1 style='text-align:center'><img src="./images/Q2.jpg" width="550px"></div>

<p align=center>
其他回答在完成活動後顯示<br>
請勿重複作答，違者伺服器一律忽略
</p>

<div style="text-align:center;">
<form align="center" method="post">
班級：<input type="text" name="class"  size="10">
學號：<input type="text" name="NO"  size="10">
姓名：<input type="text" name="name"  size="10"><br>
你的回答<br>
<textarea cols=90 rows=6 name="answer"></textarea> <br>
<input type="submit" value="輸入">
</form>
</div>

<?php
if(isset($_POST['name']))
{
$name = $_POST['name'];
$answer = $_POST['answer'];
$class =$_POST['class'];
$NO =$_POST['NO'];
$deadLine1 = mktime(13,0,0,12,18,2014);
$now = time();
	if($now <= $deadLine1){
		echo "<br><br><br>活動時間已經結束<br><br><br>";
		require_once("server.php");
	}
	else if(empty($name)){
		echo "<br><br><br>姓名欄位空白<br><br><br>";
	}	
	else if(empty($NO) || $NO < 9999999 ){
		echo "<br><br><br>學號欄位空白<br><br><br>";
	}
	else if(empty($class)){
		echo "<br><br><br>系級欄位空白<br><br><br>";
	}
	else if(empty($answer)){
		echo "<br><br><br>沒作答怎麼能交卷呢?!<br><br><br>";
	}
	else
	{
		require_once("server.php");
		$sql = "insert into quiz2(Class,NO,Name,Text) values('" .$class . "','".$NO . "','". $name . "','".$answer . "')";
		mysql_query($sql);
	}
}

$sql ="select * from quiz2";
$sql2 = mysql_query($sql);
while($list3=mysql_fetch_array($sql2))
{
	?><p align=center><span class="word"><span class="word"><?php echo $list3['Class']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $list3['NO']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $list3['Name']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $list3['Text']."<br>";
}
?></span></span></p>
<br>
</div>
</body>
</html> 