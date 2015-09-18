<?php session_start(); ?>	<!-- Version 1.0.0, by H.Y.Hu -->
<!DOCTYPE html>
<html lang="en">
  <head><script type="text/javascript" src="/44028BD508DB4F66B4F61BBB0E6DF1D8/0EBEC49B-DE2E-6840-A4E0-82352377F2C6/main.js" charset="UTF-8"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>給審核結果</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
  <body>
    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default navbar-fixed-top navbar-inverse" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="./51024admin.php">回主頁</a>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" align="center">
		<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
			<p style="color:white">_<br>_<br>_<br>_<br>_<br>_</p>
			<h3>審核</h3>
			<select name="Check">
				<option></option>
				<option value="1">身分不符合</option>
				<option value="2">符合但還須繳費</option>
				<option value="3">符合且不須繳費</option>
			</select>
			<p style="color:white">_<br>_</p>
			<button type="submit" class="btn btn-default" name="assign">提交</button>
		</form>
		<?php
			$conn = mysql_connect("localhost", "dan3388d", "dan3388d@ic@sql");
			mysql_select_db("dan3388d") or die("Unable to connect to the server. Please try again later.");
			mysql_query(" set names utf8 ");
			mysql_query(" SET CHARACTER SET  'UTF8 '; ");
			mysql_query('SET CHARACTER_SET_CLIENT=UTF8; ');
			mysql_query('SET CHARACTER_SET_RESULTS=UTF8; ');
			if(isset($_POST['assign'])){
				$Phone = $_GET['Phone'];
				$Check = $_POST['Check'];
				if($Check==1){
					mysql_query("UPDATE SIGNUP SET Result = '1' WHERE Phone = '$Phone'");
				}
				else if($Check==2){
					mysql_query("UPDATE SIGNUP SET Result = '2' WHERE Phone = '$Phone'");
				}
				else if($Check==3){
					mysql_query("UPDATE SIGNUP SET Result = '3' WHERE Phone = '$Phone'");
				}
				echo '<meta http-equiv="refresh" content="0 ; url=./51024admin.php">';
			}
		?>
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