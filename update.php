<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Method: PUT');
	header('Access-Control-Allow-Headers: Content-Type,Authorization,Access-Control-Allow-Method,Access-Control-Allow-Headers,X-Requested-With');

	include('connection.php');

	$data = json_decode(file_get_contents("php://input"),true);

	@$id = $data['id'];
	@$name = $data['name'];
	@$price = $data['price'];

	$query = "update tbl_product set product_name='".$name."',product_price='".$price."' where id='".$id."'";

	if(mysqli_query($conn,$query))
	{
		echo json_encode(array('Message'=>'Record Updated','Status'=>true));
	}
	else
	{
		echo json_encode(array('Message'=>'Record Not Updated','Status'=>false));
	}

?>