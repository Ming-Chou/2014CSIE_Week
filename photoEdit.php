<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html ; charset=utf-8">
	<title>修圖比賽結果</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
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

<?php
	date_default_timezone_set("Asia/Taipei");
	$deadLine = mktime(13,0,0,12,18,2014);
	$now = time();
	if($now > $deadLine){
		echo '<frameset rows="450" border=0>
			<frame noresize name=mains src="photoMain.php" >
		</frameset><noframes></noframes>';
	}else{
		echo '<table style="width: 1000px; margin-top: 47px; margin-bottom: 20px;">
	<tr><td class="圖表用標題粗體" style="background-color:#55FF57; text-align: center; height: 35px;font-size:x-large">投票進行中，結果尚未開放...</td></tr>
	</table>';
	}
?>

</html>
