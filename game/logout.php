<?php
	session_start();//啟用session

	unset($_SESSION['username']);//將使用者帳號清除
	unset($_SESSION['fightmonstor']);
	header("location:http://127.0.0.1/game/index.php");//清除後頁面跳轉至登入畫面
	exit;
?>