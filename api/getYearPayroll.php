<?php

$input_id = $_POST[id];
$input_year = $_POST[year];

$json = array('data' => countFile($input_id, $input_year));
$json_en = json_encode($json);
echo $json_en;

function countFile($id, $year) {
	$db_host = "127.0.0.1";
	$db_user = "root";
	$db_pass = "04241104";
	$db_select = "PSMS";

	$db_connect = "mysql:host=".$db_host.";dbname=".$db_select;
	$db_go = new PDO($db_connect, $db_user, $db_pass);
	$db_go -> exec("SET NAMES UTF8");

	$sql = $db_go -> prepare("SELECT month, COUNT(path) AS count
							  FROM payroll 
							  WHERE user_id = :id AND year = :year 
							  GROUP BY month");
	$sql -> bindParam(":id", $id, PDO::PARAM_STR, 10);
	$sql -> bindParam(":year", $year, PDO::PARAM_INT, 4);
	$sql -> execute();

	$result = $sql -> fetchAll();

	return $result;
}

?>