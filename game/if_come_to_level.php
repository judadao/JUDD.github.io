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
		session_start();//±Ò¥Îsession
		include("connect.php");
		error_reporting(E_ALL & ~E_WARNING & ~E_NOTICE );
		$sql="	select 區域
				from 人物
				where ID='$_SESSION[username]'";
		$result=mysql_query($sql)or die(mysql_error());
		$row=mysql_fetch_array($result);
		$temp = $_POST['level'];
		if(is_numeric($temp))
		    $_SESSION['levels'] = $temp;
		else
		{
			if($temp=='不死鳥．鳳凰')
				$_SESSION['levels'] = 25;
			if($temp=='天靈．帝斯寇')
				$_SESSION['levels'] = 22;
			else if($temp=='吸血鬼．派爾')
				$_SESSION['levels'] = 23;
			else if($temp=='山靈．納塔爾')
				$_SESSION['levels'] = 24;
			else if($temp=='終曲．ＹＰ')
				$_SESSION['levels'] = 26;
		}
		if(isset($_SESSION['fightmonstor']))
		{
			if($_SESSION['levels']==26 && $row[0]==26)
			{
				    echo "<script>alert('恭喜終於挑戰到YP大魔王');";
					echo "location.href = 'http://127.0.0.1/game/fight.php';</script>";
					exit;
			}
			else if($_SESSION['levels']==26 && $_SESSION['levels']>20 && $row[0]>20 && $row[0]<26)
			{
				    echo "<script>alert('請先打完YP守護神才可挑戰YP');";
					echo "location.href = 'http://127.0.0.1/game/yp_map.php';</script>";
					exit;

			}
			else if($_SESSION['levels']<26 && $_SESSION['levels']>20 && $row[0]>20 && $row[0]<26)
			{
				    echo "<script>alert('我是YP守護神');";
					echo "location.href = 'http://127.0.0.1/game/fight.php';</script>";
					exit;
			}
			else if($_SESSION['levels']>$row[0])
			{
					echo "<script>alert('請先打完第'+$row[0]+'關才能繼續闖關歐');";
					echo "location.href = 'http://127.0.0.1/game/map.php';</script>";
					exit;
			}
			else
				{
					echo "<script>location.href = 'http://127.0.0.1/game/fight.php';</script>";
					exit;
			    }
			    exit;
		}
		else
			{echo "<script>alert('請先從怪物背包中選擇戰鬥怪獸');";
			echo "location.href = 'http://127.0.0.1/game/map.php';</script>";
			exit;}

?>
</body>
</html>