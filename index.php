<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Project</title>
</head>

<body>
    <h4>PHP OOP Project</h4>

    <?php
    // declare class
    class Person
    {
        // Properties
        public $name = "Jamal";
        public $age = 21;

        // method
        public function friend()
        {
            return "I have some good friend ";
        }

        public function bestFnd($name, $color)
        {
            return $name . " is my best Friend " . "<br>" . $color . " is my favorite color";
        }
    }

    // declare object--properties
    $allFriend = new Person;
    echo "This is " . $allFriend->name . "<br>";
    echo "his age are " . $allFriend->age;

    echo "<br><br>";

    // declare object--method
    echo $allFriend->friend();
    echo "<br><br>";

    // declare object--method with parameter

    echo $allFriend->bestFnd('Kamal', 'Blue');
    echo "<br><br>";


    ?>


    <?php

    class Car
    {
        // Properties
        public $name = "";
        public $model = "";
        public $price = "";

        // getter
        public function get_carName()
        {
            return $this->name;
        }
        public function get_carModel()
        {
            return $this->model;
        }
        public function get_carPrice()
        {
            return $this->price;
        }

        // setter

        public function set_carName($carName)
        {
            return $this->name = "$carName";
        }
        public function set_carModel($carModel)
        {
            return $this->model = "$carModel";
        }
        public function set_carPrice($carPrice)
        {
            return $this->price = "$carPrice";
        }

        // ues constructor 
        public function __construct()
        {
            
        }
    }

    // declare object
    $allCar = new Car;

    // $allCar->set_carName('The car name BMW');
    // $allCar->set_carModel('This car Model BMW-x5 series');
    // $allCar->set_carPrice('This car market price are $5551k');
    echo "<br><br>";

    echo $allCar->get_carName();
    echo "<br>";
    echo $allCar->get_carModel();
    echo "<br>";
    echo $allCar->get_carPrice();
    echo "<br>";




    ?>

</body>

</html>