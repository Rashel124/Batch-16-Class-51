

<?php


class Car {
    public function color(){
        echo 'red';  
    }
      
    public function engine(){
        echo "4000C";
    
}

public function model(){
    echo "B1344";
}

}

class Calculator {
    public function sum($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x+$y;
        return $result;
    }
    public function sub($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x-$y;
        return $result;
    }
    public function mul($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x*$y;
        return $result;
    }


    public function div($num1, $num2){
        $x = $num1;
        $y = $num2;
        $result = $x/$y;
        return $result;
    }
}


$objectCar = new Car();
$objectCar->color();
echo "<br>";
$objectCar->engine();
echo "<br>";
$objectCar->model();
echo "<br>";

$objectCalculator = new Calculator();
echo "The sum is=". $objectCalculator->sum(30, 20); 
echo "<br>";
echo "The sub is=". $objectCalculator->sub(30, 20,);
echo "<br>";
echo "The mul is=". $objectCalculator->mul(30, 20);
echo "<br>";
echo "The div is=". $objectCalculator->div(30,20);
?>