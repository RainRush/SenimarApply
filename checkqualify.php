<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head><script type="text/javascript" src="/44028BD508DB4F66B4F61BBB0E6DF1D8/0EBEC49B-DE2E-6840-A4E0-82352377F2C6/main.js" charset="UTF-8"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>資格確認</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	
  </head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
				<div class="navbar-header">
					 <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>--> <a class="navbar-brand" href="./signup.php">回到報名頁</a>
				</div>
				
				
				
			</nav>
			<nav class="navbar navbar-default navbar-default navbar-fixed-bottom" role="navigation">
				<div class="navbar-header">
					 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				</div>
			</nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column" align="center">
			<form class="form-horizontal" role="form" method="post">
				<p style="color:white">_<br>_<br>_<br>_<br>_<br>_<br>_<br>_<br>_<br>_<br>_</p>
				<div class="form-group">
					 <label for="inputEmail3" class="col-sm-4 control-label">電話</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="inputEmail3" name="Phone">
					</div>
				</div>
					<?php
  						$conn = mysql_connect("localhost", "dan3388d", "dan3388d@ic@sql");
						mysql_select_db("dan3388d") or die("Unable to connect to the server. Please try again later.");
						mysql_query(" set names 'utf8' ");
						mysql_query(" SET CHARACTER SET  'UTF8 '; ");
						mysql_query('SET CHARACTER_SET_CLIENT=UTF8; ');
						mysql_query('SET CHARACTER_SET_RESULTS=UTF8; ');
						if (isset($_POST['login'])){
							$Phone = "$_POST[Phone]";
							$sql = "SELECT * FROM SIGNUP WHERE Phone = '$Phone'";
							$result = mysql_query($sql);
							$row = mysql_fetch_row($result);
							if($Phone != null && $row[0]!= null){
								$_SESSION['Phone'] = $Phone;
								if($row[5] == '0')
									echo '<p style="color:red">本號碼尚未完成審核</p>';
								else if($row[5] == '1')
									echo '<meta http-equiv=REFRESH CONTENT=0;url=resultpage.php?Phone='.$row[3].'>';
								else if($row[5] == '2')
									echo '<meta http-equiv=REFRESH CONTENT=0;url=payment.php?Phone='.$row[3].'>';
								else if($row[5] == '3')
									echo '<meta http-equiv=REFRESH CONTENT=0;url=notifyinfo.php?Phone='.$row[3].'>';
								else if($row[5] == '4')
									echo '<p style="color:red">收據已上傳成功，正在確認收款</p>';
							}
							else
								echo '<p style="color:red">電話</p>';
  						}
 					?>
				<div class="form-group">
					<div class="col-sm-offset-0 col-sm-18">
						 <button type="submit" class="btn btn-success" name="login">查詢結果</button>
					</div>
				</div>
			</form> 
		</div>
		<div class="col-md-2 column">
			
		</div>
	</div>
</div>
</body>
</html>