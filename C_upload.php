<html>
<head>
<meta charset="UTF-8">
<title>上傳系統</title>
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
<div align="center"  style="background-color:#000000;margin-top:50px;margin-right:150px;margin-left:150px;margin-bottom:50px;">
<?php
date_default_timezone_set("Asia/Taipei");
$deadLine1 = mktime(13,0,0,12,18,2014);
$now = time();
require_once("server.php");
$sql="select * from ps";
if($now <= $deadLine1){
	if($link){
		if($db){	
			$upload_dir="/tmp/";			
			$Name = $_POST['Name'];
			$StudentID = $_POST['StudentID'];
			$Class = $_POST['Class'];
			$Explanation = $_POST['Explanation'];
			$tmp = $_FILES['pic']['tmp_name'];
			$f2 = $_FILES['pic']['name'];
			$is_exists = false;
			
			//檢查是否有重複參賽
			$sql2 = mysql_query($sql);
			$i=1;
			while($list=mysql_fetch_array($sql2)){
				if($list['Name']==$Name or $list['StudentID']==$StudentID){
					$is_exists = true;
					break;
				}
				$i++;
			}
			
			if($is_exists){
				echo "<br><br><br>上傳失敗：不能重複參加!<br><br><br>";
			}
			else if(empty($Name)){
				echo "<br><br><br>上傳失敗：姓名欄位空白<br>請回上一頁填好資料，再重新上傳<br><br><br>";
			}
			else if(empty($StudentID)){
				echo "<br><br><br>上傳失敗：學號欄位空白<br>請回上一頁填好資料，再重新上傳<br><br><br>";
			}
			else if(empty($Class)){
				echo "<br><br><br>上傳失敗：系級欄位空白<br>請回上一頁填好資料，再重新上傳<br><br><br>";
			}
			else if(empty($Explanation)){
				echo "<br><br><br>上傳失敗：作品說明空白<br>請回上一頁填好資料，再重新上傳<br><br><br>";
			}		
			else if(!($_FILES['pic']['type']=="image/jpeg" or $_FILES['pic']['type']=="image/jpg"
			or $_FILES['pic']['type']=="image/png" or $_FILES['pic']['type']=="image/gif")){
				echo "<br><br><br>上傳失敗：格式必須是jpg , jpeg , png , gif<br>請重新上傳<br><br><br>";
			}
			else if($_FILES['pic']['size'] > 2048000){
				echo "<br><br><br>上傳失敗：圖片大小超過2MB<br><br><br>";
			}	
			else{
				$Route = "./upload/".$f2;
				$Zero = 0;

				if(move_uploaded_file($tmp,$upload_dir.$_FILES["pic"]["name"]))
				{
				   echo "<br><br><br>上傳成功<br><br><br>";
				   $sql = "insert into ps(Name,StudentID,Class,Explanation,Votes,Route) value('".$Name."','".$StudentID."','".$Class."','".$Explanation."','".$Zero."','".$Route."')";
					mysql_query($sql);
				} 
				else {
				   echo "<br><br><br>上傳失敗，請重新上傳<br><br><br>";
				}					
			}
		}
	}
}
else{
	echo "<br><br><br>活動時間已經結束<br><br><br>";
}
?>
</div>
</body>
</html>