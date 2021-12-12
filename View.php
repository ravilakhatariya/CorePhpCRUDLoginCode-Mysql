<!DOCTYPE html>
<html>
<head>
	<title>View Data</title>
</head>
<body>
				<h2 align="center"><b>View Data</b></h2>
<table border="2%">
<tr>	
<th>ID</th>
<th>Name</th>
<th>Father Name</th>
<th>Address</th>
<th>Gender</th>
<th>State</th>
<th>District</th>
<th>City</th>
<th>Pincode</th>
<th>Course</th>
<th>Email</th>
<th>Date of Birth</th>
<th>Mobile No</th>
<th>Action</th>
</tr>
<?php
$conn = mysqli_connect("localhost","root","","student");
$query="select *from registration";
$select_query = mysqli_query($conn,$query);
if($select_query == false){
	echo mysqli_error($conn);
}
while($result = mysqli_fetch_array($select_query))
{?>
<tr>
<th><?php echo $result['ID']?></th>
<th><?php echo $result['Name']?></th>
<th><?php echo $result['Fname']?></th>
<th><?php echo $result['Address']?></th>
<th><?php echo $result['Gender']?></th>
<th><?php echo $result['State']?></th>
<th><?php echo $result['District']?></th>
<th><?php echo $result['City']?></th>
<th><?php echo $result['pincode']?></th>
<th><?php echo $result['Course']?></th>
<th><?php echo $result['Email']?></th>
<th><?php echo $result['Dob']?></th>
<th><?php echo $result['MObileNo']?></th>
<th><a href="Update.php?ID=<?php echo $result['ID'];?>">Update</a></th>

</tr>

<?php
}
?>
</table>
</body>
</html>
