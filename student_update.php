<!DOCTYPE html>
<html>
<head>
<title>Update your profile</title>
<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
body  {
    background-image: url('ieye.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
}
</style>
</head>
<body >
<h2 align="center">Update your profile</h2>
<form align="center" method="post">
</br>
Languages preferred: <input type="checkbox" name="check" value="english"> English
					<input type="checkbox" name="check" value="telugu"> Telugu</br></br>
					
Qualification: 	<input list="qual" name="qual">
<datalist id="qual">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>

Email id: <input type="text" name="emailid">

Exam Center: <input type="text" name="exam" >
<input type="submit" align="center" name="Update" value="Update" ></br>


<input type="submit" align="center" name="req" value="Request Scribe" ></br>

</form>
<?php


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password,"cfg2");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$lang =$quali=$exams=$email="";
if (isset($_POST["Update"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
    $lang = $_POST["check"];
	$quali =$_POST["qual"];
	$exams = $_POST["exam"];
	$email=$_POST["emailid"];
    // check if name only contains letters and whitespace
    
  }

	$sql = "INSERT INTO student_update (lang, qual,exam,email) VALUES ('$lang', '$quali','$exams','$email')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}
}




static $x=0;
static $y=0;
static $z=0;


function value($ans)
{
$cars = array("SSC", "Intermediate 1st year", "Intermediate 2nd year","Graduation");
	$length=sizeof($cars);
	for($z=0;$z<$length;$z++)
	{
		if ($ans==$cars[$z])
		
		return $z;
	}
}
if (isset($_POST["req"])) {
	
	$quali1 =$_POST["qual"];
	
	$cars = array("SSC", "Intermediate 1st year", "Intermediate 2nd year","Graduation");
	$length=sizeof($cars);
	for($x=0;$x<$length;$x++)
	{
		if ($quali1==$cars[$x])
		$y=$x;
	}


$sql = "SELECT email, qual FROM scribeup2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $ans= $row["qual"];
		 $mail=$row["email"];
		$st= value($ans);
		if($y>$st)
		{
			$sq="select phoneno from scribe where email= '$mail' ";
			$result = mysqli_query($conn, $sq);
			if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row1 = mysqli_fetch_assoc($result)) {
        echo  $row1["phoneno"];
    }
		}			
		 
    }

}
}
}
?>


</body>
</html>

