<?php
//dump($categories);
//echo $categories[0]['category_name'];

//foreach($categories as $index => $category){
//echo $categories[$index]['category_name'];
// echo '<br>';
//}
?>
<section>
  <div class="container-fluid">
    <div class="row mx-0">
      <div class="col-md-6">
        <div class="card border-0 text-light text-center"><img src="<?= $categories[0]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100 py-3">
              <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[0]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[0]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 text-light text-center"><img src="<?= $categories[1]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100 py-3">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[1]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[1]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mx-0">
      <div class="col-md-6">
        <div class="card border-0 text-center text-light"><img src="<?= $categories[2]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[2]['id']
          ]
          );
              ?>
              <a href=""<?=$url;?>>
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[2]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 text-center text-light">
          <img src="<?= $categories[3]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[3]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[3]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-0">
      <div class="col-md-6">
        <div class="card border-0 text-center text-light"><img src="<?= $categories[4]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[4]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[4]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 text-center text-light"><img src="<?= $categories[5]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[5]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[5]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mx-0">
      <div class="col-md-6">
        <div class="card border-0 text-center text-light"><img src="<?= $categories[6]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[6]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[6]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card border-0 text-center text-light"><img src="<?= $categories[7]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
            <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[7]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="display-3 font-weight-bold mb-4"><?= $categories[7]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>