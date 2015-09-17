<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head><script type="text/javascript" src="/44028BD508DB4F66B4F61BBB0E6DF1D8/0EBEC49B-DE2E-6840-A4E0-82352377F2C6/main.js" charset="UTF-8"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>管理員審核報名情況</title>

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
					</button> <a class="navbar-brand" href="#">主頁</a>
				</div>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" align="center">
			<p style="color:white">_<br>_<br>_<br>_<br>_<br>_</p>
			<h1 class="text-center">
				論文完整資料
			</h1> 
			<table class="table">
				<thead>
					<tr>
						<th>
							姓名
						</th>
						<th>
							單位
						</th>
						<th>
							職稱
						</th>
						<th>
							審核狀態
						</th>
						<th>
							操作
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$conn = mysql_connect("localhost", "dan3388d", "dan3388d@ic@sql");
						mysql_select_db("dan3388d") or die("Unable to connect to the server. Please try again later.");
						mysql_query(" set names utf8 ");
						mysql_query(" SET CHARACTER SET  'UTF8 '; ");
						mysql_query('SET CHARACTER_SET_CLIENT=UTF8; ');
						mysql_query('SET CHARACTER_SET_RESULTS=UTF8; ');
						$data = mysql_query("SELECT * FROM SIGNUP");
						$CountNo = mysql_num_rows($data);

						for($i=0; $i<($CountNo);$i++){
							$rs = mysql_fetch_row($data);
							echo '<tr class="default">';
							echo '<td>' . $rs[1] . '</td>';
							echo '<td>' . $rs[2] . '</td>';
							echo '<td>' . $rs[3] . '</td>';
							if($rs[6]=='0')
								echo '<td class="active">未審核</td>';
							else if($rs[6]=='1')
								echo '<td class="danger">身分不符合</td>';
							else if($rs[6]=='2')
								echo '<td class="warning">符合但還須繳費</td>';
							else if($rs[6]=='3')
								echo '<td class="success">符合且不須繳費</td>';
							else if($rs[6]=='4')
								echo '<td class="active">需檢查收據</td>';
							echo ('<td>
									<a type="button" class="btn btn-default" href="./giveresult.php?Phone='.$rs[4].'">給審核結果</a>
									<a type="button" class="btn btn-default" href="http://140.120.54.230/dan3388d/sys/'.$FileURL.'">下載照片</a>
								</td>');
							echo '</tr>';
						}
					?>
				</tbody>
			</table>
			<!--Result 0==未審核 ; 1==不可以 ; 2==需付款 ; 3==報名成功-->
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