<main>
    <?php 
    include('header.php');
    include('oeuvres.php');
    // Récupérer l'identifiant passé dans l'URL
     $id = $_GET['id'];     
    
     //faire un forEach dans le tableau oeuvres pour obtenir chaque oeuvre 
    foreach($oeuvres as $oeuvre) : ?>

     <!-- vérifier si l'identifiant est le même que celui passé dans l'URL -->
    <?php if ($oeuvre['id'] == $id): ?>
    
    <!--Affiche l'oeuvre avec le même identifiant qui est dans l'URL -->
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['author']; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvre['author']; ?></h1>
            <p class="description"><?php echo $oeuvre['description']; ?></p>
            <p class="description-complete">
            <?php print $oeuvre['description-complete']; ?>
            </p>
        </div>
    </article>

    <?php endif; ?>
    <?php endforeach ?>

</main>
<?php include('footer.php'); ?>