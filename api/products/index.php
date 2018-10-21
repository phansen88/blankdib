<?php
include '../../dbconfig.php';
header('access-control-allow-origin: *');

$query = $conn->prepare("SELECT * FROM sys_products");
$query->execute();
$data = [];
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    $obj = new class {};
    $obj->{"name"} = $row['name'];
    $obj->{"price"} = $row['price'];
    $obj->{"url"} = '/show_product.php?id=' . $row['id'];
    $obj->{"id"} = $row['id'];
    $data[$row['category']][] = $obj;
}

echo json_encode($data);

?>