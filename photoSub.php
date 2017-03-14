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
	<?php date_default_timezone_set("Asia/Taipei");?>
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
<?php
	require_once("server.php");
?>
<table style="width: 1000px">
	<tr><td>
	<div id="ishome_CoverFlowAd" style="width:990px;height:260px"><!-- ishome_CoverFlowAd start --> 	      	       			      	
	<div id="TopAD" style="display:none"><div class="coverflowAd">
	<ul><?php 
		$res = mysql_query("SELECT * FROM  `ps` ORDER BY  `ps`.`Votes` DESC LIMIT 5 , 5");
		$i = 6;
		while($row = mysql_fetch_assoc($res)){
			?><li><a><img style="border-width:0px;cursor:pointer" class="vtip" src="<?php echo $row['Route']; ?>"  title="<?php echo "第".$i++."位 ".$row['Name']; ?>" alt="<?php echo $row['Explanation']; ?>" /></a></li><?php
		}
		mysql_free_result($res);
		mysql_close();
		echo "\n	";
	?></ul></div>
	</div></div><!-- ishome_CoverFlowAd end -->
	</td></tr>
</table>

</body>
</html>
