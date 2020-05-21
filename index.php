<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.css'/>
  <link rel="stylesheet" href="dist/style/main.css">
  <title>Document</title>
</head>
<body>

  <div id="app">
    
    <!-- Header -->
    <header class="header">
      <div class="header__wrapper">
        <nav class="header__nav">
          <img class="header__logo" src="dist/img/spotify-logo.png" alt="Header Logo">
          <input class="header__inputbox" type="text" placeholder="Ricerca un Album">
        </nav>
      </div>
    </header>

    <!-- Main -->
    <main class="main">
      <div class="main__wrapper">
       
      </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <a href="http://localhost:8888/php-ajax-dischi/index-old.php">GO TO MILESTONE #1</a>
    </footer>

  </div>


  <!-- Template Handlebars -->
  <script id="card-template" type="text/x-handlebars-template">
    <div class="card">
      <img class="card__logo" src="{{ logo }}" alt="card logo">
      <h3 class="card__title">{{ title }}</h3>
      <h4 class="card__author">{{ author }}</h4>
      <h5 class="card__year"> {{ year }}</h5>
    </div>
  </script>

 <!-- HANDLEBARS -->
 <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
  <!-- My Script -->
  <script src="dist/script/main.js"></script>
</body>
</html>