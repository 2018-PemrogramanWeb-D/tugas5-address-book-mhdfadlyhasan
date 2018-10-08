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
$sql = "SELECT no,Nama,Provinsi,Kota,Jalan,KodePos,NomorHp,`E-Mail` FROM addressbook";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    while($row = $result->fetch_assoc()) {
        echo "no: " . $row["no"]. " Nama: " . $row["Nama"]." Nomor Hp: " . $row["NomorHp"]."<br>";
    }
}
else echo "This list is empty";

?>
</html>