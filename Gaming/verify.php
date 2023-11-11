<html>
<head>
<link rel="stylesheet" href="style2.css">
</head>
<body class="bg">
<?php
session_start();
$host= "localhost";
$username= "root";
$password = "";
$db_name = "gaming";
$conn = mysqli_connect($host, $username, $password, $db_name);
$sql = "SELECT * FROM tab1";
$result = $conn->query($sql);
$count = 0;
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc())
{
if((strcmp($row["name"],$_POST["name"]) == 0) and (strcmp($row["pass"],$_POST["pass"]) == 0)  )
{
    $_SESSION['name'] = $row["name"];
    header("location:index.php");
}
}
}
echo "<script>alert('Incorrect Details!!!'); window.location='login.php';</script>";
$conn->close();
?>
</body>
</html>