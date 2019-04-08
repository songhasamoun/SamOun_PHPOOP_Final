<?php 
use SamOun\Functions;
include 'public/vendor/autoload.php';

if(isset($_POST['btn-add'])) {
    if($_POST['operator'] !="") {
        $firstNumber = $_POST['fnum'];
        $secondNumber = $_POST['snum'];
        $operator = $_POST['operator'];
        
        $calculate = new Functions($firstNumber, $secondNumber, $operator);
        $getFirstNumber = $calculate->getFirstNumber();
        $getSecondNumber = $calculate->getSecondNumber();
        $getOperator = $calculate->getOperator();

        if($getOperator == '+') {
            echo $getFirstNumber .' ' . $getOperator .' ' . $getSecondNumber. " = " . $calculate->add();
        }else if($getOperator == '-') {
            echo $getFirstNumber .' ' . $getOperator .' ' . $getSecondNumber. " = " . $calculate->minus();
        }else if($getOperator == '*') {
            echo $getFirstNumber .' ' . $getOperator .' ' . $getSecondNumber. " = " . $calculate->multiply();
        }else{
            echo $getFirstNumber .' ' . $getOperator .' ' . $getSecondNumber. " = " . $calculate->devide();
        }
    }else {
        echo "Please select an operator";
    }
}