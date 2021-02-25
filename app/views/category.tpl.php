<section>
    <h2 class="category-title"><?= $category->getCategoryName(); ?></h2>
    <div class="container-fluid" id="movies-list">
        <?php
        foreach ($movies as $movie) {
            echo '<div class="col-12 col-md-6 col-lg-3 movie">';
            echo '<h3 class="movie-title">' . $movie->getName() . '</h3>';
            echo '<p class="year">' . $movie->getYear() . '</p>';
            echo '<p class="duration">(' . $movie->getDuration() . ')</p>';
            echo '<p class="type">' . $movie->getType() . '</p>';
            echo '</div>';
        }
        ?>
    </div>
    <div id="toTop">
        <a href="#top"><img src="../assets/images/top.webp" alt="back to top"></a>
    </div>
</section>