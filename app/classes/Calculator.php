<?php
namespace App\classes;
use App\classes\User;
class Calculator extends User
{
    public $firstNumber = 10;
    public $secondNumber = 20;
    public $operator = 30;
    public $result;

    public function __construct($data)
    {
//        echo is_array($data) ? 'data is array' : 'data is single varible';
        $this->firstNumber = $data['first_number'];
        $this->secondNumber = $data['second_number'];
        $this->operator = $data['operator'];
    }

    public  function index()
    {
       switch ($this->operator)
       {
           case '+':
               $this->result = $this->add();
               break;
           case '-':
               $this->result = $this->sub();
               break;
           case '*':
               $this->result = $this->multiplication();
               break;
           case '/':
               $this->result = $this->division();
               break;
           case '%':
               $this->result = $this->modulus();
               break;
       }
       return $this->result;

    }

    protected  function add()
    {
      return $this->firstNumber + $this->secondNumber;
    }
    protected  function sub()
    {
        return $this->firstNumber - $this->secondNumber;
    }
    protected  function multiplication()
    {
        return $this->firstNumber * $this->secondNumber;
    }
    protected  function division()
    {
        return $this->firstNumber / $this->secondNumber;
    }
    protected  function modulus()
    {
        return $this->firstNumber % $this->secondNumber;
    }


    private function  two()
    {
        echo 'In Three';
    }

}