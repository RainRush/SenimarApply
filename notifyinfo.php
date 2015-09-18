<?php session_start(); ?>	<!-- Version 1.0.0, by H.Y.Hu -->
<!DOCTYPE html>
<html lang="en">
  <head><script type="text/javascript" src="/44028BD508DB4F66B4F61BBB0E6DF1D8/0EBEC49B-DE2E-6840-A4E0-82352377F2C6/main.js" charset="UTF-8"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>報名成功</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
  <body>
  	<?php
  		if ($_SESSION['Phone'] != NULL){
  			$conn = mysql_connect("localhost", "dan3388d", "dan3388d@ic@sql");
			mysql_select_db("dan3388d") or die("Unable to connect to the server. Please try again later.");
			mysql_query(" set names utf8 ");
			mysql_query(" SET CHARACTER SET  'UTF8 '; ");
			mysql_query('SET CHARACTER_SET_CLIENT=UTF8; ');
			mysql_query('SET CHARACTER_SET_RESULTS=UTF8; ');
			$Phone1 = $_SESSION['Phone'];
			$Phone = $_GET['Phone'];
			if ($Phone1 != $Phone)
				echo '<meta http-equiv="REFRESH" content="0 ; url=checkqualify.php">';
  		}
  	?>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">主頁</a>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" align="center">
			<br><br><br><br><br><br>
			<h1 class="text-center">
				親愛的<?php
				$sql = mysql_query("SELECT * FROM SIGNUP WHERE Phone = '$Phone'");
				$row = mysql_fetch_row($sql);
				echo $row[0];
				?>
				先生/小姐您好：
			</h1>
			<h2 class="text-center" style="color:red">
				恭喜您報名成功
			</h2>
			<br>
			<h3>以下為研討會資訊：<h3>
			<p>地點於：...</p><!--跟老師拿資料-->
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>