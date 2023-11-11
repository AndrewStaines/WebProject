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
$n=$_POST['name'];
$no=$_POST['sno'];
$sql = "DELETE FROM tab1 WHERE name='$n' AND SNO='$no'";
$sql1 = "SELECT * FROM tab1 WHERE name='$n' AND SNO='$no'";
$result = $conn->query($sql1);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((strcmp($row["name"],$_POST["name"]) == 0) and $row["SNO"]==$no )
{
    if (mysqli_query($conn, $sql))
{
header("location:view.php");
}
else
{
echo "Error: " . $sql . " " . mysqli_error($conn);
}
}
}
}
else
{
// header("location:sell.php");
echo "<script>alert('Incorrect Details!!!'); window.location='sell.php';</script>";
}

$conn->close();
?>
</body>
</html>