<?php
	session_start();//啟用session
	include("connect.php");//資料庫連線

	$item=$_POST['monster'];//給定物件名稱

	$sql="select 購買金額
			from `怪物總覽`
			where 怪物名='$item'";//設定搜尋語法
	$result=mysql_query($sql);//開始搜尋
	$imoney=mysql_fetch_array($result);//取得搜尋後的值
	//$imoney[0]為怪物價格

	$user=$_SESSION['username'];//給定帳號名稱
	$sql="select Money
			from `人物`
			where ID='$user'";//設定搜尋語法
	$result=mysql_query($sql);//開始搜尋
	$mmoney=mysql_fetch_array($result);//取得搜尋後的值
	//$mmoney[0]為我擁有的錢

	//看目前金額夠不夠買
	if($mmoney[0]<$imoney[0]){//假如不夠買
		echo "<script>alert('抱歉您的金額不足無法購買此怪獸');";//警告視窗
		echo "location.href = 'http://127.0.0.1/game/mstore1.php';</script>";//失敗後頁面跳回至商店1
	}
	else{//假如夠買
		$sql="	select * 
				from `怪物背包`
				where 怪物名='$item'";//設定搜尋語法
		$result=mysql_query($sql);//開始搜尋，看是否已經有此商品
		$row=@mysql_fetch_row($result);//判斷搜尋結果是否為空白

		if($row){//假如已經有此商品
			echo "<script>alert('抱歉您已擁有此怪獸，無法再進行購買');";//警告視窗
			echo "location.href = 'http://127.0.0.1/game/mstore1.php';</script>";//失敗後頁面跳回至商店1
		}
		else{//假如沒有
			mysql_query("insert `怪物背包` (ID,怪物名)
						values('$user','$item')");//新增怪物欄位
			mysql_query("update `人物` 
		 	 			set Money=Money-'$imoney[0]'
			 			where ID='$user'");//使用者金錢-怪物價格
		
		echo "<script>alert('恭喜您已成功購買此怪物');";//顯示購買成功視窗
		echo "location.href = 'http://127.0.0.1/game/mstore1.php';</script>";//買完後頁面跳回至商店1
		}
	}

?>