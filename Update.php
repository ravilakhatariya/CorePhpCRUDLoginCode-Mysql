<?php
$conn=mysqli_connect("localhost","root","","student");
if(isset($_POST['submit']))
{
	$id=$_GET['ID'];
	$Name=$_POST['Name'];
	$Fname=$_POST['Fname'];
	$Address=$_POST['Address'];
	$Gender=$_POST['Gender'];
	$State=$_POST['State'];
	$District=$_POST['District'];
	$City=$_POST['City'];
	$pincode=$_POST['Pincode'];
	$Course=$_POST['Course'];
	$Email=$_POST['Email'];
	$DOB=$_POST['DOB'];
	$Mobile=$_POST['Mobile'];
    $query="UPDATE `registration` SET `Name`='$Name',`Fname`='$Fname',`Address`='$Address',`Gender`='$Gender',`State`='$State',`District`='$District',`City`='$City',`pincode`='$pincode',`Course`='$Course',`Email`='$Email',`Dob`='$DOB',`MObileNo`='$Mobile' WHERE ID='$id'";
    mysqli_query($conn,$query);
    echo "Update Succesfull";
    header('Location:View.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
	<script type="">
function validateForm() {
  var Name = document.forms["myForm"]["Name"].value;
  var Fname = document.forms["myForm"]["Fname"].value;
  var Address = document.forms["myForm"]["Address"].value;
  var State = document.forms["myForm"]["State"].value;
  var District = document.forms["myForm"]["District"].value;
  var Pincode = document.forms["myForm"]["Pincode"].value;
  var Email = document.forms["myForm"]["Email"].value;
  var DOB = document.forms["myForm"]["DOB"].value;
  var Mobile = document.forms["myForm"]["Mobile"].value;



  if (Name == "") {
    alert("Name must be filled out");
    return false;
  }
  if (Fname == "") {
    alert("Father Name must be filled out");
    return false;
  }
  if (Address == "") {
    alert("Address must be filled out");
    return false;
  }
 
  if (Email == "") {
    alert("Email must be filled out");
    return false;
  }
  if (DOB == "") {
    alert("DOB must be filled out");
    return false;
  }
  if (Pincode == "") {
    alert("Pincode must be filled out");
    return false;
  }
  if (Mobile == "") {
    alert("Mobile must be filled out");
    return false;
  }

}
</script>
</head>
<body bgcolor="	pink">
	<center>
		<fieldset>	
			<h2><b>ITI  STUDENT  UPDATE  FORM</b></h2>
<form  name="myForm" method="Post" action="" onsubmit="return validateForm()">
	<table>
		<tr>
<td><label>Name</label></td><td><input type="text" name="Name"></td>
        </tr>
		<tr>
<td><label>Father Name</label></td><td><input type="text" name="Fname"></td>
         </tr>
<tr>
<td><label>Address</label></td><td><textarea style="width:4.5cm;" name="Address"></textarea></td>
</tr> 
<tr>
<td><label>Gender</label></td><td><input type="radio" name="Gender" value="	male">Male
	&nbsp;&nbsp;&nbsp;<input type="radio" name="Gender" value="	Female">Female</td>
</tr>
<tr>
<td><label>State</label></td><td>
	<select style="width:4.7cm;" name="State">
		<option selected="">--select--</option>
		<option Value="Gujrat">Gujrat</option>
		<option Value="Rajsthan">Rajsthan</option>
		<option Value="Maharshtra">Maharshtra</option>
		<option Value="Delhi">Delhi</option>
		<option Value="UttarPradesh">Uttar Pradesh</option>
	</select>
</td><br>
</tr>
<tr>
<td><label>District</label></td><td>
	<select style="width:4.7cm;" name="District">
		<option selected="">--select--</option>
		<option Value="Ahmedabad">Ahmedabad</option>
		<option Value="Surat">Surat</option>
		<option Value="Vadodra">Vadodra</option>
		<option Value="JamNagar">JamNagar</option>
		<option Value="Porbandar">Porbandar</option>
	</select>
</td><br>
</tr>
<tr>
<td><label>City</label></td><td>
	<select style="width:4.7cm;" name="City">
		<option selected="">--select--</option>
		<option Value="Ahmeadabad">Ahmeadabad</option>
		<option Value="Bavla">Bavla</option>
		<option Value="Viram Gam">Viram Gam</option>
		<option Value="Vastral">Vastral</option>
		<option Value="Satailite">Satailite</option>
	</select>
</td><br>
</tr>
	<tr>
<td><label>Pincode</label></td><td><input type="text" name="Pincode" maxlength="pincode"></td>
         </tr>
	<tr>
<td><label>Course</label></td><td><input type="checkbox" name="Course" value="MBA">MBA
<input type="checkbox" name="Course" value="MCOM">MCOM
<input type="checkbox" name="Course" value="MCA">MCA</td>
 </tr>
<tr>
<td><label>Email Id</label></td><td><input type="email" name="Email"></td>
</tr>
<tr>
<td><label>Date Of Birth</label></td><td><input type="date" name="DOB" style="width:4.6cm;"></td>
 </tr>
 <tr>
<td><label>Mobile No</label></td><td><input type="text" name="Mobile" style="width:4.6cm;"></td>
 </tr>
 </table>
<td><input type="Reset" name="Reset" value="Reset"></td><td><input type="submit" name="submit" value="submit"></td>
 

</form>
</fieldset>
</center>
</body>
</html>