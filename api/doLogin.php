<?php
session_start();

$input_id = $_POST[id];
$input_pw = $_POST[password];

$user_info = checkAccount($input_id, $input_pw);

if(empty($user_info)) {
	$_SESSION["login_error"] = "帳號密碼錯誤";
	header("Location: http://127.0.0.1/PSMS/login.php");
}
else {
	$_SESSION["user_id"] = $input_id;
	$_SESSION["user_name"] = $user_info[0];
	$_SESSION["user_isAdmin"] = $user_info[1];

	if(isset($_SESSION["login_error"])) {
		unset($_SESSION["login_error"]);
	}

	if($_SESSION["user_isAdmin"]) {
		header("Location: http://127.0.0.1/PSMS/manager.php");
	}
	else {
		header("Location: http://127.0.0.1/PSMS/employee.php");
	}
	
}

function checkAccount($id, $pw) {
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_pass = "04241104";
	$db_select = "PSMS";

	$db_connect = "mysql:host=".$db_host.";dbname=".$db_select;
	$db_go = new PDO($db_connect, $db_user, $db_pass);
	$db_go -> exec("SET NAMES UTF8");

	$sql = $db_go -> prepare("SELECT name, isAdmin
	    					  FROM user
	    					  WHERE id = :id AND password = :password");
	$sql -> bindParam(":id", $id, PDO::PARAM_STR, 10);
	$sql -> bindParam(":password", $pw, PDO::PARAM_STR);
	$sql -> execute();

	$result = $sql -> fetch();

	return $result;
}

?>