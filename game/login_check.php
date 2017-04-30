<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>test programe</title>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8">
	<style type="text/css">
	body {text-align: center;}
	</style>
</head>
<body>
	
	<?php
		session_start();//啟用session
		include("connect.php");//資料庫連線

		$user=$_POST['user'];//指定帳號
		$pass=$_POST['pass'];//指定密碼

		$sql="	select * 
				from 人物
				where ID='$user' and Password='$pass'";//設定搜尋語法

		$result=mysql_query($sql);//開始搜尋
		$row=@mysql_fetch_row($result);//判斷搜尋結果是否為空白
		if($row){
			$_SESSION['username'] = $user;//設定session為使用者帳號，方便之後使用者驗證
			header("location:http://127.0.0.1/game/map.php");//成功後頁面跳轉
			exit;
		}
		else{
			echo "<script>alert('抱歉查無此帳密');";//警告視窗
			echo "location.href = 'http://127.0.0.1/game/index.php';</script>";//失敗後頁面跳回至登入畫面
			}
		
		mysql_close($link);//關閉資料庫連線
		

	?>
	
</body>
</html>