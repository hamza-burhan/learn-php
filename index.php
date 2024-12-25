<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Example of variables
        // echo "<h1>Hello</h1>";
        // $a = "Hello";
        // var_dump($a);
        // define("my",1);
        // echo my;
        // const a = "Hello";
        // echo a;



        
        //Example of strings
        // $name = "John";
        // $age = 30;
        // echo "My name is $name and I am $age years old.";
        // echo 'My name is' .$name. 'and I am' .$age. 'years old.';

        // $name = "John Smith";
        // echo strlen($name);
        // echo "<br>";
        // echo strpos($name, "o");
        // echo "<br>";
        // echo str_word_count($name);
        // echo "<br>";    
        // echo strrev("reverse: $name" );
        // echo "<br>";    
        // echo strtolower("lower: $name" );
        // echo "<br>";    
        // echo strtoupper("upper: $name" );
        // echo "<br>";  
        // $arr = explode(" ", $name);
        // for ($i = 0; $i < count($arr); $i++){
        //     $name = $arr[$i];
        //     echo $name;
        //     echo "<br>";
        // }


        //Example of magic constants
        // echo __DIR__ ;
        // echo "<br>";
        // echo __FILE__;
        // echo "<br>";
        // echo __LINE__ ;
        // echo "<br>";
        // echo __FUNCTION__ ;
        // echo "<br>";
        // echo __CLASS__ ;





        //Example of foreach loop
        // $arr = ["apple", "banana", "cherry"];
        // $arr2 = array('name' => 'apple', 'age' =>'20');
        // foreach ($arr2 as $key => $value) {
        //     echo $key .":". $value ."<br>";
        // }



        //Example of Super globals
        // $method = $_SERVER['REQUEST_METHOD'];
        // if($method == 'GET' && isset($_GET['email'])){
        //     $inputValue = $_GET['email'];
        //     echo $inputValue;
        // }


        //Example of class
        // abstract class Car {
            //examle of simple class
            // public $model;
            // public $color;
            // public function __construct($color){
            //     $this->color = $color;
            // }
            // public function __destruct(){
            //     echo "$this->color Car is destroyed";
            // }
            // public function setModel($model){
            //     $this->model = $model;
            // }
            // public function getModel(){
            //     return $this->model;
            // }


            //example of constant
            // public const SECRET_KEY = "12345";
            // public const SECRET_KEY2 = "6789";


            // public function getConst(){
            //     return self::SECRET_KEY2;
            // }


            //example of abstraction
            // abstract public function payment($id);s
        // }

        //example of abstraction
        // class Ford extends Car{
        //     public function payment($id) {
        //         echo "Payment done for Ford $id";
        //     }
        // }

        // $mycar = new Car();
        // $mycar->setModel("Volvo");
        // echo $mycar->getModel();
        // $mycar2 = new Car();
        // $mycar2->setModel("toyota");
        // echo $mycar2->getModel();
        // $car = new Car("Yellow");




        //example of constant
        // $secret = Car::SECRET_KEY;
        // echo $secret;
        // $mycar = new Car();
        // echo $mycar->getConst();



        //example of abstraction
        // $myford = new Ford();
        // $myford->payment("123459876543");







        //Example of traits
        // trait Parenting {
        //     public function say(){
        //         echo "Hello";
        //     }
        // }
        // trait Childing {
        //     public function say2(){
        //         echo "World";
        //     }
        // }

        // class Model {
        //     use Parenting;
        //     use Childing;
        // }
        // $mycar = new Model();
        // $mycar->say();
        // $mycar->say2();





        //example of Static keyword in class
        // Class Car{
        //     public static function say(){
        //         echo "Hello";
        //     }

        //     public function returnsay(){
        //         self::say();
        //     }
        // }
        // Car::say();
        // Class Car2{
        //     public function getsay(){
        //         Car::say();
        //     }
        // }
        // $mycar = new Car2();
        // $mycar->getsay();
        // $mycar1 = new Car();
        // $mycar1->returnsay()


    ?>

    <!-- Example of super globals -->
    <!-- <form method="get" action="">
        <input type="text" name="email">
        <input type="submit" value="Submit">
    </form> -->
</body>
</html>