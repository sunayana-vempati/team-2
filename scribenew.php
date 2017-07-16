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
Languages known: <input type="checkbox" name="check" value="english"> English
					<input type="checkbox" name="check" value="telugu"> Telugu</br></br>
					
Qualification: 	<input list="qual" name="qual">
<datalist id="qual">
  <option value="SSC">
  <option value="Intermediate 1st year">
  <option value="Intermediate 2nd year">
  <option value="Graduation">
</datalist> </br></br>

Email id: <input type="text" name="emailid">

Address : <input type="text" name="address" >
<input type="submit" align="center" name="Update" value="Update" ></br>

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
$lang =$quali=$email=$address="";
if (isset($_POST["Update"])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
  
    $lang = $_POST["check"];
	$quali =$_POST["qual"];
	$email=$_POST["emailid"];
	$address= $_POST["address"];
	
    // check if name only contains letters and whitespace
    
  }
}
	$sql = "INSERT INTO scribeup2 (lang, qual,email,address) VALUES ('$lang', '$quali','$email','$address')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " ;
}
?>
</body>
</html>