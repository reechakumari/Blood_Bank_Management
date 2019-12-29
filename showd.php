<?php 
include('config.inc');
$qry="Select * from donar";
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 80%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<table width="80%" border-collapse="collapse" align="center" font-family=" arial" background-color="#dddddd">
  <tr>
    <td width="199">Donar Name</td>
    <td width="63">Blood Group</td>
    <td width="199">Gender</td>
	<td width="74">Phone No.</td>
    <td width="199">Address</td>
  </tr>
  <?php 
$qry="Select * from donar";
$rc=mysqli_query($con,$qry);
while($tmp=mysqli_fetch_array($rc))
{
?>
  <tr>
    <td><?php echo $tmp['donarname'];?></td>
    <td><?php echo $tmp['bloodgroup'];?></td>
    <td><?php echo $tmp['gender'];?></td>
	<td><?php echo $tmp['phone_no'];?></td>
    <td><?php echo $tmp['address'];?></td>
  </tr>
<?php
}
?>
</table>