<?php
$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="bloodbank";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);

$patient_id = filter_input(INPUT_POST,'patient_id');
$patientname = filter_input(INPUT_POST,'patientname');
$bloodgroup = filter_input(INPUT_POST,'bloodgroup');
$unit_of_blood_require = filter_input(INPUT_POST,'unit_of_blood_require');
$gender = filter_input(INPUT_POST,'gender');
$hospitalname = filter_input(INPUT_POST,'hospitalname');
$phone_no = filter_input(INPUT_POST,'phone_no');
$address = filter_input(INPUT_POST,'address');

if( !empty($patient_id)&&!empty($patientname)&&!empty($bloodgroup)&&!empty($unit_of_blood_require)&&!empty($gender)&&!empty($hospitalname)&&!empty($phone_no)&&!empty($address)){
	
	if(mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql ="INSERT INTO accepter (patient_id,patientname,bloodgroup,unit_of_blood_require,gender,hospitalname,phone_no,address) values('$patient_id','$patientname','$bloodgroup','$unit_of_blood_require','$gender','$hospitalname','$phone_no','$address')";
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