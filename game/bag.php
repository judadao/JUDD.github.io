<!DOCTYPE html>
<html >
<head>
<meta charset="utf-8">

	<title></title>
</head>
<body >
<center><!--body的東西一律置中-->

<p style="font-size: 36px;">怪物背包</p>
<?php
    session_start();//啟用session
    include("connect.php");//資料庫連線

    if(is_null($_SESSION['username'])){//判斷使用者是否有登入
      header("location:http://127.0.0.1/game/index.php");//假如沒登入跳回登入畫面
      exit;
  	}
?>


<?php	
  	$user=$_SESSION['username'];
  	$sql="	select 怪物名
			from 怪物背包
			where ID='$user'";//設定搜尋語法
	$result=mysql_query($sql);//開始搜尋
	$row=mysql_num_rows($result);//取得結果筆數
	
	echo "<form method='post' action='map.php'>";
	echo "<table border='1'><tr><th>擁有的怪物</th><th>選擇</th>";
	for ($i=0; $i < $row; $i++) {//用迴圈建出擁有的怪物table
		$data=mysql_fetch_array($result);//取得每一筆資料內容
		echo "<tr><td>$data[0]</td>";
		echo "<td><input type='radio' name='monster' value='$data[0]'></td></tr>";
	}//按下按鈕後變數monster會傳怪獸名出去
	
	echo "</table>";
	echo "<br><center><input type='submit'  value='選擇這怪物' style=';border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:20px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);width:120px;height:30px;'></center>";
	echo "</form>";
?>

    <p style="font-size: 36px;">物品背包</p>

<?php
	$sql="	select 物品,數量,道具說明
			from 道具背包 natural join 道具總覽
			where ID='$user'";//設定搜尋語法
	$result=mysql_query($sql);//開始搜尋
	$row=mysql_num_rows($result);//取得結果筆數
	echo "<table border='1'><tr><th>擁有的物品</th><th>數量</th><th>道具說明</th>";
	for ($i=0; $i < $row; $i++) {//用迴圈建出擁有的物品table
		$data=mysql_fetch_array($result);//取得每一筆資料內容
		echo "<tr><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td></tr>";
	}
?>
    
<form method="post" action="map.php">
	<input type="submit" value="返回"style=";left:1030px;top:710px;z-index:10001;border-top-width:0px;border-bottom-width:0px;border-left-width:0px;border-right-width:0px;border-top-left-radius:3px;border-top-right-radius:3px;border-bottom-right-radius:3px;border-bottom-left-radius:3px;border-color:#dddddd;border-style:solid;background-color:#3498db;color:#FFF;font-size:14px;font-weight:bold;font-style:normal;font-family:Arial;text-align:center;box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-o-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-moz-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);-webkit-box-shadow:0 1px 2px rgba(0, 0, 0, 0.4);background-size:auto;background-repeat:repeat;background-position:center center;padding-top:6px;padding-right:10px;padding-bottom:6px;padding-left:10px;position:absolute;width:120px;height:30px;;"><!--設定返回鍵-->
</form>

</center>
</body>
</html>