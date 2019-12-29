<?php
$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="bloodbank";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$donar_id = filter_input(INPUT_POST,'donar_id');     
$donarname = filter_input(INPUT_POST,'donarname');
$bloodgroup = filter_input(INPUT_POST,'bloodgroup');
$age = filter_input(INPUT_POST,'age');
$gender = filter_input(INPUT_POST,'gender');
$phone_no = filter_input(INPUT_POST,'phone_no');
$address = filter_input(INPUT_POST,'address');

if( !empty($donar_id)&&!empty($donarname)&&!empty($bloodgroup)&&!empty($age)&&!empty($gender)&&!empty($phone_no)&&!empty($address)){
	
	if(mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql ="INSERT INTO donar (donar_id,donarname,bloodgroup,age,gender,phone_no,address) values('$donar_id','$donarname','$bloodgroup','$age','$gender','$phone_no','$address')";
		if($conn->query($sql)){
			echo"New record is inserted succesfully";
		}
		else{
			echo"Error:";//.$sql.<"br">.$conn->error;
		}
		$conn->close();
	}
}
else{
	echo"All the details are to be filled.";
	die();
}
?>
