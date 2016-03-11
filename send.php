<?php 
if($_POST){
	require_once 'main.class.php';
	$db = new DB(SERVER,USER,PASS,DBNAME);

	if($_POST['type'] == 'send'){

		$name = htmlspecialchars($_POST["name"]);
		$isactive = htmlspecialchars($_POST["isactive"]);
		$year = date("y.m.d");

		$insert = $db->insert($name, $year, $isactive);
		$result = ($insert)? true : false;

		return $result;
	}

	if($_POST['type'] == 'task'){
		$num = htmlspecialchars($_POST["num"]);
		function getMeArray($num){
			$rand = mt_rand();
			static $line;
			if($num === 0){
				$arr = explode(' ', $line);
				print_r($arr);
			}else{
				$line .= ' '.$rand;
				return getMeArray($num-1);
			}
		}
		getMeArray($num);
	}

}else{
	return false;
}

 ?>