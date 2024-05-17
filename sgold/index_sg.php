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
        <?php
            var_dump($oeuvres[2]);
            echo "<h1>" . $oeuvres[2][1] . "</h1>";
        
        ?>

        <div id="liste-oeuvres">
        <?php for ($lines = 0; $lines <= 14; $lines++): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?numero=<?php echo $oeuvres[$lines][0]; ?>">
                    <img src="<?php echo $oeuvres[$lines][1] ; ?>" alt="<?php echo $oeuvres[$lines][3] ; ?>">
                    <?php echo "<h2>" . $oeuvres[$lines][3] . "</h2>"; ?>
                    <p class="description"><?php echo $oeuvres[$lines][4] ; ?></p>
                </a>
            </article>
            <?php endfor; ?>
        </div>
    </main>
    <?php include('footer.php'); ?></body>
</html>