<?php
session_start();

if(isset($_SESSION["user_isAdmin"])) {
	if($_SESSION["user_isAdmin"]) {
		header("Location: http://127.0.0.1/PSMS/manager.php");
	}
	else {
		header("Location: http://127.0.0.1/PSMS/employee.php");
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>人事薪資管理系統</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<meta charset="utf8">
	<!-- 最新編譯和最佳化的 CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<!-- 選擇性佈景主題 -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<!-- 最新編譯和最佳化的 JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/index.css">
<head>
<body>
	<div class="container">
		<center>
			<div class="indexTitle">人事薪資管理系統</div>
				<div class="loginDiv">
					<p class="loginFont">Login</p>
					<?php 
						if(isset($_SESSION["login_error"])){
							echo '<div class="alert alert-danger col-sm-offset-2 col-sm-8" role="alert">'.$_SESSION["login_error"].'</div>';
						}
					?>
					<form role="form" class="form-horizontal" method="post" action="api/doLogin.php">
						<div class="form-group has-feedback">
							<div class="col-sm-offset-2 col-sm-8">
								<i class="form-control-feedback glyphicon glyphicon-user" aria-hidden="true"></i>
								<input type="text" class="form-control inputField" name="id" placeholder="帳號">		
							</div>
						</div>
						<div class="form-group has-feedback">
							<div class="col-sm-offset-2 col-sm-8">
								<i class="form-control-feedback fa fa-lock" aria-hidden="true"></i>
								<input type="password" class="form-control inputField" name="password" placeholder="密碼">
							</div>
						</div>
						<button class="btn btn-default col-sm-offset-2 col-sm-8 inputField" type="submit" >登入</button>
					</form>
				</div>
		</center>
	</div>
</body>
</html>
