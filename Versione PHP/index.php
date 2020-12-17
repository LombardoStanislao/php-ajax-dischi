<?php

  include _DIR_ .'dischi.php';

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
            <h4> New Jersey </h4>
            <p>Bon Jovi</p>
            <small> 1988 </small>


          </div>

        <?php
        } ?>






      </div>

    </main>
  </body>
</html>
