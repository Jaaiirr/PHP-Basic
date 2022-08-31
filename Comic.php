<?php

require 'Book.php';
class Comic extends Book {

    public function __construct(
        $author,
        $tittle,
        $price,
        $stock,
        $id,
        private array $illustrators,
        private int $volume
    )
    //Cuerpo del constructor
    {
        parent:: __construct($author, $tittle, $price, $stock, $id);
    }

    public function getInfo(){

        $vol = "Volumen: $this->volume<br>";

        $ul = "<ul>--Illustrators--";

        foreach($this->illustrators as $illustrator ) {
            $ul .= "<li> $illustrator </li>";
        }
            $ul = "</ul>";

        echo parent::getInfo();

        return $vol .= $ul;
    }
}

$comic1 = new Comic(
    'Jonathan Hickman',
    'Secret Wars',
    319.90,
    15,
    01,
    ['Jonathan Hicman', 'Esad Ribic'],
    6
);

echo $comic1->getInfo();