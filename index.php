<?php 
    require 'database/discsDatabase.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Php Ajax Dischi</title>
</head>
<body>

    <!-- 

    Descrizione:
    Create un array di 10 dischi (con, per ciascun disco, informazioni su titolo, autore, anno, genere e percorso della copertina) in un file database.php.
    Importate questo file in un file index.php nel quale stampare, lato server, una card per ogni disco.

    Bonus:
    Una volta completata la parte PHP dell'esercizio, se volete, potete creare un layout (HTML/CSS) diverso da quello definito qualche giorno fa per l'analogo esercizio fatto con i componenti Vue. 

    -->

    <main>
        <section class="discs">
            
            <?php foreach ($discsDatabase as $disc) { ?>
                
                <div class="disc">
                    <img src="<?php echo $disc["poster"]; ?>" alt="<?php echo $disc["title"]; ?>">
                    <h2><?php echo $disc["title"]; ?></h2>
                </div>
                
            <?php } ?>
            
            
            
        </section>
    </main>

</body>
</html>