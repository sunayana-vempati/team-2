<html>
<?php
session_start();

echo "Msg is : " . $_SESSION["msg"] . ".<br>";

$_SESSION["msg"] = "I'm ready to write your exam!! ";

?>
<div style="width:50%;margin-left:250px" >
    <form action="admin.php" method="post">
	<input type="submit" name="Accept">
	</form>

</html>
