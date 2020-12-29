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
          <div class="card border-0 text-light text-center"><img src="assets/images/2-action.jpeg"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-3 font-weight-bold mb-4"><?=$categories[0]['category_name'];?></h2><a href="category.html"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 text-light text-center"><img src="assets/images/1-comedie.jpeg"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100 py-3">
                <h2 class="display-3 font-weight-bold mb-4"><?=$categories[1]['category_name'];?></h2><a href="category.html"></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mx-0">     
        <div class="col-md-6">
          <div class="card border-0 text-center text-light"><img src="assets/images/6-drame.jpeg"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-3 font-weight-bold mb-4"><?=$categories[2]['category_name'];?></h2><a href="category.html"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
            <div class="card border-0 text-center text-light">
              <img src="assets/images/7-historique.jpeg"
                alt="Card image" class="card-img">
              <div class="card-img-overlay d-flex align-items-center">
                <div class="w-100">
                  <h2 class="display-3 font-weight-bold mb-4"><?=$categories[3]['category_name'];?></h2>
                  <a href="category.html"></a>
                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="row mx-0">
        <div class="col-md-6">
          <div class="card border-0 text-center text-light"><img src="assets/images/3-horreur.jpeg"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-3 font-weight-bold mb-4"><?=$categories[4]['category_name'];?></h2><a href="category.html"></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 text-center text-light"><img src="assets/images/5-policier-thriller.jpeg"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-3 font-weight-bold mb-4"><?=$categories[5]['category_name'];?></h2><a href="category.html"></a>
              </div>
            </div>
          </div>
        </div>
      </div>  
      <div class="row mx-0">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
          <div class="card border-0 text-center text-light"><img src="assets/images/4-science-fiction.jpeg"
              alt="Card image" class="card-img">
            <div class="card-img-overlay d-flex align-items-center">
              <div class="w-100">
                <h2 class="display-3 font-weight-bold mb-4"><?=$categories[6]['category_name'];?></h2><a href="category.html"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>