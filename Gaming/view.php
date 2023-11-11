<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sell Games</title>
    <link rel="stylesheet" href="style5.css">
</head>

<body class="bg">
    <!-- <h1>Drew Gaming</h1> -->
    <div class="nav">
<h1 class="logo">Drew Gaming</h1>
<div class="content">
<a href="index.php">Home</a>
<a href="buy.php">Buy</a>
<a href="view.php">Sell</a>
 <a href="index.php?logout='1'">Logout</a>
</div>
</div>
<br><br>
    <div class="container1">
        <div class="tab">
        <?php
        $host = "localhost";
        $username = "root";
        $password = "";
        $db_name = "products";
        $conn = mysqli_connect($host, $username, $password, $db_name);

        $sql = "SELECT * FROM tab1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<table class="da" border="1px" cellspacing="0px" cellpadding="10px">';
            echo '<tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Game</th>
                    <th>Copies</th>
                    <th>Sell</th>
                </tr>';

            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row["SNO"] . '</td>';
                echo '<td>' . $row["name"] . '</td>';
                echo '<td>' . $row["phone"] . '</td>';
                echo '<td>' . $row["email"] . '</td>';
                echo '<td>' . $row["game"] . '</td>';
                echo '<td>' . $row["copies"] . '</td>';
                echo '<td>' . '<a href="sell.php"><input type="button" class="b" value="Sell"></a>' . '</td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo 'No data found';
        }

        $conn->close();
        ?>
        </div>
    </div>
</body>

</html>
