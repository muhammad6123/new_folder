<?php 

class humen {
    public $name;
    public function hiname(){
        echo "Below we declare a class named Fruit consisting ";
    }
    public function Classes(){

    }
}
class Fruit {
    public function hiname(){
        echo "In a class, variables are called properties and functions are called methods!";
    }
}

class Fruit2 {
    public function hiname(){
        echo "In a class, variables are called properties and functions are called methods!";
    }
}

$h4 = new humen();

echo $h4->name |"called";
$h5 = new Fruit();
$h7 = new Fruit2();

$h4->hiname();
echo 


?>