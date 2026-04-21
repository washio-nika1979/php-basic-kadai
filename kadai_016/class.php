<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>PHP基礎編</title>
</head>

<body>
   <p>
       <?php
       class Food{
        public $name;
        public $price;
        
        public function __construct($name , $price){
            $this->name = $name;
            $this->price = $price;
        }

        public function show_price(){
            echo $this->price;
        }
       }

       $food = new Food('potato' , 250);

       class Animal{
        public $name;
        public $height;
        public $weight;

        public function __construct($name , $height , $weight){
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }

        public function show_height(){
            echo $this->height;
        }
       }

       $animal = new Animal('dog' , 60 , 5000);

       print_r($food);
       echo '<br>';
       print_r($animal);
       echo '<br>';

       $food->show_price();
       echo '<br>';
       $animal->show_height();

       ?>
   </p>
</body>

</html>