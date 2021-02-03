<section>
  <div class="container-fluid">

<?php
  foreach($categories as $index => $category):
?> 

      <div class="movie-category">
        <div class="card border-0 text-light text-center"><img src="<?= $categories[$index]['category_picture']; ?>" alt="Card image" class="card-img">
          <div class="card-img-overlay d-flex align-items-center">
            <div class="w-100">
              <?php
              $url = $router->generate(
                'category',
          [
            'idCategory' => $categories[$index]['id']
          ]
          );
              ?>
              <a href="<?=$url;?>">
                <h2 class="category-name display-3 font-weight-bold mb-4 p-1"><?= $categories[$index]['category_name']; ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
        <?php endforeach;?>   
    </div>             
    </div>

  </div>
</section>
