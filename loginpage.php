<?php
session_start();
include ('db_connection.php');
$error_msg = '';
if(isset($_POST['submit'])){
    $email = $_POST['user_email'];
    $pass = $_POST['user_pass'];
    $sel_user = "select * from user_info where email='$email' AND password='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);
    if($check_user==0){
        $error_msg = 'Password or Email is wrong, try again';
    }
    else{
        $_SESSION['user_email'] = $email;
        if(!empty($_POST['remember'])) {
            setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
            setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
        } else {
            setcookie('user_email','' );
            setcookie('user_pass', '');
        }
        header('location:index.php?logged_in=successfully logged in!');
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/stylelog.css">
</head>
<body>


<?php require "Header.php ";
?>

<div class="loginbox" style="top: 55%">

    <h1 style="font-weight: bold"> Login </h1>
    <form action="loginpage.php" method="post">
        <p>Email</p>
        <input type="email" placeholder="Enter Email" name="user_email" value="<?php echo @$_COOKIE['user_email']?>"
               style="border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;">
        <p>Passsword</p>
        <input type="password" name="user_pass" placeholder="Enter Password" value="<?php echo @$_COOKIE['user_pass']?>">
        <input type="submit" name="submit" value="login">
        <a href="Enterpassword.php">Forgot Password?</a><br>
        <a href="registerpage.php">Create a new account</a>
    </form>
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
