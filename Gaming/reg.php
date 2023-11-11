<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "gaming";
$conn = mysqli_connect($host, $username, $password, $db_name);
if (!$conn)
{
echo "Connection failed!". "<br>";
}
else
{
//php is connected to stu_registration_form DB
echo "Connection Successful". "<br>";
}
$n=$_POST["name"];
$p=$_POST["phone"];
$e=$_POST["email"];
$p1=$_POST["pass"];
$p2=$_POST["pwd"];
$sql = "INSERT INTO tab1 (name,Phone,emailid,pass,cpass)
VALUES ('$n','$p','$e','$p1','$p2')";
if (mysqli_query($conn, $sql))
{
echo "New record created successfully !";
header("location:index.php");
}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
$conn->close();
?>
</body>
</html>