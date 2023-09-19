<div class="card mb-3" style="max-width: 650px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $movie->getCover() ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><B><?php echo $movie->getTitle() ?></B></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Réalisateur: <?php echo $movie->getDirector() ?></li>
                    <li class="list-group-item">Date de sortie: <?php echo $movie->getReleaseYear() ?></li>
                    <li class="list-group-item">Genre: <?php echo $movie->getCategory() ?></li>
                </ul>
                <p class="card-text ms-3">Synopsis: <?php echo $movie->getDescription() ?></p>
                <a href="#" class="card-link ms-3">Voir plus</a>
            </div>
        </div>
    </div>
</div>