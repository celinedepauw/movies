<?php
//dump($movies);
?>


<section>

    <h2 class="display-3"><?=$category->getCategoryName();?></h2>
        <ul id="movies-list">
            <?php
                foreach($movies as $movie){
                    echo '<div class="movie">' . '<h3 class="movie-title">' . $movie->getName() . '</h3>';
                    echo '<p class="year">' . $movie->getYear() . '</p>';
                    echo '<p class="duration">(' . $movie->getDuration() . ')</p>';
                    echo '<p class="type">' . $movie->getType() . '</p>';
                    echo '</div>';
                }
            ?>
        </ul>

        <div id="toTop">
      <a href="#top"><img src="<?= $baseUri . '/assets/images/top.webp" alt="back to top'?>"></a>
    </div>

</section>




              
