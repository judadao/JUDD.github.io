<?php
        session_start();
		include("connect.php");
		error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE );
        $sql3= "SELECT 獲取金額
            FROM 怪物總覽 natural join 地圖
            where 區域='$_SESSION[levels]'";

        $sql5=" select Money
                from 人物
                where ID='$_SESSION[username]'";
        $result5=mysql_query($sql5);
        $result3=mysql_query($sql3);
        $row3=mysql_fetch_array($result3);
        $row5=mysql_fetch_array($result5);
        $_money=$row5[0]+$row3[0];
        $sql4="update 人物 set Money='$_money' where ID ='$_SESSION[username]'";
        mysql_query($sql4);
        header("location:http://127.0.0.1/game/map.php");
?>