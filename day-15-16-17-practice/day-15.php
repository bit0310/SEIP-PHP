
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "PHP Syntex"; ?></title>
</head>
<body>

<?php


//show output in php
echo "Hello world";
echo "<h1>This is a heading.</h1>";
echo "<p>This is a heading.</p>";


//php variable
$name;
$NAME;
$NaMe;
$_9name;
$name9;


$number = 100;

$firstName = "Sofiqul";
$lastName = "Islam";
$fullname = $firstName." ".$lastName;
echo $fullname;

echo '<br/>';


//php data type
$firstName = "Sofiqul"; //string
$number = 100;  //integer
$number2 = 100.33;  //float
$x=false;
var_dump($number);
echo '<br/>';
var_dump($x);


//operator
echo '<br/>';
$x=10;
$y=20;
echo $x+=$y;
echo '<br/>';
echo $x.=$y;
echo '<br/>';

//Repeated Statement

$x=100;
$y=20;
if($x>$y){
    $z=$x+$y;
    echo $z;
}

echo '<br/>';
    function demo(){
        echo "Hello world";
    }

demo();

echo '<br/>';
    //array

$x = array('sofiq', 'sazzad', 'sonia');
var_dump($x);
echo '<br/>';

Class student{
    function department(){
        return "IIT";
    }

    function details(){
        echo $this->department();
    }
}

$st = new student();
$st->details();
echo '<br/>';
//constants

define("VALUE", "i AM LEARNING php.");
echo VALUE;
echo '<br/>';

//Conditional Operator

$x=100;
$y="100";
var_dump($x== $y);
echo '<br/>';
var_dump($x=== $y);

//pre increment/decrement

$x=5;
echo ++$x;
echo '<br/>';
echo $x++;
echo '<br/>';
echo $x;
echo '<br/>';
//Logical Operator
$x=40;
$y=100;

if($x==40 || $y==10){
    echo "right";
}else{
    echo "wrong";
}
echo '<br/>';
//array operator

$x=array(
    "a"=>"10",
    "b"=>"20"

);
$y=array(
    "c"=>"30",
    "d"=>"40"

);

var_dump($x+$y);
echo '<br/>';
var_dump($x==$y);

echo '<br/>';
//Conditional Statement

$x=10;
if($x>15){
    echo "x is greater than 15";
}elseif ($x>12){
    echo "x is greater than 12";
}elseif ($x>10){
    echo "x is greater than 10";
}else{
    echo "x is equal to 10";
}
echo '<br/>';

$coding = "jq";
switch ($coding){
    case "html":
    echo " i love html";
    break;

    case "java":
        echo " i love java";
        break;

    case "c":
        echo " i love c";
        break;

    default:
        echo "I love PHP";
}
echo '<br/>';
//Repeated Statement

$x=10;
while ($x>= 1){
    echo "the number is:$x <br/>";
   $x--;
}
echo '<br/>';
$x=10;
do{
    echo "the number is:$x <br/>";
    $x--;
}while ($x>= 11);
echo '<br/>';

for($i=20; $i<30; $i++){
    echo "the number is:$i <br/>";
}
echo '<br/>';

$colors = array("blue", "green", "sky", "red");

foreach ($colors as $color){
    echo "$color <br/>";
}

//function

function school(){
    echo "I am a student";
}
school();

echo '<br/>';

function college($name){
    echo "$name student";
}
college("i am a college");
echo '<br/>';
college("w am a college");

echo '<br/>';

function sum($x, $y){
    $z= $x+ $y;
    return $z;
}

echo "10+5 = ".sum(10, 5);
echo '<br/>';

//array

//index array
/*$x[0]= 5;
$x[1]= 3;
$x[2]= 8;
$x[3]= 10;
$x[4]= 15;*/
$x= array(5,3,8,10,15);
echo count($x);
echo '<br/>';
echo $x[3];
echo '<br/>';

foreach ($x as $key){
    echo "$key <br/>";
}

//associative array

$ages =  array(
        "korim"=>"25",
        "rohim"=>"20",
        "sofiq"=>"28",
    );


foreach ($ages as $person => $value){
    echo "person=".$person.' '. "age=".$value. "<br/>";
}

//multidimension array

$cars = array(
        array("BMW", 15, "nice"),
        array("ODI", 20, 5),
        array("volvo", 25, 30)
    );

 for($row =0; $row<2; $row++){
     echo "<p>row number: $row</p>";

     for($col = 0; $col<3; $col++){
         echo "<ul><li>".$cars[$row][$col]."</li></ul>";
     }

     echo "</br>";
     
 }

//Sorting Arrays


$names = array("sofiq", "sazzad", "alamin", "tithy");
 sort($names);
 for ($i=0; $i<4; $i++){
     echo $names[$i];
     echo "<br/>";
 }


$numbers= array(10,20,5,8,2);
 sort($numbers);
 //rsort($numbers);
 $length=count($numbers);
 for ($i=0; $i<$length; $i++){
     echo $numbers[$i];
     echo "<br/>";
 }

//Superglobals $_SERVERS
echo $_SERVER['PHP_SELF'];
echo "<br/>";
echo $_SERVER['SERVER_NAME'];
echo "<br/>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br/>";
echo $_SERVER['SERVER_ADDR'];

?>
//Superglobals $_REQUEST

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    usename: <input type="text" name="username"/>
    <input type="submit" value="SUBMIT"/>
</form>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $name = $_REQUEST['username'];

        if(empty($name)){
            echo "username empty";
        }else{
            echo "you have submitted:" .$name;
        }
    }







?>


<br/>
<h1><?php echo "This is a heading"; ?></h1>
<p><?php echo "This is a heading"; ?></p>

<input type="text" value="<?php echo "Hello world"; ?>"/>
<input type="text" value="<?php echo "Hello World"; ?>"/>













</body>
</html>








