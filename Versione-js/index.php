<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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


      </div>

    </main>

    <script src="../dist/app.js" charset="utf-8"></script>
    <script id="card-template" type="text/x-handlebars-template">
      <div class="card">
        <img src="{{poster}}" alt="{{title}}">
        <h4>{{title}}</h4>
        <p>{{author}}</p>
        <small>{{year}}</small>
      </div>
    </script>
  </body>
</html>
