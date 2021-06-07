<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Films</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2? family = JetBrains + Mono & display = swap" rel="feuille de style">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= $baseUri; ?>/assets/css/style.css">
</head>

<body>
  <header>
    <h1>Qu'est-ce-qu'on regarde ce soir ? </h1>
    <p class="lead font-italic">Et si ce soir, au lieu de regarder Netflix ou Canal +, on se regardait un DVD comme au bon vieux temps? <br>
      Oui, mais lequel ???? On en a tellement....</p>

      <?php // var_dump($categories) ?>

    <div class="navbar text-center">
      <nav class="navbar navbar-expand navbar-light">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="d-flex flex-wrap justify-content-center navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?= $router->generate('home'); ?>">Accueil</a>
            </li>
            <?php foreach ($categories as $i => $cat) : ?>
              <li class="nav-item">
                <?php
                $url = $router->generate(
                  'category',
                  [
                    'idCategory' => $categories[$i]['id']
                  ]
                );
                ?>
                <a class="nav-link" href="<?= $url ?>"><?= $categories[$i]['category_name']; ?></a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav>
    </div>

  </header>