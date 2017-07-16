<html>
<?php

$conn = mysqli_connect("localhost","root","","cfg2");

$sql = ("SELECT email FROM student_update where status = 'one' ");
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Email: " . $row["email"]. "<br>";
    }
} else {
    
}
?>

</html>