<?php require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/Libro.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>
<body>
    <header>
        <h1>E-Commerce Libri</h1>
    </header>

    <main>
<section>
<h2>Utente:</h2>
<?php $user1 = new User('Giuseppe', 'Rossi', 55);?>
<h3><?php echo $user1->getFullName(); ?></h3>
<div>Età: <?php echo $user1->getEta(); ?></div>
</section>
<section>
<h2>Libro:</h2>
<?php
$libro1 = new Libro('Odissea', 'Omero', 35)?>
<h3><?php echo $libro1->getTitolo(); ?></h3>
<h4>Scritto da: <?php echo $libro1->getScrittore(); ?></h4>
<div>Prezzo: <?php echo $libro1->getPrezzo(); ?></div>
</section>
    </main>
</body>
</html>