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
$sql = "DELETE FROM addressbook WHERE no=".$_POST["indexdelete"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
}
else echo "failed";
header("Location: main.html");
?>

</html>