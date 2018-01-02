<?php
/**
 * Created by PhpStorm.
 * User: USER-PC
 * Date: 12/27/2017
 * Time: 10:40 PM
 */

class view {
    public $name1;
    public $name = "sofiq";
    public $city = "dhaka";
    public $age;
 function personName(){
     echo "person name is:".$this->name1;
 }
 function personAge($value){
     echo "person age is:".$this->age=$value;
 }
}

$view = new view;
echo $view->name;
echo "<br/>";
echo $view->city;
echo "<br/>";
$view->name1="sazzad";
$view->personName();
echo "<br/>";
$view->personAge("18");