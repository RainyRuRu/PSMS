<?php
session_start();

if(isset($_SESSION["user_isAdmin"])) {
	if($_SESSION["user_isAdmin"]) {
		header("Location: http://127.0.0.1/PSMS/manager.php");
	}
}
else {
	$_SESSION["login_error"] = "請登入後操作";
	header("Location: http://127.0.0.1/PSMS/login.php");
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
	<script src="js/employee.js"></script>
	<link rel="stylesheet" href="css/index.css">
<head>
<?php echo '<body onload=onLoad("'.$_SESSION[user_id].'")'; ?>
	<div class="container">
		<div class="background">
		<div class="row titleRow">
			<div class="col-md-offset-1 col-md-4 title">人事薪資管理系統</div>
			<?php echo '<div class="col-md-offset-3 col-md-2 subItem">Hi, '.$_SESSION[user_name].'</div>'; ?>
			<div class="col-md-1 subItem signout" onclick=logout()><span class="fa fa-sign-out" aria-hidden="true"></span>登出</div>	
		</div>
		<center>
			<div class="row searchRow">
				<div class="col-md-offset-5 col-md-2">
				<input id="yearSelector" type="number" name="quantity" min="1996" class="form-control">
				</div>
				<?php echo '<button type="button" class="btn btn-default col-md-1" onclick=goYear("'.$_SESSION[user_id].'",getYear())>GO</button>'; ?>
			</div>
			<table class="monthTable">
				<tr>
					<td id="month1" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">1月</div>
						</div>
					</td>
					<td id="month2" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">2月</div>
						</div>
					</td >
					<td id="month3" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">3月</div>
						</div>
					</td>
					<td id="month4" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">4月</div>
						</div>
					</td>
				</tr>
				<tr>
					<td id="month5" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">5月</div>
						</div>
					</td>
					<td id="month6" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">6月</div>
						</div>
					</td>
					<td id="month7" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">7月</div>
						</div>
					</td>
					<td id="month8" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">8月</div>
						</div>
					</td>
				</tr>
				<tr>
					<td id="month9" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">9月</div>
						</div>
					</td>
					<td id="month10" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-4" style="font-size:20px">10月</div>
						</div>
					</td>
					<td id="month11" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-4" style="font-size:20px">11月</div>
						</div>
					</td>
					<td id="month12" class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-4" style="font-size:20px">12月</div>
						</div>
					</td>
				</tr>
			</table>
		</center>
	</div>
	</div>
</body>
</html>