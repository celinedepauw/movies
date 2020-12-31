<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Films</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2? family = JetBrains + Mono & display = swap" rel="feuille de style">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=$baseUri;?>/assets/css/style.css">
</head>

<body>
    <header>
        <h1>Qu'est-ce-qu'on regarde ce soir ? </h1>
        <p class="lead font-italic">Et si ce soir, au lieu de regarder Netflix ou Canal +, on se regardait un DVD comme au bon vieux temps? <br>
            Oui, mais lequel ???? On en a tellement....</p>
        <div class="navbar text-center">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?=$baseUri?>">Accueil <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[0]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[0]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[1]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[1]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[2]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[2]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[3]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[3]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[4]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[4]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[5]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[5]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[6]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[6]['category_name']; ?></a>
                        </li>
                        <li class="nav-item">
                        <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[7]['id']
          ]
          );
              ?>
                            <a class="nav-link" href="<?=$url?>"><?= $categories[7]['category_name']; ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

    </header>