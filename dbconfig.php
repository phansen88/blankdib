<?
	$servername = "mysql38.unoeuro.com";
	$db = "blankdib_com_db";
	$username = "blankdib_com";
	$password = "Peters123"; //vevajodiziye79

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