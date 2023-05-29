<?php
include('header.php');
include('oeuvres.php'); ?>
<div id="liste-oeuvres">
    <?php foreach ($oeuvres as $value) : ?>
    <article class="oeuvre">
        <a href="oeuvre.php?id=<?php echo $value['id']; ?>">
            <img src="<?php echo $value['img']; ?>" alt="<?php echo $value['author'];?>">
            <h2><?php echo $value['author']; ?></h2>
            <p class="description"><?php echo $value['description'];?></p>
        </a>
    </article>
    <?php endforeach ?>
</div>
</main>
<?php include('footer.php'); ?>

