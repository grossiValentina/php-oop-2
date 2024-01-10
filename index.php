<?php
require_once __DIR__ . "/Models/Prodotto.php";
require_once __DIR__ . "/Models/Cibo.php";
require_once __DIR__ . "/Models/Gioco.php";
require_once __DIR__ . "/Models/Cucce.php";


$primo_prodotto = new Cibo("croccantini", 10, "immagine", "cane", "10-01-2024");
$secondo_prodotto = new Gioco("osso", 5, "immagine", "cane", "plastica");
$secondo_prodotto->setColorabile("rosso");

$terzo_prodotto = new Cucce("primer", 27, "immagine", "gatto", "S");
$terzo_prodotto->setColorabile("giallo");


var_dump($primo_prodotto);
var_dump($secondo_prodotto);
var_dump($terzo_prodotto);

$prodotti = [
    $primo_prodotto,
    $secondo_prodotto,
    $terzo_prodotto,
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center p-3">Pet Shop </h1>

        <div class="row row-cols-3 d-flex justify-content-evenly mt-4">

            <?php foreach($prodotti as $prodotto) { ?>
            
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $prodotto->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h5 class="card-text"> <?php echo $prodotto->nome ?> </h5>
                        <h6 class="card-text"> <?php echo $prodotto->prezzo ?> €</h6>
                        <p class="card-text"> <?php echo $prodotto->categoria ?> </p>
                      
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>

</body>

</html>