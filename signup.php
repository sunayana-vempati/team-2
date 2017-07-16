<html><!DOCTYPE html>
<html>
<head>
  
  <title>Sign Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color: #1abc9c; /* Green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: #ffffff; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
  
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0
	;
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
</style>
</head>
<body>

<!--<h2 style="margin-left:250px;color:green;">Sign Up</h2>-->
<div class="container-fluid bg-2 text-center">
  <h2 class="margin" padding-left="200px" >Sign Up</h2>
 <div style="width:50%;margin-left:250px;border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;">
   <form action="" method="post">
	<label style="color:darkslategrey">Type:</label>
		<span style="color:red">*</span>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="user" value="student" style="color:black" checked><b style="color:black"> Student</b>
        &nbsp;&nbsp;<input type="radio" name="user" value="scribe" style="color:black"><b style="color:black"> Volunteer</b><br><br>
       
        <label style="color:darkslategrey;"  >Name:</label>
        <span style="color:red">*</span>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="uname" name="uname" placeholder="Enter name" style="color:grey" required><br><br>
        <label style="color:darkslategrey">Password:</label>
		<span style="color:red">*</span>
        <input type="password" id="pwd" name="pwd" style="text-align:left;color:grey" placeholder="Enter password"  required><br><br>
        <label style="color:darkslategrey">Contact:</label>
		<span style="color:red">*</span>
         &nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="phno" name="phno" placeholder="Enter phone number" style="color:grey" required><br>

        <br>
        <label style="color:darkslategrey">Email:</label>
		<span style="color:red">*</span>
         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="email" name="email" placeholder="Enter mail id" style="color:grey" required><br><br>
        <label style="color:darkslategrey">Gender:</label>
		<span style="color:red">*</span>
        &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male" style="color:black" checked><b style="color:black"> Male</b>
       &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="female" style="color:black"><b style="color:black"> Female</b>
       &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="gender" value="other" style="color:black"><b style="color:black"> Other</b><br><br>

        <input type="submit" name="Submit" value="Submit" style="color:black;text-align:center;">
    </form>
</div>

</div>







<!--<div style="width:50%;margin-left:250px" >
    <form action="" method="post">
	<label>Type:</label>
		<span style="color:red">*</span>
        <input type="radio" name="user" value="scribe" checked> scribe
        <input type="radio" name="user" value="student"> student<br>
      
        <label >Name:</label>
        <span style="color:red">*</span>
        <input type="text" id="uname" name="uname" placeholder="Enter name" required><br>

        <label >Password:</label>
		<span style="color:red">*</span>
        <input type="password" id="pwd" name="pwd" placeholder="Enter password">
        <label >Contact:</label>
        <input type="text" id="phno" name="phno" placeholder="Enter phone number" required>

        
        <label >Email:</label>
		<span style="color:red">*</span>
        <input type="text" id="email" name="email" placeholder="Enter mail id">
        <label >Gender:</label>
		<span style="color:red">*</span><br>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other

        <input type="submit" value="Submit" name="Submit">
    </form>
	</div>-->
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

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name1 = $password1=$email1 = $phno1=$gender1 =  "";


if (isset($_POST["submit"])) {
	
if($_POST["student"]=="scribe")
	{
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["uname"])) {
    $nameErr = "Name is required";
  } else {
    $name1 = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["pwd"])) {
    $nameErr = "Password is required";
  } else {
    $password1 = test_input($_POST["pwd"]);
    // check if name only contains letters and whitespace
    
  }
  
  
  if (empty($_POST["phno"])) {
    $nameErr = "Name is required";
  } else {
    $phno1 = test_input($_POST["phno"]);
    // check if name only contains letters and
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email1= test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender1 = test_input($_POST["gender"]);
  }
  
  
  
$sql = "INSERT INTO scribe(name, email,password,gender,phoneno)
VALUES ('$name1', '$email1','$password1', '$gender1','$phno1')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header('Location:scribelogin.php');
	
} else {
    echo "Error: " ;
}
}

	}else{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name1 = test_input($_POST["uname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["pwd"])) {
    $nameErr = "Password is required";
  } else {
    $password1 = test_input($_POST["pwd"]);
    // check if name only contains letters and whitespace
    
  }
  
  
  if (empty($_POST["phno"])) {
    $nameErr = "Name is required";
  } else {
    $phno1 = test_input($_POST["phno"]);
    // check if name only contains letters and whitespace
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else 
  {
    $email1= test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender1 = test_input($_POST["gender"]);
  }
  
  
  
$sql = "INSERT INTO stureg (name, email,password,gender,phoneno)
VALUES ('$name1', '$email1','$password1', '$gender1','$phno1')";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	header('Location:stulogin.php');
} else {
    echo "Error: " ;
}
}
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}






?>



</body>
</html>

</html>