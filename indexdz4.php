<?php   

//array  создает массив 
/*function debug($name) {
    echo '<pre>';
    print_r($name);
    echo '</pre>';
}

$ai = array (
    "names" => array(
        "a" => "Nazik", 
        "T" => "Ashirbekova",
        "c"=> "cyida"
    ),
    "numbers" => array(1, 2, 3, 4, 5, 6),
    "holes"   => array("first", 5 => "second", "third")
);

debug($ai);

unction array_all($array, $callback) {
    foreach ($array as $key => $value) {
        if (!$callback($value, $key)) {
            return false;
        }
    }
    return true;
}*/



function debug($array) {
    echo '<pre>'; // <pre> — делает текст отформатированным 
    //(каждый элемент с новой строки и с отступами)
    print_r($array); //print_r($array) — показывает содержимое массива.
    echo '</pre>';
}

function array_all($array, $callback) {//$array — массив, который проверяем.
//$callback — функция, которая проверяет каждый элемент.
    foreach ($array as $key => $value) {
        if (!$callback($value, $key)) {
            return false;
        }
    }
    return true;
}

$array = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
];

print_r(array_all($array, function (string $value) {
    return strlen($value) < 12;
}));

debug($array);


?>