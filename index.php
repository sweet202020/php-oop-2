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


$cuccia = new Product('cuccia', 'cuccia per cani grande', 30, 'http:', new Category('cane', 'http:///777'));

$osso = new Toy('lorem', '30', '20', 'cuccia', 'cuccia per cani grande', 30, 'http:', new Category('cane', 'http:///777'));
var_dump($osso);
