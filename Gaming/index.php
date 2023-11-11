<?php     
    session_start(); 
    if (isset($_GET['logout'])) 
    {
        session_destroy();
        unset($_SESSION['name']);
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drew Gaming</title>
    <link rel="stylesheet" href="new.css">
</head>
<body class="bg">    
        <?php if (!isset($_SESSION['name'])){?>
            <h1>Drew Gaming</h1>
            <div class="container">
        <div class="cont">
    <h4>All your favourite games at one place...</h4>
    <div class="but">
        <button><a href="login.php">Login</a></button>
    <button><a href="register.php">Sign Up</a></button>
    </div>  
    </div> 
<?php }?>
        
</div>
<ul>
<?php if (isset($_SESSION['name']))
{?>
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
<div id="slideshow">
<div class="slide-wrapper">
<div class="slide">
<img src="1.jpg" alt="" height="550px" width="1000px">
</div>
<div class="slide">
<img src="2.jpg" alt="" height="550px" width="1000px">
</div>
<div class="slide">
<img src="3.jpeg" alt="" height="550px" width="1000px">
</div>
<div class="slide">
<img src="4.jpg" alt="" height="550px" width="1000px">
</div>
</div>
</div>
<br><br>
<div id="slideshow">
<div class="slide-wrapper">
<div class="slide">
<img src="5.jpg" alt="" height="550px" width="1000px">
</div>
<div class="slide">
<img src="6.jpg" alt="" height="550px" width="1000px">
</div>
<div class="slide">
<img src="7.jpeg" alt="" height="550px" width="1000px">
</div>
<div class="slide">
<img src="8.jpg" alt="" height="550px" width="1000px">
</div>
</div>
</div>
<?php }?>
</ul>
</body>
</html>