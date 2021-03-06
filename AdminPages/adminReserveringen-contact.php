<?php
include_once("../Includes/session.php")
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Home Page Admin</title>
  </head>
  <body>
    <?php
      include('../Includes/adminHeader.php');
    ?>

    <main class="adminMain">
      <div class="adminRow tableRow">
        <div>
          <h2>Reserveringen</h2>
        </div>
        <table>
          <tr>
            <th class="naam">Volledige naam</th>
            <th class="email">E-mail</th>
            <th class="personen">Personen</th>
            <th class="datum">Datum</th>
            <th class="tijd">Tijd</th>
            <th class="bijzonderheden">Bijzonderheden</th>
            <th class="gerechtDelete">Verwijderen</th>
          </tr>
          <?php
            include('../Includes/reserveringBerichten.php')
          ?>
        </table>
      </div>
      <div class="adminRow tableRow">
        <div>
          <h2>Contact</h2>
        </div>
        <table>
          <tr>
            <th class="naam">Volledige naam</th>
            <th class="email">E-mail</th>
            <th class="onderwerp">onderwerp</th>
            <th class="bericht">Contact bericht</th>
            <th class="gerechtDelete">Verwijderen</th>
          </tr>
          <?php
            include('../Includes/contactBerichten.php')
          ?>
        </table>
      </div>
    </main>

    <?php
      include('../Includes/adminFooter.php');
    ?>
    <script src="../JS/main.js"></script>
  </body>
</html>
