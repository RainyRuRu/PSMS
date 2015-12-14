<?php


$id = $_POST['id'];
$name = $_POST['name'];

$result = false;
$error = null;
$data = false;

try {

	$dsn = 'mysql:dbname=PSMS;host=192.168.2.104';
	$user = 'root';
	$password = '04241104';
	
	$db = new PDO($dsn, $user, $password);
	$db->exec("set names utf8");

    $stmt = $db->prepare('SELECT id, name from `user` WHERE id like :id and name like :name');
    $stmt->bindValue(":id", "%".$id."%");
    $stmt->bindValue(":name", "%".$name."%");

    $stmt->execute();
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $result = true;

} catch (PDOException $e) {
	 $error = $e;
	 echo $error;
}

$result = array(
	"result" => $result,
    "data" => $row,
	"responseDetail" => $error,
);

$json_result = json_encode($result);

echo $json_result;