<?php
//dump($movies);
?>


<section>

    <h2><?=$category->getCategoryName();?></h2>
        <ul id="movies-list">
            <?php
                foreach($movies as $movie){
                    echo '<div class="movie">' . '<h3 class="movie-title">' . $movie->getName() . '</h3>';
                    echo '<p class="year">' . $movie->getYear() . '</p>';
                    echo '<p class="duration">(' . $movie->getDuration() . ')</p>';
                    echo '</div>';
                }
            ?>
        </ul>

</section>


              
