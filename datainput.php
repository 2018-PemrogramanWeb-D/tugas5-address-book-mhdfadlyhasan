<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>

</body>

<?php
include ("index.php");
 $sql = "INSERT INTO addressbook (Nama,Provinsi,Kota,Jalan,KodePos,NomorHp,`E-Mail`)
    VALUES ('".$_POST["Nama"]."','".$_POST["Provinsi"]."','".$_POST["Kota"]."','".$_POST["Jalan"]."','".$_POST["KodePos"]."','".$_POST["NomorHp"]."','".$_POST["Email"]."');";

if($conn->query($sql)===TRUE)
{
    echo "succed record";
}
else echo "Error";
header("Location: main.html");
?>
</html>