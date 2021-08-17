<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Method,Authorization,Content-Type, X-Requested-With');
include('connection.php');

$data = json_decode(file_get_contents("php://input"), true);


// $values=implode("','",array_values($data));

@$name=$data["name"];
@$price=$data["price"];

$query = "insert into tbl_product (product_name,product_price) values ('".$name."','".$price."')";


if(mysqli_query($conn,$query))
{
	echo json_encode(array('Message'=>'Record Inserted','Status'=>true));
}
else
{
	echo json_encode(array('Message'=>'Record Not Inserted','Status'=>false));
}



?>