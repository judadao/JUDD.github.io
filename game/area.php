<?php
	    session_start();
		include("connect.php");
		error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE );
		$sql="	select 區域,Money
				from 人物
				where ID='$_SESSION[username]'";
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$_SESSION['area']=$row[0]+1;
		$sql3= "SELECT 獲取金額
               FROM 怪物總覽 natural join 地圖
               where 區域='$_SESSION[levels]'";
		$result3=mysql_query($sql3);
		$row3=mysql_fetch_array($result3);
		$_money=$row[1]+$row3[0];
		$sql2="update 人物 set 區域='$_SESSION[area]' where ID ='$_SESSION[username]'";
		$sql4="update 人物 set Money='$_money' where ID ='$_SESSION[username]'";
		unset($_SESSION['area']);
		mysql_query($sql2);
		mysql_query($sql4);
		echo $_money;
		header("location:http://127.0.0.1/game/map.php");
?>