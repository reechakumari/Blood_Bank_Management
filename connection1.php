<?php
$host="localhost";
		$dbusername="root";
		$dbpassword="";
		$dbname="login";
		//create connection
		$conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
$username = filter_input(INPUT_POST,'Username');
$password = filter_input(INPUT_POST,'password');
if( !empty($password)&&!empty($username)){
	
	if(mysqli_connect_error()){
		die('Connect Error ('. mysqli_connect_errno() .')'.mysqli_connect_error());
	}
	else{
		$sql ="INSERT INTO user (username,password) values('$username','$password')";
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