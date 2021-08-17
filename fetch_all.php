<?php
	header('Content-Type: application/json');
	header('Access-Control-Allow-Origin: *');

	include('connection.php');
	$query = "select * from tbl_product";
	$res= mysqli_query($conn,$query);

	if(mysqli_num_rows($res)>0)
	{
		$result = mysqli_fetch_all($res ,MYSQLI_ASSOC);

		echo json_encode($result);
	}
	else
	{
		echo json_encode(array('message'=>'No Record Found','status'=>false));
	}


?>