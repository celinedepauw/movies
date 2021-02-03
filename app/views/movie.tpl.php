<div class="movies-container">
    <form class="movieToAdd" method="POST" action="">
        <label name="name">Ajouter un film</label>
        <input type="text" name="name" id="movieName" placeholder="nom du film"></input>
        <input type="text" name="category" id="movieCategory" placeholder="catégorie du film"></input>
        <button type="submit" class="button">Valider</button>
    </form>
    <div class="moviesList">
        <ul>
            <?php
            //dd($movies);
            foreach ($movies as $index => $movie) {
                echo '<li>' . $movies[$index]['name'] . '</li>';
            }
            ?>
        </ul>
    </div>
</div>