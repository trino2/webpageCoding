<?php
    session_start(); 
    $errorMessage = $_SESSION['message'];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Otter Express</title>
        <link rel="shortcut icon" href="https://csumb.edu/sites/default/files/pixelotter.png" type="image/png">
        <link type="text/css" rel="stylesheet" href="CoolStyle.css">
    </head>
    <body>
        <div align="center">
            <header>
                  <h1>Otter Express - Admin Login</h1>
            </header>
            <?php
                if ($errorMessage) {
                    echo "<div>$errorMessage</div>";
                }
            ?>
            <div align="center">
                <form method="post" action="loginProcess.php">
                    Username: <input type="text" name="username" /> <br><br>
                    Password: <input type="password" name="password" /><br><br />
                    <input type="submit" value="Login" name="loginForm" />
                </form>
            </div>
            <img class="ImgCl" src="csumb-logo-blue.png">
        </div>
    </body>
</html>