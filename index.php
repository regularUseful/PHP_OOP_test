<?php
    spl_autoload_register("myAutoLoader");

    function myAutoLoader($className){
        $path = "includes/";
        $extension = ".php";
        $fullPath = $path . $className . $extension;

        if(!file_exists($fullPath)){
            return false;
        }

        include_once $fullPath;
    }

    
?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body>
        <?php
            $person1 = new Person("red", "blue", "tall");
            $person1->speakWords();
            echo "<br />";
            $person1 = new Person("blonde", "orange", "short");
            $person1->speakWords();
            echo "<br />";
            echo "we are " . Person::$species;
            echo "<br />";
            Person::vampireBite();
            echo "<br />";
            echo "we are " . Person::$species;
        ?>
    </body>
</html>