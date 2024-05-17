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
        <div id="liste-oeuvres">
        <?php for ($lines = 0; $lines < count($oeuvres); $lines++): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?numero=<?php echo $lines; ?>">
                    <img src="<?php echo $oeuvres[$lines][1] ; ?>" alt="<?php echo $oeuvres[$lines][3] ; ?>">
                    <h2><?php echo $oeuvres[$lines][3] ; ?></h2>
                    <p class="description"><?php echo $oeuvres[$lines][4] ; ?></p>
                </a>
            </article>
            <?php endfor; ?>
        </div>
    </main>
    <?php include('footer.php'); ?></body>
</html>