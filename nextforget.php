<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter new passward</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
</head>
<body>
<?php require "Header.php ";
?>
<div id="main">
    <div class="header">
        <div class="container">
            <div class="code-confirm">
                <div class="secure-logo text-center mt-3 "><img src="logo.png"  width="100" height="100"></div>
                <div class="enter-code text-center">
                    <strong>To protect your account security, we need to verify your identity</strong>
                </div>
                <form>
                    <div class="entry-code offset-2 offset-sm-4 mt-3">
                        <input type="text"  placeholder="54869">
                    </div>
                    <div class="submit offset-2 offset-sm-4 mt-3">
                        <a href="loginpage.php"><input type="button" value="Submit"></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
        </div>
    </div>

</body>
<?php require "Footer.php";
?>
</html>