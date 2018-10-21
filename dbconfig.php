<?
	$servername = "mysql32.unoeuro.com";
	$db = "poh_me_db";
	$username = "poh_me";
	$password = "ec9hmx6z";

	try {
		$conn = new PDO(
			"mysql:host=$servername;dbname=$db",
			$username,
			$password,
			array(
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
			)
		);
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	  //error_log("Connection to MySQL database failed: " . $e->getMessage(), 0);
	}
?>