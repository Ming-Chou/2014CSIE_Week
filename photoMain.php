<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html ; charset=utf-8">
	<title>Test Page</title>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.pngFix.js"></script>
	<script type="text/javascript" src="ishome.js"></script>
	<script type="text/javascript" src="Default.js"></script>
	<link rel="stylesheet" type="text/css" href="coverflowAd.css"  />
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
<body>

<table style="width: 1000px">
	<br>
	<tr><td>
	<table style="width: 1000px; margin-top: 47px; margin-bottom: 20px;">
	<tr><td class="圖表用標題粗體" style="background-color:#55FF57; text-align: center; height: 35px;font-size:x-large">神P入圍</td></tr>
	</table>
	<br><br><br>
	<div id="ishome_CoverFlowAd" style="width:990px;height:260px"><!-- ishome_CoverFlowAd start --> 	      	       			      	
	<div id="TopAD" style="display:none"><div class="coverflowAd">
	<ul><?php
		require_once("server.php");
		$res = mysql_query("SELECT * FROM  `ps` ORDER BY  `ps`.`Votes` DESC LIMIT 0 , 8");
		$i = 1;
		while($row = mysql_fetch_assoc($res)){
			?><li><a><img style="border-width:0px;cursor:pointer" class="vtip" src="<?php echo $row['Route']; ?>" title="<?php echo "第".$i++."名	".$row['Name']; ?>" alt="<?php echo $row['Explanation']; ?>" /></a></li><?php
		}		
		mysql_free_result($res);
		mysql_close();
	?></ul></div>
	</div></div><!-- ishome_CoverFlowAd end -->
	</td></tr>
</table>

</body>
</html>
