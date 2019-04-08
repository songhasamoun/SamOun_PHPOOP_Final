<?php
class Functions{
    public $firstNumber;
    public $secondNumber;
    public $operator;

    public function __Construct($fNum, $sNum, $operator) {
        $this->firstNumber = $fNum;
        $this->secondNumber = $sNum;
        $this->operator = $operator;
    }

    public function getFirstNumber() {
        return $this->firstNumber;
    }
    public function getSecondNumber() {
        return $this->secondNumber;
    }
    public function getOperator() {
        return $this->operator;
    }

    public function add() {
        return $this->getFirstNumber() + $this->getSecondNumber();
    }
    public function minus() {
        return $this->getFirstNumber() - $this->getSecondNumber();
    }
    public function multiply() {
        return $this->getFirstNumber() * $this->getSecondNumber();
    }
    public function devide() {
        return $this->getFirstNumber() / $this->getSecondNumber();
    }
}