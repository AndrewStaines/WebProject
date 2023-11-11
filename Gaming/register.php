<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="style2.css">
    <script src="valid.js"></script>
</head>
<body class="bg">
<h1>Drew Gaming</h1>
    <div class="container">
        <form action="reg.php" method="post">
            <h2>Register</h2>
            <div class="in">
                <input type="text" name="name" placeholder="Name" required ><br><br><br>
            <input type="text" name="phone" maxlength="10" placeholder="Phone Number"><br><br><br>
            <input type="email" name="email" id="emailField" oninput="validateEmail(emailField.value)" placeholder="E-Mail"><br>
            <span id="emailError" style="color: rgb(255, 93, 93); margin-right: 350px"></span><br><br>
            <input type="Password" name="pass" placeholder="Password" required id="p" oninput="vpass(p.value)"><br>
            <span id="dp" style="color: rgb(255, 93, 93); margin-right: 20px" ></span><br><br>
            <input type="Password" name="pwd" placeholder="Confirm Password" required id="cp" oninput="vcpass(cp.value)"><br>
            <span id="dcp" style="color: rgb(255, 93, 93); margin-right: 250px"></span><br>
            </div>
            <h3>Gender</h3>
            <div class="radio">
                <input type="radio" id="hello" name="Male" checked >
            <label>Male</label><br><br>
            <input type="radio" id="radio" name="Female">
            <label>Female</label>
            </div><br><br>
            <fieldset class="b">
                <legend>Favourite Genres</legend>
                <div class="choices">
                    <input type="checkbox" name="f1">
            <label>Action</label><br><br>
            <input type="checkbox" name="f2">
            <label>Role Play</label><br><br>
            <input type="checkbox" name="f3">
            <label>Sports</label><br><br>
                </div>
            </fieldset><br>
            <h3>Prefered Payment</h3>
            <input list="city" required class="l">
            <datalist id="city">
                <option>Credit</option>
                <option>Debit</option>
                <option>Net Banking</option>
                <option>UPI</option>
            </datalist><br><br>
            <textarea name="Andrew" cols="50" rows="10" placeholder="Describe Yourself"></textarea><br><br>
            <input class="bt" type="submit" name="done">    
        </form>
    </div>
</body>
</html>