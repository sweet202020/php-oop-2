<?php
/* 

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/PetKennel.php';
$osso = new Toy('giocattolo a forma di osso', '20cm', '0.3kg', 'gioco', 'osso giocattolo', 8, 'https://animalmania.it/vendita/3456-large_default/chew-it-small-osso-curativo-cane.jpg', new Category('cane', 'https://www.nonsprecare.it/wp-content/uploads/2021/12/border-collie.jpg'));
$mousse = new Food('Mousse per gatti piccoli', '30 grammi', '200cal', '20/12/2024', 'cibo', 'chicken poulet', 3, 'https://www.petsplanet.it/868-full_default/mousse-pollo-per-gatti-100-g.jpg', new Category('gatto', 'https://www.focus.it/images/2021/02/22/gatto_1020x680.jpg'));
$cuccia = new PetKennel('cuccia in legno per cani grandi', '1m x 2m x 1m', '25kg', 'legno', 'cuccia', 'cuccia legno', 40, 'https://www.cuccia-per-cani.com/wp-content/uploads/2017/02/612BY69NS6rL.jpg', new Category('cane', 'https://www.nonsprecare.it/wp-content/uploads/2021/12/border-collie.jpg'))
?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

    <h1 class="text-center m-5">E-COMMERCE PET PRODUCTS</h1>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="text-uppercase d-flex justify-content-between">
                        <h2>
                            <?= $osso->name ?>
                        </h2>
                        <img width="100" src="<?= $osso->category->icon ?> " alt="">
                    </div>
                    <div class="poster">
                        <img width="300" src="<?= $osso->image ?>" alt="">
                    </div>

                    <div>
                        <p>
                            questo articolo è un <?= $osso->type ?>
                        </p>
                        <p>DESCRIZIONE: <?= $osso->description ?></p>
                        <p>
                            il costo è: <?= $osso->price ?> €
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="text-uppercase d-flex justify-content-between">
                        <h2>
                            <?= $mousse->name ?>
                        </h2>
                        <img width="100" src="<?= $mousse->category->icon ?> " alt="">
                    </div>
                    <div class="poster">
                        <img width="300" src="<?= $mousse->image ?>" alt="">
                    </div>

                    <div>
                        <p>
                            questo articolo è un <?= $mousse->type ?>
                        </p>
                        <p>DESCRIZIONE: <?= $mousse->description ?></p>
                        <p>
                            il costo è: <?= $mousse->price ?> €
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <div class="text-uppercase d-flex justify-content-between">
                        <h2>
                            <?= $cuccia->name ?>
                        </h2>
                        <img width="100" src="<?= $cuccia->category->icon ?> " alt="">
                    </div>
                    <div class="poster">
                        <img width="300" src="<?= $cuccia->image ?>" alt="">
                    </div>

                    <div>
                        <p>
                            questo articolo è un <?= $cuccia->type ?>
                        </p>
                        <p>DESCRIZIONE: <?= $cuccia->description ?></p>
                        <p>
                            il costo è: <?= $cuccia->price ?> €
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>