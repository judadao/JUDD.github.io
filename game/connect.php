<meta http-equiv="content-type" content="text/html"; charset="utf-8"><!--設定編碼-->
<?php
	$link=mysql_connect("127.0.0.1","root","1234");//連接資料庫

		if(!@$link){die("無法連接資料庫伺服器");}//連接失敗後顯示文字

		mysql_query("set names utf8");//設定連線的文字集與校對為UTF8編碼

		if(!@mysql_select_db("aot")){//選擇資料庫
			die("選擇資料庫失敗");//選擇失敗後顯示文字

		}
?>