<!DOCTYPE html>
<html lang="en">
  <head><script type="text/javascript" src="/44028BD508DB4F66B4F61BBB0E6DF1D8/0D227E70-DCB0-EA4B-826B-40D0634A0024/main.js" charset="UTF-8"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>報名</title>

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
					 <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>--> <a class="navbar-brand" href="#">報名系統</a>
				</div>
			</nav>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-2 column">
		</div>
		<div class="col-md-8 column" align="center">
			<form class="form-horizontal" role="form" id= "form1" name= "form1" method= "post">
				<p style="color:white">_<br>_<br>_<br>_<br>_<br>_<br>_</p>
				<a href="./checkqualify.php" class="btn btn-link btn-default" type="button">已經報名過了嗎？查詢審核結果</a> 
				<p style="color:white">_<br>_</p>
				<div class="form-group">
					 <label for="Name" class="col-sm-4 control-label">姓名</label>
					<div class="col-sm-5">
						<?php
							if (isset($_POST['register']))
								echo '<input type="text" class="form-control" id="textfield" name="Name" value="'.$_POST['Name'].'">';
							else
								echo '<input type="text" class="form-control" id="textfield" name="Name">';
						?>
					</div>
				</div>
				<div class="form-group">
					 <label for="Insti" class="col-sm-4 control-label">機構單位</label>
					<div class="col-sm-5">
						<?php
							if (isset($_POST['register']))
								echo '<input type="text" class="form-control" id="textfield" name="Insti" value="'.$_POST['Insti'].'">';
							else
								echo '<input type="text" class="form-control" id="textfield" name="Insti">';
						?>
					</div>
				</div>
				<div class="form-group">
					 <label for="Title" class="col-sm-4 control-label">職稱</label>
					<div class="col-sm-5">
						<?php
							if (isset($_POST['register']))
								echo '<input type="text" class="form-control" id="textfield" name="Title" value="'.$_POST['Title'].'">';
							else
								echo '<input type="text" class="form-control" id="textfield" name="Title">';
						?>
					</div>
				</div>
				<div class="form-group">
					 <label for="Phone" class="col-sm-4 control-label">電話</label>
					<div class="col-sm-5">
						<?php
							if (isset($_POST['register']))
								echo '<input type="text" class="form-control" id="textfield" name="Phone" value="'.$_POST['Phone'].'">';
							else
								echo '<input type="text" class="form-control" id="textfield" name="Phone">';
						?>
					</div>
				</div>
				<div class="form-group">
					 <label for="Email" class="col-sm-4 control-label">確認電話</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="textfield" name="Phone_Check">
					</div>
				</div>
				<div class="form-group">
					 <label for="Email" class="col-sm-4 control-label">電子信箱</label>
					<div class="col-sm-5">
						<?php
							if (isset($_POST['register']))
								echo '<input type="text" class="form-control" id="textfield" name="Email" value="'.$_POST['Email'].'">';
							else
								echo '<input type="text" class="form-control" id="textfield" name="Email">';
						?>
					</div>
				</div>

				<div class="form-group">
					<div class="col-sm-offset-0 col-sm-18">
						<p style="color:white">_</p>
						 	<?php
  								$conn = mysql_connect("localhost", "dan3388d", "dan3388d@ic@sql");
								mysql_select_db("dan3388d") or die("Unable to connect to the server. Please try again later.");
								mysql_query(" set names 'utf8' ");
								mysql_query(" SET CHARACTER SET  'UTF8 '; ");
								mysql_query('SET CHARACTER_SET_CLIENT=UTF8; ');
								mysql_query('SET CHARACTER_SET_RESULTS=UTF8; ');
								//$CountPost = count($_POST);
								if (isset($_POST['register'])){
									if($_POST['Name'] == NULL)
										echo '<p style="color:red">請填入姓名</p>';
									else if($_POST['Insti'] == NULL)
										echo '<p style="color:red">請填入機構單位</p>';
									else if($_POST['Title'] == NULL)
										echo '<p style="color:red">請填入職稱</p>';
									else if($_POST['Phone'] == NULL)
										echo '<p style="color:red">請填入電話</p>';
									else if($_POST['Email'] == NULL)
										echo '<p style="color:red">請填入電子信箱</p>';
									else if($_POST['Phone'] != $_POST['Phone_Check'])
										echo '<p style="color:red">確認電話有誤</p>';
									else{
										$check = "SELECT count(1) AS PhoneTimesCheck FROM SIGNUP WHERE Phone = '$_POST[Phone]'";
										$result_check = mysql_query($check);
										$row_check = mysql_fetch_assoc($result_check);
										if($row_check['PhoneTimesCheck'] == 1)
											echo '<p style="color:red">此電話已註冊</p>';
										else{
											$Email = mb_convert_encoding($_POST['Email'], "UTF-8", "auto");
											$Name = mb_convert_encoding($_POST['Name'], "UTF-8", "auto");
											$Insti = mb_convert_encoding($_POST['Insti'], "UTF-8", "auto");
											$Title = mb_convert_encoding($_POST['Title'], "UTF-8", "auto");
											$Phone = mb_convert_encoding($_POST['Phone'], "UTF-8", "auto");
											mysql_query(" INSERT INTO SIGNUP (Name,Insti,Title,Phone,Email,Result) VALUES ('$Name', '$Insti', '$Title', '$Phone', '$Email','0')");
											echo "<script langusge=\"javaScript\">";
											echo "window.alert(\"報名表已寄出，請在三天後來此確認報名結果，謝謝！\");";
											echo "location.href(\"" .$insertGoTo. "\");";
											echo "</script>";

											echo '<meta http-equiv="REFRESH" CONTENT="0;url=http://taiwanmt.nchu.edu.tw">';
										}
									}
									//Result 0==未審核 ; 1==不可以 ; 2==需付款 ; 3==報名成功
  								}
 						 	?>
						 <button type="submit" class="btn btn-default" name="register">報名</button>
						 <p style="color:white">_</p>
						 <p style="color:red">注意！</p>
						 <p>由於有名額限制，因此報名之後會經過審核，請記住您報名的電話，並於三天後進行審核結果查詢。</p>
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