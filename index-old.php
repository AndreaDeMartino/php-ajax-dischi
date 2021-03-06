<?php //Import Data Source
  include __DIR__ . '/dist/partials/data.php' 
?>

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
        </nav>
      </div>
    </header>

    <!-- Main -->
    <main class="main">
      <div class="main__wrapper">

        <?php foreach($albums as $album){?>
        <div class="card">
          <img class="card__logo" src="<?php echo $album['logo'] ?>" alt="card logo">
          <h3 class="card__title"><?php echo $album['title'] ?></h3>
          <h4 class="card__author"><?php echo $album['author'] ?></h4>
          <h5 class="card__year"><?php echo $album['year'] ?></h5>
        </div>
        <?php }?>

      </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
      <a href="http://localhost:8888/php-ajax-dischi/index.php">GO TO MILESTONE #2</a>
    </footer>

  </div>

</body>
</html>