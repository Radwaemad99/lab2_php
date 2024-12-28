<?php
// TASK 1
$text = "My name is.\nRadwa Emad ELdin.";
echo nl2br($text);

//TASK 2
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

//TASK 3
//TASK 3.1 
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value
echo "<br>";
//TASK3.2
echo similar_text("Hello World","Hello Peter");
echo "<br>";
//TASK3.3
function test_odd($var)
  {
  return($var & 1);
  }

$a1=array(1,3,2,3,4);
print_r(array_filter($a1,"test_odd"));
echo "<br>";
// TASK 4
// Define the indexed array
$numbers = array(12, 45, 10, 25);

// Calculate the sum
$sum = array_sum($numbers);
echo "<br>";
// Calculate the average
$average = $sum / count($numbers);
echo "<br>";
// Sort the array in disc order
rsort($numbers);
// sort the array in asc order
sort($numbers);
// Output the results
echo "Sum: " . $sum . "<br>";
echo "Average: " . $average . "<br>";
echo "Sorted array (highest to lowest): ";
print_r($numbers);
echo "<br>";
 //TASK 5
 
// Define the associative array
$ages = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);

// a) Ascending order sort by value
echo "a) Ascending order sort by value:\n";
asort($ages);
print_r($ages);
echo "<br>";
// b) Ascending order sort by key
echo "\nb) Ascending order sort by key:\n";
ksort($ages);
print_r($ages);
echo "<br>";
// c) Descending order sorting by value
echo "\nc) Descending order sorting by value:\n";
arsort($ages);
print_r($ages);
echo "<br>";
// d) Descending order sorting by key
echo "\nd) Descending order sorting by key:\n";
krsort($ages);
print_r($ages);
echo "<br>";
// Define the associative array
$ages = array("Sara"=>31, "John"=>41, "Walaa"=>39, "Ramy"=>40);

// a) Ascending order sort by value
echo "a) Ascending order sort by value:\n";
$agesByValue = [];
foreach ($ages as $name => $age) {
    $agesByValue[$age][] = $name;
}
ksort($agesByValue);
$agesByValue = array_merge(array_values($agesByValue));
print_r($agesByValue);
echo "<br>";
// b) Ascending order sort by key
echo "\nb) Ascending order sort by key:\n";
ksort($ages);
print_r($ages);
echo "<br>";
// c) Descending order sorting by value
echo "\nc) Descending order sorting by value:\n";
$agesByValue = [];
foreach ($ages as $name => $age) {
    $agesByValue[$age][] = $name;
}
krsort($agesByValue);
$agesByValue = array_merge(array_values($agesByValue));
print_r($agesByValue);
echo "<br>";
// d) Descending order sorting by key
echo "\nd) Descending order sorting by key:\n";
krsort($ages);
print_r($ages);
echo "<br>";
?>