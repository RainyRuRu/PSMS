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
		<div class="background">
		<div class="row titleRow">
			<div class="col-md-offset-1 col-md-4 title">人事薪資管理系統</div>
			<div class="col-md-offset-3 col-md-2 subItem">Hi, 詩吟兒</div>
			<div class="col-md-1 subItem signout"><span class="fa fa-sign-out" aria-hidden="true"></span>登出</div>	
		</div>
		<center>
			<div class="row searchRow">
				<div class="col-md-offset-5 col-md-2">
				<input type="number" name="quantity" min="2000" max="2015" class="form-control" value="2015">
				</div>
				<button type="button" class="btn btn-default col-md-1">GO</button>
			</div>
			<table class="monthTable">
				<tr>
					<td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">1月</div>
						</div>
						<div class="row titleRow">
							<button type="button" class="btn btn-info col-md-offset-4">Download</button>
						</div>
					</td>
					<td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">2月</div>
						</div>
						<div class="row titleRow">
							<button type="button" class="btn btn-info col-md-offset-4">Download <span class="badge">2</span></button>
						</div>
					</td ><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">3月</div>
						</div>
					</td><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">4月</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">5月</div>
						</div>
					</td><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">6月</div>
						</div>
					</td><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">7月</div>
						</div>
					</td><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">8月</div>
						</div>
					</td>
				</tr>
				<tr>
					<td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">9月</div>
						</div>
					</td><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-4" style="font-size:20px">10月</div>
						</div>
					</td><td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-4" style="font-size:20px">11月</div>
						</div>
					</td><td class="monthTd">
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