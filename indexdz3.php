<?php
error_reporting(-1);
require_once"func.php";

$arraya = [1,646,5,20,34];
$arrayb =[6,56,101];
$arrayc =["d"=>23,"e"=>45,"f"=>56];
echo"<pre>";

echo count($arraya)."\n"; // элементтин санын санайт массивдин ичиндеги ()
echo my_count($arraya)."\n";// "\n" бул ошол аралашып кетпеш учун, ар бир элемент, юир эле строкага жазылат

print_r(array_diff($arraya,$arrayb));// бул готовый функ.Ал эки массивди салыштырып, БИРИНЧИ МАССИВДЕ гана БАР,бирок ЭКИНЧИ МАССИВДЕ жок ЭЛЕМЕНТТЕРДИ  КАЙТАРАТ 
print_r(my_array_diff($arraya,$arrayb));// мен тузгон функция. Эки массивдин айырмасын чыгарышы керек ушундай эле окшош.
// могул экоо, эки массивдин айырмасын таап,экранга чыгарат 

print_r(array_intersect($arraya, $arrayb));
print_r(my_array_intersect($arraya, $arrayb));

var_dump(array_key_exists("d", $arrayc));
var_dump(my_array_key_exists("d", $arrayc));

print_r(array_keys($arraya));
print_r(my_array_keys($arraya));

print_r(array_values($arraya));
print_r(my_array_values($arraya));

print_r(array_merge($arraya, $arrayb));
print_r(my_array_merge($arraya, $arrayb));

echo "array_rand arraya: " . array_rand($arraya) . "\n";
echo "my_array_rand arraya: " . my_array_rand($arraya) . "\n\n";

print_r(array_reverse($arraya));
print_r(my_array_reverse($arraya));

$keys = ["name", "age", "city"];
$values = ["Ali", 20, "Moscow"];

print_r(array_combine($keys, $values));
print_r(my_array_combine($keys, $values));

echo "array_search 20 в arraya: " . array_search(20, $arraya) . "\n";
echo "my_array_search 20 в arraya: " . my_array_search(20, $arraya) . "\n\n";


$test = [1,1,2,2,3,3,4,4,5,5];

print_r(array_unique($test));
print_r(my_array_unique($test));


print_r(array_flip($arrayc));
print_r(my_array_flip($arrayc));

var_dump(in_array(646, $arraya));
var_dump(my_in_array(646, $arraya));


$temp = $arraya;
array_push($temp, 999);


print_r($temp);
$temp2 = my_array_push($arraya, 888);

print_r($temp2);

$temp = $arraya;
array_pop($temp);


print_r($temp);
$temp2 = my_array_pop($arraya);

print_r($temp2);

$temp = $arraya;
array_unshift($temp, 111);


print_r($temp);
$temp2 = my_array_unshift($arraya, 222);


print_r($temp2);


$temp = $arraya;
array_shift($temp);

print_r($temp);
$temp2 = my_array_shift($arraya);

print_r($temp2);

list($a, $b, $c, $d, $e) = $arraya;
