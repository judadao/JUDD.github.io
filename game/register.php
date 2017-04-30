<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<?php
		session_start();//啟用session
		include("connect.php");//資料庫連線

		$user=$_POST['user'];//指定帳號
		$pass=$_POST['pass'];//指定密碼

		$sql="	select * 
				from 人物
				where ID='$user'";//設定搜尋語法

		$result=mysql_query($sql);//開始搜尋
		$row=@mysql_fetch_row($result);//判斷搜尋結果是否為空白
		if($row){
			echo "<script>alert('抱歉此帳號已登記過');";//警告視窗
			echo "location.href = 'http://127.0.0.1/game/index.php';</script>";//失敗後頁面跳回至登入畫面
		}
		else{
			mysql_query("insert `人物` (ID,Password,Money,區域)
								values('$user','$pass', 0 , 1 )");//註冊後設定帳號初始值

			mysql_query("insert `怪物背包` (ID,怪物名)
								values('$user','青蟒．史奈克')");//給一隻初始怪物

			$_SESSION['username'] = $user;//設定session為使用者帳號，方便之後使用者驗證
			header("location:http://127.0.0.1/game/map.php");//頁面跳轉至地圖
			exit;
			}
		
		mysql_close($link);//關閉資料庫連線
		

	?>
</body>
</html>