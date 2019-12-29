<?php
$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="bloodbank";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);


$password = filter_input(INPUT_POST,'password');
$repeat_password=filter_input(INPUT_POST,'repeat_password');
$username = filter_input(INPUT_POST,'username');
if( !empty($password)&&!empty($repeat_password)&&!empty($username)){
	
	if(mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql ="INSERT INTO sign (password,repeat_password,username) values('$password','$repeat_password','$username')";
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
	echo"Username or password should not be empty";
	die();
}
?>