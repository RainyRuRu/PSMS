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

	<script src="js/manager.js"></script>
	<link rel="stylesheet" href="css/index.css">
<head>
<body onload="load()">
	<div class="container">
		<div class="background">
			<!-- header -->
		<div class="row titleRow">
			<div class="col-md-offset-1 col-md-4 title">人事薪資管理系統</div>
			<div class="col-md-offset-3 col-md-2 subItem">Hi, 詩吟兒</div>
			<div class="col-md-1 subItem signout"><span class="fa fa-sign-out" aria-hidden="true"></span>登出</div>	
		</div>
		<center>
			<!-- tab -->
		<ul class="nav nav-tabs" id="page" style="width:90%;margin-top:40px;">
			<li id="uploadTab" class="tabItem active" onclick="changeTab('upload')"><a>上傳薪資單</a></li>
			<li id="manageTab" class="tabItem" onclick="changeTab('manage')"><a>管理薪資單</a></li>
		</ul>

		<!-- managerTab -->
		<div id="manageDiv" style="display:none">
			<div class="row searchRow">
				<div class="col-md-offset-3 col-md-1" style="padding-top:7px">員工：</div>
				<div class="col-md-4">
					<input type="text" class="form-control" value="E224763903 蔡詩吟" disabled>
				</div>		
				<button type="button" class="btn btn-default col-md-1">搜尋員工</button>
			</div>
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
							<div class="col-md-offset-5 col-md-1" style="font-size:20px">
								<span class="fa fa-trash-o" aria-hidden="true"></span>
							</div>
						</div>
						<div class="row titleRow">
							<button type="button" class="btn btn-info col-md-offset-4">Download</button>
						</div>
					</td>
					<td class="monthTd">
						<div class="row titleRow">
							<div class="col-md-offset-1 col-md-3" style="font-size:20px">2月</div>
							<div class="col-md-offset-5 col-md-1" style="font-size:20px">
								<span class="fa fa-trash-o" aria-hidden="true"></span>
							</div>
						</div>
						<div class="row titleRow">
							<button type="button" class="btn btn-info col-md-offset-4">Download <span class="badge">2</span></button>
						</div>
					</td><td class="monthTd">
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
		</div>
			<!-- end managerTab -->
		
			<!-- uploadTab -->
		<div id="uploadDiv" style="">
			<div class="form-horizontal searchRow">
  				<div class="row form-group">
    				<label class="col-md-offset-1 col-md-2 control-label">薪資單月份：</label>
    				<div class="col-md-2">
      					<select id="yearSelect" name="year" class="form-control">
  							
						</select>
					</div>
					<div class="col-md-2">
      					<select id="monthSelect" class="form-control">
  							<option>1月</option>
  							<option>2月</option>
  							<option>3月</option>
  							<option>4月</option>
  							<option>5月</option>
  							<option>6月</option>
  							<option>7月</option>
  							<option>8月</option>
  							<option>9月</option>
  							<option>10月</option>
  							<option>11月</option>
  							<option>12月</option>
						</select>
					</div>
					<div class="col-md-offset-2 col-md-2">
						<span class="file-input btn btn-default btn-file">
							<span class="fa fa-file-text-o" aria-hidden="true"></span> 新增檔案
					 		<input type="file" name="excelFiles" onchange="chooseFile()" multiple>
					 	</span>
					</div>
				</div>
			</div>

			<div id="uploadgournd" class="uplodeground" ondragover="over(event)" ondrop="drop(event)">
				<div class="uploadImg">
					<div id="fileHere">
						<i class="fa fa-files-o fa-5x"></i>
						<p>拖曳檔案至此</p>
					</div>
					<div id="dragImg" style="display:none;">
						<img src="loading.gif" width="200px"/>
					</div>
				</div>
				<table id="fileTable" class="table table-hover" style="display:none">
				</table>

			</div>

			<button type="button" class="btn btn-default uploadBtn" onclick="uploadFiles()">上傳</button>

		</div>
			<!-- end uploadTab -->
			
		</center>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">
						<span aria-hidden="true">&times;</span>
						<span class="sr-only">Close</span>
					</button>
					<h4 class="modal-title" id="myModalLabel">選擇員工</h4>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-4">
							<input type="text" class="form-control" name="search_id" placeholder="ID">
						</div>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="search_name" placeholder="姓名">
						</div>
						<div class="col-sm-offset-1 col-sm-2">
							<button type="button" class="btn btn-default" onclick="searchUser()">
								<span class="glyphicon glyphicon-search" aria-hidden="true" ></span>
								搜尋
							</button>
						</div>
					</div>
					<center>
					<div id="searchError" class="searchErr;" style="display:none;">
						<i class="fa fa-frown-o"></i>
						<span>查無資料</span>
					</div>
					</center>
					
					<div class="searchTable">
					<table class="table table-hover">
						<thead>
							<tr>
								<th class="col-sm-1">#</th>
								<th>ID</th>
								<th>姓名</th>
							</tr>
						</thead>
						<tbody id="searchTableBody">
						</tbody>
					</table>
				</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					<button id="searchBtn" type="button" class="btn btn-primary" onclick="chooseEmployee()">選擇</button>
				</div>

			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>