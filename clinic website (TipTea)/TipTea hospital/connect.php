<? php	
$Fullname = $_POST['Fullname'];
$Phonenumber = $_POST['Phonenumber'];
$email = $_POST['email'];
$Time = $_POST['Time'];
$message = $_POST['message'];

// Database php myadmin connectioon
$con = new mysqli('localhost','root','','tiptea');
if ($con->connect_error) 
{
	die('Connection failed : ' $con->connect_error);
}
else{
	$stmt = $con->prepare("Insert into appointment(fullname, Phonenumber, email, Time, message) value=(? ? ? ? ?)");
	$stmt->bind_param("sisss",$Fullname, $Phonenumber, $email, $Time, $message);
	$stmt->execute();
	echo "Appointment Succesfull..";
	$stmt->close();
	$con->close();
}
  ?>