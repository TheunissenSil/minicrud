<?php
include_once("../Includes/session.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../CSS/style.css" />
<title>Home Page Admin</title>
</head>
<body>
<?php
    include('../Includes/adminHeader.php');
?>
        
<main class="adminMain">
    <div class="adminRow">
        <div class="adminColumn">
            <h2 class="titleLine">Welkom, <?php echo $_SESSION['name']; ?></h2>
            <div class="adminLine"></div>
            <p>
                U kunt in het admin panel gerechten aanpassen, reserveringen inzien, contact berichten inzien en nog een hele hoop andere dingen
            </p>
        </div>
        <div class="adminColumn">
            <div class="adminForm registreer">
                <h2>Nieuwe werknemer registeren</h2>
                <form class="formulier" action="../PHP/register.php" method="post">
                    <?php if(isset($_GET['error'])) { ?>
                        <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <h3>Username</h3>
                    <input class="inputForm" placeholder="Uw username....." type="text" name="username">
                    <h3>Email</h3>
                    <input class="inputForm" placeholder="Uw email....." type="text" name="email">
                    <h3>Password</h3>
                    <input class="inputForm" placeholder="Uw password....." type="Password" name="password">
                    <h3>Confrim Password</h3>
                    <input class="inputForm" placeholder="Confirm password....." type="Password" name="confirmPassword">
                    <input name="registerSubmit" type="submit" value="Registreren" class="submitadminForm">
                </form>
            </div>
        </div>
    </div>
</main>
<?php
    include('../Includes/adminFooter.php');
?>
<script src="../JS/main.js"></script>
</body>
</html>
