<!DOCTYPE html>
<html>
<head>
<title>Form</title>
<style>
form{padding-top:60px;
text-align:center;
font-size:20px;
}
input{width:250px;
height:40px;
font-size:20px;
}
</style>
</head>
<body style ="background-image: url('Donor.jpeg');">
<form method="post" action="connection2.php">
Donar id:<input type="text" name="donar_id" value="" required>
<br><br>
Donar name:<input type="text" name="donarname" value="" required>
<br><br>
Blood Group:
<select name="bloodgroup"value="" required>
   <option value="A+ " name="a">A+</option>
  <option value="A- " name="b">A-</option>
  <option value="B+" name="c">B+</option>
  <option value="B-" name="d">B-</option>
  <option value="AB+" name="e">AB+</option>
  <option value="AB-" name="f">AB-</option>
  <option value="O+" name="g">O+</option>
  <option value="O-" name="h">O-</option>
</select>
<br><br>
Age:<input type="text" name="age" value="" required>
<br><br>
Gender:<input type="radio" name="gender" value="male" checked> Male<input type="radio" name="gender" value="female" > Female<br>
<br>
Phone No.:<input type="Number" name="phone_no" value="" required>
<br><br>
Address:<input type="text" name="address" value="" required>
<br><br><br>
<input type="submit" value="Submit">
<br>
<br>
<br>
<input type="button" value="Go back!" onclick="history.back()">
</form>
</body>
</html>
