<h1><?php echo $movie['Title']; ?></h1>
<h3><?php echo $movie['Category']; ?></h3>

<div class="card mb-3" style="max-width: 700px;">
    <div class="row g-0">
        <div class="col-md-4">
            <img src="<?php echo $movie['Cover'] ?>" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title"><B><?php echo $movie['Title'] ?></B></h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Réalisateur: <?php echo $movie['Director'] ?></li>
                    <li class="list-group-item">Date de sortie: <?php echo $movie['Release_year'] ?></li>
                    <li class="list-group-item">Genre: <?php echo $movie['Category'] ?></li>
                </ul>
                <p class="card-text ms-3">Synopsis: <?php echo $movie['Description'] ?></p>
            </div>
        </div>
    </div>
</div>