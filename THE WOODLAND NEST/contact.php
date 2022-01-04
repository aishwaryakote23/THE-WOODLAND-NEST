<?php
$server_name="localhost";
$username="id18173721_ngo";
$password="Amartate@2208";
$database_name="id18173721_wlngo";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['send']))
{	
	 $Name = $_POST['Name'];
	 $Email = $_POST['Email'];
	 $Mobile = $_POST['Mobile'];
	 $Message = $_POST['Message'];

	 $sql_query = "INSERT INTO contact (Name,Email,Mobile,Message)
	 VALUES ('$Name','$Email',' $Mobile','$Message')";
    if (mysqli_query($conn, $sql_query)) 
    {
      header('location: contact.html');
    } 
    else
      {
     echo "Error: " . $sql . "" . mysqli_error($conn);
    } 

	
	 mysqli_close($conn);
}



?>