<div class="card mb-3" style="max-width: 650px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $movie['Cover'] ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><B><?php echo $movie['Title'] ?></B></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><B>Réalisateur: </B><?php echo $movie['Director'] ?></li>
                    <li class="list-group-item"><B>Date de sortie: </B><?php echo $movie['Release_year'] ?></li>
                    <li class="list-group-item"><B>Genre: </B><?php echo $movie['Category'] ?></li>
                </ul>
                <p class="card-text ms-3"><B>Synopsis: </B><?php echo $movie['Description'] ?></p>
                <a class="ms-3" href="/single_movie.php?id=<?php echo $movie['id']; ?>" class="card-link">Voir plus</a>
            </div>
        </div>
    </div>
</div>