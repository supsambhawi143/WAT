<?php
echo "Name = Sambhawi Paudel</br>"; 
echo "C7356790 </br>" ;

?>

<?php
// decleearing the variable for name and age
echo "variable <br>";

$name = "David";
$age = 22;
echo "Hi my name is $name and I am $age years old. <br>";
echo "Hi my name is '$name' and I am '$age' years old.<br>";
?>

<?php
echo  "Function </br> ";
// gettype () returns
echo gettype($name);
echo "<br>";
// strlen () returns
echo strlen($name);
echo "<br>";
//stropUpper()returns
echo strToUpper($name);
echo "<br>";
?>

<?php
//Arithmetic
echo "Arithmetic<br>";
$num1 = 9;
$num2 = 12;
echo "num1 = 9<br>";
echo "num2 = 12<br>";
// num1 * num2
echo $num1 * $num2;
echo "<br>";
echo "num1 as a percent of num2 =".(($num1/$num2)*100)."%<br>";
echo "nun2 divided by num1 = ".number_format($num2/$num1). " reminder ".$num2%$num1;
?>

<?php
$height = 1.8;
echo " <br>Name:$name<br/>Age:$age<br/>";
echo "height in meter : ".floor((($height*100)/2.54)/12). " ft ".((($height*100)/2.54)%12). " inches ";