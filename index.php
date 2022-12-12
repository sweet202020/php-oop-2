<?php
/* 

Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:
L'e-commerce vende prodotti per animali.
I prodotti sono categorizzati, le categorie sono Cani o Gatti.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
Stampiamo delle card contenenti i dettagli dei prodotti, come immagine, titolo, prezzo, icona della categoria ed il tipo di articolo che si sta visualizzando (prodotto, cibo, gioco, cuccia).
*/

class Product
{
    public $type;
    public $name;
    public $price;
    public $image;

    public function __construct(string $type, string $name, int $price, string $image)
    {
        $this->type = $type;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
    }
}

$cuccia = new Product('cuccia', 'cuccia per cani grande', 30, 'http:');
var_dump($cuccia);
