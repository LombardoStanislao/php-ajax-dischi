<?php

  include 'dischi.php';

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../dist/app.css">
    <title>PHP | Dischi</title>
  </head>
  <body>
    <header>
      <h1>
        PHP - JS - AJAX - DISCHI
      </h1>

    </header>

    <main>

      <div class="container">

        <?php foreach ($dischi as $disco) { ?>

          <div class="card">
            <img src="<?php echo $disco['poster']; ?>" alt="">
            <h4> <?php echo $disco['title']; ?> </h4>
            <p><?php echo $disco['author']; ?></p>
            <small> <?php echo $disco['year']; ?></small>


          </div>

        <?php
        } ?>






      </div>

    </main>
  </body>
</html>
