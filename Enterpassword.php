<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enter new passward</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <link rel="stylesheet" href="css/style1.css">
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
            <div class="Passward-confirm">
                <div class="enter-code text-center">
                    <br><br><br><br><strong>Enter your new passward below!</strong>
                </div>
                <form>
                    <div class="entry-pass offset-2 offset-sm-4 mt-3">
                        passward :  <input type="text"  placeholder="enter new passward" required pattern="^[a-zA-Z]\w{3,14}$">
                    </div>
                    <div class="entry-pass2 offset-2 offset-sm-4 mt-3">
                        passward*: <input type="text"  placeholder="Re-enter new passward" required pattern="^[a-zA-Z]\w{3,14}$">
                    </div>
                    <div class="submit offset-2 offset-sm-4 mt-3">
                        <a href="nextforget.php"><input type="button" value="Submit"></a>
                    </div>
                </form>
            </div>
        </div>
        <div class="footer">
        </div>
    </div>
</div>

</body>
<?php require "Footer.php";
?>

</html>