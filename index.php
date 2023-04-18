<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['LoggedIn'])){
	header('Location: ./auth/login.php');
}
?>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="styles.css" />
</head>
<body>

</body>
</html>