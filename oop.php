<?php 
class man{
    public $name;
    public $age;
    function __construct($name , $age){
        $this->name=$name;
        $this->age=$age;

    }

    public function info(){
        return "name : ".$this->name."age : ".$this->age;
    }
}

$h9 = new man('hasan', '33');
echo $h9->info();


?>