<?php 
function getConnect(){

	$host = "127.0.0.1";
	$dbname = "pt14317";
	$dbusername = "root";
	$dbpwd = "123456";

	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $dbusername, $dbpwd);
	}catch(Exception $ex){
		var_dump($ex->getMessage());
		die;
	}
	
	return $conn;
}

function execQuery($query, $getAll = false){
	$connect = getConnect();
	$stmt = $connect->prepare($query);
	$stmt->execute();

	$result = $stmt->fetchAll();
	if($result == null){
		return null;
	}

	if($getAll){
		return $result;
	}
	return $result[0];

}




 ?>