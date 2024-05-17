<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>

    <?php include('header.php'); ?>
    <?php include('tableoeuvres.php'); ?>

    <main>

    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?php echo $oeuvres[$_GET['numero']][1] ; ?>" alt="<?php echo $oeuvres[$_GET['numero']][3] ; ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?php echo $oeuvres[$_GET['numero']][3] ; ?></h1>
            <p class="description"><?php echo $oeuvres[$_GET['numero']][4] ; ?></p>
            <p class="description-complete"><?php echo $oeuvres[$_GET['numero']][5] ; ?>
            </p>
        </div>
    </article>
</main>
<?php include('footer.php'); ?></body>
</body>
</html>
