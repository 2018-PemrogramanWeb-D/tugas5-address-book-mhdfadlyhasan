<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="addressbookmahasiswa";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn) echo "Success";

else die("Connection Failed: "	.mysqli_connect_error());

header("Location: main.html");
?>
</body>
</html>