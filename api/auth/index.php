<?
include '../../dbconfig.php';
header('access-control-allow-origin: *');

if (isset($_GET['login'])) {
    $username = $_GET["username"];
    $password = $_GET["password"];
    
    $pwInput = password_hash($password, PASSWORD_DEFAULT);
    
    $sth = $conn->prepare("SELECT * FROM sys_user WHERE username = :username LIMIT 1");
    $sth->bindParam(':username', $username);
    $sth->execute();
    $result = $sth->fetch(PDO::FETCH_OBJ);


    if ($username == $result->username && password_verify($password, $result->password)) {

        $_SESSION['user_session'] = true;
        $_SESSION['user_name'] = $result->username;
        $_SESSION['user_id'] = $result->id;

        $data = new class {};
        $data->{'user_name'} = $result->username;
        $data->{'user_id'} = $result->id;
        
        echo json_encode($data);

        
    } else {
        echo 'login failed';
    }

} else {
    echo 'Please send login crendetials';
}


//echo json_encode($alldata);

?>