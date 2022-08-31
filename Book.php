<?php

class Book {
    //Definimos las propiedades 

    //Crear el constructor
    public function __construct(
       private string $author,
       private string $tittle,
       private float $price,
       private int $stock,
       private int $id
    ){}

    public function getInfo(){
      // Obtener la informacion de un libro
      $info = " Titulo:         <b>{$this->tittle}</b><br> 
                Autor:          <i>{$this->author}</i><br>
                precio:         <i>{$this->price}</i><br>
                id:             <i>{$this->id}</i><br>";
       if($this->stock > 0){
           $info .= "Unidades en existencia: <span style='color:green'> $this->stock </span><br>";
       } else{
           $info .= "<span style='color:red'>No disponible</span>";
       }
      return $info; 
    }
}
$book1 = new Book(
    'George R.R. Martin',
    'House of the dragon The Collection',
    2197.80,
    10,
    1
);
// echo $book1->getInfo();
// echo "<br><br>";


$book2 = new Book(
    'Elena P. Melodia',
    'Darkness',
    297.80,
    0,
    2
);
// echo $book2->getInfo();
// echo "<br><br>";


$book3 = new Book(
    'George R.R. Martin',
    'Fire and Blood',
    560.80,
    55,
    10
);
// echo $book3->getInfo();