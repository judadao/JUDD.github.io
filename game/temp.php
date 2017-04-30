<?php
	session_start();
    include("connect.php");
		 $sql2= "SELECT 物品,數量
            FROM 道具背包
            where ID='$_SESSION[username]' and 物品='$_GET[name]'";
    $result2=mysql_query($sql2);
    $row2=mysql_fetch_array($result2);
    if($row2[1]>1)
    {
    	$tmp=$row2[1]-1;
    	$sql="update 道具背包 set 數量='$tmp' where ID='$_SESSION[username]' and 物品='$_GET[name]'";
    }
    else
    {
    	$sql="delete 
    		  from aot .道具背包 
    		  WHERE ID='$_SESSION[username]' and 物品='$_GET[name]'";
    }
    $result=mysql_query($sql) or (mysql_error());
    $_SESSION['usetoolname']=$_GET['name'];
    $_SESSION['detail']=$_GET['detail'];
    $_SESSION['life1']=$_GET['life1'];
    $_SESSION['life2']=$_GET['life2'];
	header("location:http://127.0.0.1/game/fight.php");
?>