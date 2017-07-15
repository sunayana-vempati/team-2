<html><!DOCTYPE html>
<html>
<style>
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
<body>

<h2 style="margin-left:250px;color:green;">Welcome</h2>

<div style="width:50%;margin-left:250px" >
    <form action="" method="post">
	<label>Type:</label>
		<span style="color:red">*</span>
        <input type="radio" name="user" value="scribe" checked> scribe<br>
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
	</div>
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


if (isset($_POST["Submit"])) {
	
if($_POST["user"]=="scribe")
	{
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
	header('Location:stulogin.php');
	
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
	header('Location:scribelogin.php');
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