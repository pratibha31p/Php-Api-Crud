<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Authorization,Access-Control-Allow-Method,Content-Type,X-Requested-With');
include ('connection.php');
$data = json_decode(file_get_contents("php://input"),true);

@$id = $data['id'];

$query = "delete from tbl_product where id='$id'";

if(mysqli_query($conn,$query))
{
	echo json_encode(array('Message'=>'Record Deleted','Status'=>true));
}
else
{
	echo json_encode(array('Message'=>'Record Not Deleted','Status'=>false));
}


?>