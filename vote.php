<?php
date_default_timezone_set("Asia/Taipei");
$deadLine1 = mktime(13,0,0,12,18,2014);
$now = time();
if($now <= $deadLine1)
{
	require_once("server.php");
  $sql="select * from ps";
  $result = mysql_query($sql) ;
  
  header("Content-type: text/html; charset=utf-8");
  
  //取得表單資料
  $id = strtoupper($_POST["id"]);
  $name = $_POST["name"];
  
  //取得IP位址
  $ip=$_SERVER['REMOTE_ADDR'];
  
  //建立cookie
  setcookie("vote", "true", time()+3600);

  //建立資料連接
  //$link = create_connection();
			
  //取得符合IP欄位的資料
  $sql_ip = "SELECT * FROM ipp Where ip = '$ip'";
  $result_ip = mysql_query($sql_ip);
  
  //取得符合ID欄位的資料
  $sql_id = "SELECT * FROM ipp Where id = '$id'";
  $result_id = mysql_query($sql_id);

  //如果身份證字號、IP位址或cookie已存在
  if (mysql_num_rows($result_ip)!=0 || mysql_num_rows($result_id)!= 0 || htmlspecialchars($_COOKIE["vote"]==true))
  {
    //釋放 $result 佔用的記憶體
    mysql_free_result($result_ip);
	mysql_free_result($result_id);
		
    //顯示已投票訊息
    echo "<script type='text/javascript'>";
    echo "alert('您已經投過票囉！');";
    echo "history.back();";
    echo "</script>";
    exit();
  }
	
  //如果都不存在
  else
  {
    //釋放 $result 佔用的記憶體	
    mysql_free_result($result_ip);
	mysql_free_result($result_id);
	
    // 執行 INSERT INTO 陳述式，將此瀏覽者的身份證字號與IP位址加
    // 入 id_number 資料表，表示此身份證字號與IP位址已投票
    $sql = "INSERT INTO ipp (id, ip, na) VALUES ('$id', '$ip', '$name')";
    $result = mysql_query($sql);
				
    //使用 UPDATE 陳述式將票數 + 1
    $sql = "UPDATE ps SET Votes = Votes + 1 WHERE SID = '$name'";
    $result = mysql_query($sql);
  }
}
else{
	echo "<br><br><br>投票時間已經結束<br><br><br>";
}

/*
else
{
  //顯示截止投票訊息
  echo "<script type='text/javascript'>";
  echo "alert('已截止投票囉！');";
  echo "window.open('home.php','_self')";
  echo "</script>";
  exit();
}	*/
  //關閉資料連接	
  //mysql_close($link);

  //將使用者導向 result.php 網頁
  header("location:C_res.php");
?>
