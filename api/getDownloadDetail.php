<?php

$input_id = $_POST[id];
$input_year = $_POST[year];
$input_month = $_POST[month];

$json = array('data' => getDownloadDetail($input_id, $input_year, $input_month));
$json_en = json_encode($json);
echo $json_en;

function getDownloadDetail($id, $year, $month) {
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_pass = "04241104";
	$db_select = "PSMS";

	$db_connect = "mysql:host=".$db_host.";dbname=".$db_select;
	$db_go = new PDO($db_connect, $db_user, $db_pass);
	$db_go -> exec("SET NAMES UTF8");

	$sql = $db_go -> prepare("SELECT path, upload
							  FROM payroll 
							  WHERE user_id = :id AND year = :year AND month = :month");
	$sql -> bindParam(":id", $id, PDO::PARAM_STR, 10);
	$sql -> bindParam(":year", $year, PDO::PARAM_INT, 4);
	$sql -> bindParam(":month", $month, PDO::PARAM_INT, 2);
	$sql -> execute();

	$result = $sql -> fetchAll();

	return $result;
}

?>