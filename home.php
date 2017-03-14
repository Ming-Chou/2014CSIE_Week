<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>2014 資工週 就是怒P</title>
<script src="SlideTrans.js"></script>
<style type="text/css">
body {
	background-image: url(images/back.jpg);
	background-repeat: repeat-y;
	font-weight: bold;
	color: #FC0;
}
.word {
	color: #FC0;
	font-weight: bold;
}
.word {
	color: #FC0;
	font-weight: bold;
}
.word {
	color: #FC0;
	font-weight: bold;
}
.word {
	color: #FC0;
	font-weight: bold;
}
.word {
	color: #FC0;
	font-weight: bold;
}
</style>
</head>
<body>
<div align="center" style="background-color:#000000;margin-top:20px;margin-right:300px;margin-left:300px;margin-bottom:10px;">
<br>
<h1 align=center class="word">2014 資工週 就是怒P</h1>
<a href="date.html">活動日程</a>
<br>
</div>

<marquee align="midden" onMouseOver="this.stop()" onMouseOut="this.start()" height="30" direction="left " scrollamount="3" style="background-color:#008800;">
12/08&nbsp;&nbsp;
修圖大賽&有獎徵答活動開始&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/12 23:59&nbsp;&nbsp;
有獎徵答第一次抽獎&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/15 09:00~17:00&nbsp;&nbsp;
軟體活動擺攤&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/15 13:00~15:00 SEC311教室&nbsp;&nbsp;
語義網之技術現況與發展演講&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/16 09:00~17:00&nbsp;&nbsp;
硬體世界擺攤&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/17 09:00~17:00&nbsp;&nbsp;
網路交流擺攤&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/18 09:00~17:00&nbsp;&nbsp;
資工大四專題展&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/18 13:00&nbsp;&nbsp;
修圖大賽截止投稿&投票&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/18 13:00&nbsp;&nbsp;
有獎徵答第二次抽獎&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/18 13:00&nbsp;&nbsp;
公布修圖大賽入圍&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/18 19:00&nbsp;&nbsp;
資工週晚會&抽獎活動&頒獎&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/19 10:00~15:30&nbsp;&nbsp;
Apple產品展覽&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/19 16:15~18:00&nbsp;&nbsp;
Apple新知分享&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/26 10:00~15:30&nbsp;&nbsp;
Nvidia技術展覽&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
12/26 16:15~18:00&nbsp;&nbsp;
Nvidia新知分享&抽獎活動&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;
</marquee>

<style type="text/css"> 
.container, .container img{display:block; margin:auto; width:600px; height:400px;}
.container img{border:0;vertical-align:middle;}
</style>

<script>
new SlideTrans("idContainer", "idSlider", 3, { Vertical: true }).Run();
</script>
<br />
<style type="text/css">
.container ul, .container li{list-style:none;margin:0;padding:0;}

.num{ position:absolute; right:5px; bottom:5px; font:12px/1.5 tahoma, arial; height:18px;}
.num li{
	float: left;
	color: #d94b01;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 11px;
	cursor: pointer;
	margin-left: 3px;
	border: 1px solid #f47500;
	background-color: #fcf2cf;
}
.num li.on{
	line-height: 18px;
	width: 18px;
	height: 18px;
	font-size: 14px;
	margin-top:-2px;
	background-color: #ff9415;
	font-weight: bold;
	color:#FFF;
}
</style>

<div class="container" id="idContainer2">
	<ul id="idSlider2">
		<li><a href="C_rule.html"> <img src="./images/ad01.jpg"  /> </a></li>
		<li><a href="home.php"> <img src="./images/ad02.jpg"  /> </a></li>
		<li><a href=""> <img src="./images/ad03.jpg"  /> </a></li>
		<li><a href="QA_rule.html"> <img src="./images/ad04.jpg"  /> </a></li>
		<li><a href=""> <img src="./images/ad05.jpg"  /> </a></li>
		<li><a href="C_rule.html"> <img src="./images/ad06.jpg"  /> </a></li>
	</ul>
	<ul class="num" id="idNum">
	</ul>
</div>
<br />
<div align="center">
	<input id="idAuto" type="button" value="Stop" />
	<input id="idPre" type="button" value="&lt;&lt;" />
	<input id="idNext" type="button" value="&gt;&gt;" />
	<select id="idTween">
		<option value="0">Default</option>
		<option value="1">Way 1</option>
		<option value="2">Way 2</option>
	</select>
</div>
<script>

var nums = [], timer, n = $$("idSlider2").getElementsByTagName("li").length,
	st = new SlideTrans("idContainer2", "idSlider2", n, {
		onStart: function(){
			forEach(nums, function(o, i){ o.className = st.Index == i ? "on" : ""; })
		}
	});
for(var i = 1; i <= n; AddNum(i++)){};
function AddNum(i){
	var num = $$("idNum").appendChild(document.createElement("li"));
	num.innerHTML = i--;
	num.onmouseover = function(){
		timer = setTimeout(function(){ num.className = "on"; st.Auto = false; st.Run(i); }, 200);
	}
	num.onmouseout = function(){ clearTimeout(timer); num.className = ""; st.Auto = true; st.Run(); }
	nums[i] = num;
}
st.Run();


$$("idAuto").onclick = function(){
	if(st.Auto){
		st.Auto = false; st.Stop(); this.value = "Play";
	}else{
		st.Auto = true; st.Run(); this.value = "Stop";
	}
}
$$("idNext").onclick = function(){ st.Next(); }
$$("idPre").onclick = function(){ st.Previous(); }
$$("idTween").onchange = function(){
	switch (parseInt(this.value)){
		case 2 :
			st.Tween = Tween.Bounce.easeOut; break;
		case 1 :
			st.Tween = Tween.Back.easeOut; break;
		default :
			st.Tween = Tween.Quart.easeOut;
	}
}

</script>
</div>


<?php
	date_default_timezone_set("Asia/Taipei");
	$deadLine1 = mktime(23,59,0,12,12,2014);
	$deadLine2 = mktime(13,0,0,12,18,2014);
	$now = time();
if($now == $deadLine1 || $now == $deadLine2)
{
	require_once("server.php");
	$sql ="select * from rol";
	mysql_query('set names utf8');
	$sql2 = mysql_query($sql);
	
	mysql_query('set names utf8');
	$res1 = mysql_query("insert into rol(Class,NO,Name,Text) SELECT Class,NO,Name,Text FROM csie.quiz1 ORDER BY RAND() LIMIT 3");
	$res2 = mysql_query("insert into rol(Class,NO,Name,Text) SELECT Class,NO,Name,Text FROM csie.quiz2 ORDER BY RAND() LIMIT 3");
	$res3 = mysql_query("insert into rol(Class,NO,Name,Text) SELECT Class,NO,Name,Text FROM csie.quiz3 ORDER BY RAND() LIMIT 3");
}
?>
</body>
</html>
