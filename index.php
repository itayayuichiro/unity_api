<?php
	if (!empty($_GET['id'])) {
		echo "success";
		$data = file_get_contents('scores.txt');
		file_put_contents('scores.txt', $data.$_GET['score']."\n");
		exit();
	}else{
		$str = file_get_contents('scores.txt');
		$datas = explode("\n", $str);
		
	}
?>
<!DOCTYPE html>
<html>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#ffffff">
	<title>
		シューティングレコード
	</title>
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
    <style type="text/css">
		body {
		    padding-top: 54px;
		}

		@media (min-width: 992px) {
		    body {
		        padding-top: 56px;
		    }
		}
    </style>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
	  <div class="container">
	    <a class="navbar-brand" href="/youtuber_collection">シューティングレコード</a>
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	  </div>
	</nav>

	<div class="container">
		<table class="table">
			<thead class="table-dark">			
				<tr>
					<th>ユーザー名</th>
					<th>スコア</th>
				</tr>
			</thead>
			<tbody>				
		<?php 
			foreach ($datas as $score) {
				
				if ($score != "") {
		?>
				<tr>
					<td>ユーザー1</td>
					<td><?php echo $score; ?></td>
				</tr>
		<?php
				}
			}
		?>
			</tbody>
		</table>
	</div>
</body>
</html>