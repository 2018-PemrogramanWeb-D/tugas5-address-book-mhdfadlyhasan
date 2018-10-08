<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
</body>

<?php
include("index.php");
      $sql = "UPDATE addressbook SET Nama='".$_POST["Nama"]."' WHERE no=".$_POST["indexupdate"];if ($conn->query($sql) === TRUE)echo "berhasil update nama" ;
      $sql = "UPDATE addressbook SET Provinsi='".$_POST["Provinsi"]."' WHERE no=".$_POST["indexupdate"];if ($conn->query($sql) === TRUE)echo "berhasil update provinsi" ;
      $sql = "UPDATE addressbook SET Kota='".$_POST["Kota"]."' WHERE no=".$_POST["indexupdate"];if ($conn->query($sql) === TRUE)echo "berhasil update kota" ;
      $sql = "UPDATE addressbook SET Jalan='".$_POST["Jalan"]."' WHERE no=".$_POST["indexupdate"];if ($conn->query($sql) === TRUE)echo "berhasil update jalan" ;
      $sql = "UPDATE addressbook SET KodePos='".$_POST["KodePos"]."' WHERE no=".$_POST["indexupdate"];if ($conn->query($sql) === TRUE)echo "berhasil update kodepos" ;
      $sql = "UPDATE addressbook SET NomorHp='".$_POST["NomorHp"]."' WHERE no=".$_POST["indexupdate"];if ($conn->query($sql) === TRUE)echo "berhasil update nomorhp" ;
      $sql = "UPDATE addressbook SET `E-mail`='".$_POST["Email"]."' WHERE no=".$_POST["indexupdate"];
if ($conn->query($sql) === TRUE)echo "berhasil updateemail" ;
else echo "failed";

header("Location: main.html");

?>

