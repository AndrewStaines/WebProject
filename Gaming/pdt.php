<html>
<body>
<?php
$host= "localhost";
$username= "root";
$password = "";
$db_name = "products";
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
$e=$_POST["email"];
$p=$_POST["phone"];
$na="Modern Warfare II";
$c=$_POST["count"];
$sql = "INSERT INTO tab1 (name,phone,email,game,copies)
VALUES ('$n','$p','$e','$na','$c')";
if (mysqli_query($conn, $sql))
{
// echo "New record created successfully !";
echo "<script>alert('Purchased Successfully....'); window.location='index.php';</script>";

}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
$conn->close();
?>
</body>
</html>