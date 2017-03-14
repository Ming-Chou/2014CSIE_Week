<!DOVTYPE html>
<head>
<meta http-equiv="Content-type" content="text/html ; charset=utf-8">
<title>修圖投票</title>
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
<script type="text/javascript">
function check_data()
      {		
        var id = document.myForm.id.value;
        var tab = "ABCDEFGHJKLMNPQRSTUVWXYZIO";
        var A1 = new Array (1,1,1,1,1,1,1,1,1,1,2,2,2,2,2,2,2,2,2,2,3,3,3,3,3,3 );
        var A2 = new Array (0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5,6,7,8,9,0,1,2,3,4,5 );
        var Mx = new Array (9,8,7,6,5,4,3,2,1,1);
				
        //將身份證字號的英文字母轉換為大寫
        id = id.toUpperCase();				
		var i = tab.indexOf(id.charAt(0));
		
        
        if (id.length != 10) //驗證身份證字號是否為 10 碼
        {
          alert("身份證字號共有 10 碼");
          return false;
        }
        else if (i == -1)//驗證身份證字號的第一碼是否為英文字母
        {
          alert("不合法的身份證字號");
          return false;
        }
				
        var sum = A1[i] + A2[i] * 9;
        var v;
        for (i = 1; i < 10; i++) //驗證身份證字號進階規則
        {
          v = parseInt(id.charAt(i));
          if (isNaN(v))
          {
            alert("不合法的身份證字號");							
            return false;		
          }
					
          sum = sum + v * Mx[i];
        }
   			
        if (sum % 10 != 0)
        {
          alert("不合法的身份證字號");
          return false;
        }

        //此部份用來驗證瀏覽者是否有選擇參賽者
        for (var i = 0;i < document.myForm.elements.length; i++)
        {
          var e = document.myForm.elements[i];
          if (e.name == "name" && e.checked == true )
          {
            var found = true;
            break;          
          }
        }
				
        if (found != true)
        {
          alert("您沒有選擇參賽者");
          return false;				
        }
				
        myForm.submit();
      }
</script>
</head>


<body>
<div align="center"  style="background-color:#000000;margin-top:50px;margin-right:100px;margin-left:100px;margin-bottom:50px;">
<br>
<h2>選出最怒</h2>

<?php
require_once("server.php");
$sql ="select * from ps";
$sql2 = mysql_query($sql);?>

<form name="myForm" action="vote.php" method="post" >
<table align='center' border='1' width='80%' bgcolor="#000000" >
	<tr>
		<td width='10%' align='center' >編號</td>
		<td align='center'>作品</td>
		<td width='30%' align='center' >作品說明</td>
		<td width='10%' align='center' >點選欄</td>
	</tr>

	
<?php
  while($row = mysql_fetch_array($sql2)){
		?>
		<tr>
		<td align='center'><?php echo $row['SID']; ?></td>
		<td align='center'><img src=<?php echo $row['Route']?> height='200'></td>
		<td align='center'><?php echo $row['Explanation'] ?></td>
		<td align='center'><input type='radio' name='name' value='<?php echo $row['SID']; ?>'></td>
		</tr>
		<?php
    }
?>
	<tr> 
        <td colspan="3" align="right">請輸入您的身份證字號： 
			<input type="text" name="id" size="10"></td>
    </tr>
</table>

	<p align="center"> 
        <input type="button" value="投票" onClick="check_data()">
        <input type="reset" value="重新設定">
    </p>
</form>
</div>

</body>
