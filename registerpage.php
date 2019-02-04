<?php

include ('db_connection.php');
$error_msg = '';
if(isset($_POST['submit'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $frstname = $_POST['fname'];
    $lstname = $_POST['lname'];
    $sel_user = "insert into user_info (first_name,last_name,email,password) values ('$frstname','$lstname','$email','$pass')";
    $run_user = mysqli_query($con, $sel_user);


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/styleerg.css">

</head>
<body>


<?php require "Header.php ";
?>

<div class="regbox" style="top: 65%">
    <h1> Create a new account </h1>
    <form method="post" action="registerpage.php">
        <p>Username</p>
        <input type="text" name="inv" required pattern="^\D([a-z]|[A-Z]){3,}\d*?" placeholder="Enter Username" >
        <p>Firstname</p>
        <input type="text" name="fname" required pattern="^[A-Z]*|[A-Z][a-z]*|[a-z]*" placeholder="Enter first-name" >
        <p>Lastname</p>
        <input type="text" name="lname" required pattern="^[A-Z]*|[A-Z][a-z]*|[a-z]*" placeholder="Enter last-name" >
        <p>E-mail</p>
        <input type="email" name="user_email"  placeholder="Enter e-mail" >
        <p>Passsword</p>
        <input type="password" name="user_pass" required pattern="^(([A-Z]+)[a-z]{3,})\d+[a-z]*?[A-Z]*?" placeholder="Enter Password" >

        <input type="submit" name="submit" value="Create account">
        <a href="loginpage.php">Already registered?</a><br>


    </form>
</div>
<div class="footer">
</div>
<div class="footer">
</div>
<div class="footer">
</div>
<div class="footer">
</div>

<?php require "Footer.php";
?>
</body>
</html>