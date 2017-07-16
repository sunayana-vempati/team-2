<html>
<?php
if (isset($_POST["req"])) {
	
	$quali1 =$_POST["qual"];
	
	$cars = array("SSC", "Intermediate 1st year", "Intermediate 2nd year","Graduation");
	$length=sizeof($cars);
	for($x=0;$x<$length;$x++)
	{
		if $quali1==$cars[$x];
		$y=$x;
	}
}

$sql = "SELECT email, qual FROM scribeup2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
          echo $row["qual"];
    }


?>
</html>