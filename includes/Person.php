<?php
class Person{
    public function __construct($hair, $eyes, $height){
        $this->hair = $hair;
        $this->eyes = $eyes;
        $this->height = $height;
    }

    private $hair;
    private $eyes;
    private $height;

    public static $species = "Human";

    public function speakWords(){
        echo "I have $this->hair hair and $this->eyes eyes and i am very $this->height";
    }

    public static function vampireBite(){
        echo "Ouch, wtf why you bite me";
        self::$species = "Vampire";
    }
    

}

