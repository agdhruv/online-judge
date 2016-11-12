<?php
	session_start();

	if(!isset($_SESSION["user"]))
    {
        header("Location: login.php"); 
        exit;
    }
	$dbhost = "localhost";
    $dbuser = "agdhruv";
    $dbpass = "haha";
    $dbname = "onlineJudge";
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sumbit Code</title>
</head>
<body>
	<form method="POST" action="submit-code.php">
		Your code: <textarea name="submittedCode" cols="30" rows="10"></textarea><br>
		<input type="submit" required>
	</form>
	<a href="logout.php">Logout</a>
</body>
<?php
	mysqli_close($conn);
?>
</html>