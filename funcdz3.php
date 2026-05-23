<?php
//function — ключевое слово, которое говорит PHP: «сейчас мы создаём функцию».
//foreach проходит по каждому элементу массива $arraya
function my_count($arraya){
    $j=0; // 1️⃣ создаём счетчик и ставим его равным 0
    foreach($arraya as $v){// проходим по каждому элементу массива
        $j++;// 2️⃣ увеличиваем счетчик на 1
    }
    return $j; // 3️⃣ возвращаем итоговое количество элементов
}

function my_array_diff($arraya,$arrayb) {
    $r=[];//это новый массив, в котором мы будем хранить элементы, которые есть в $arraya, но нет в $arrayb
    foreach($arraya as $v){ //текущий элемент, который мы смотрим на этой итерации.
                    //Например, если $arraya = [1, 2, 3], то на первой итерации $v = 1, на второй $v = 2, на третьей $v = 3
        if(!in_array($v,$arrayb)) {//проверяет: есть ли значение $v в массиве $arrayb,Значит «если нет в массиве $arrayb
            $r[]=$v; //добавляем этот элемент в массив $r
        }
    }
    return $r;
}
function my_array_intersect($a,$b){// функ ачтык 
    $r=[];// бул пустой массив ачабыз, результаттары ушуга чогула берет 
    foreach($a as $v){ // foreach бул ошол массивдердин ичинен кирип чыгат 
        if(in_array($v,$b)){ // бул жерде текшерет $v ушул массивдин ичиндеги информациялар $b массивдин ичинде барбы деп
            $r[]=$v; // эгер бар болсо анда биз тузгон пустой массивге кирет 
        }
    }
    return $r;
}

function my_array_key_exists($key,$arr){// текшерет ключ массивдин ичинде барбы деп
    foreach($arr as $k=>$v){ //$k-ключ  $v-мааниси
        if($k==$key){// текшеребиз бул жердеги ключтор, биз издеп жаткан ключ барбы деп
            return true;// эгер бар болсо анда  true болуп чыгат 
        }
    }
    return false;// эгер жок болсо  false болуп чыгыш керек 
}

function my_array_keys($arr){
    $r=[];
    foreach($arr as $k=>$v){
        $r[]=$k;
    }
    return $r;
}

function my_array_values($arr){
    $r=[];
    foreach($arr as $v){
        $r[]=$v;
    }
    return $r;
}

function my_array_merge($a,$b){
    $r=$a;
    foreach($b as $v){
        $r[]=$v;
    }
    return $r;
}

function my_array_rand($arr){ // бул жерде любой случайный ключ алат 
    $keys=array_keys($arr); // массивдеги баардык ключту алабыз
    return $keys[rand(0,count($keys)-1)]; // rand() случайный санды алат count($keys) — канча ключ экенин издейт 
}

function my_array_reverse($arr){
    $r=[];
    for($i=count($arr)-1;$i>=0;$i--){ // акыркы элементтен баштайбыз
        $r[]=$arr[$i]; // элементтерди тескерисинче коебуз
    }
    return $r;
}

function my_array_combine($k,$v){ // массив ключ к, а массивдин значениясы v
    $r=[];
    for($i=0;$i<count($k);$i++){ // массивдин ключунон отобуз
        $r[$k[$i]]=$v[$i]; // бул жерде ключ=значение болуп калат
    }
    return $r;
}

function my_array_search($val,$arr){ // val ушунун значениясын(маанисин) издейбиз
    foreach($arr as $k=>$v){
        if($v==$val){ // эгер значениясы бар болсо
            return $k;// бул жерге жиберебиз
        }
    }
    return false;
}

function my_array_shift($arr){
    unset($arr[0]); // биринчи элементти очуробуз
    return $arr;
}

function my_array_unique($arr){
    $r=[];
    foreach($arr as $v){
        if(!in_array($v,$r)){
            $r[]=$v;
        }
    }
    return $r;
}

function my_array_unshift($arr,$val){
    $r=[$val]; //  жаны массив тузобуз жана аны ключтун башына коебуз
    foreach($arr as $v){
        $r[]=$v;
    }
    return $r;
}

function my_array_flip($arr){
    $r=[];
    foreach($arr as $k=>$v){
        $r[$v]=$k;
    }
    return $r;
}

function my_array_pop($arr){
    unset($arr[count($arr)-1]); // акыркы массивдин элементирн очуробуз
    return $arr;
}

function my_array_push($arr,$val){ // массивдин акырына жаны элемент кошобуз
    $arr[]=$val;
    return $arr;
}

function my_in_array($val,$arr){
    foreach($arr as $v){
        if($v==$val){
            return true;
        }
    }
    return false;
}

//intersect	общие элементы
//key_exists	проверка ключа
//keys	все ключи
//values	все значения
//merge	объединение
//rand	случайный ключ
///reverse	переворот
//combine	ключ + значение
//search	поиск
//shift	удалить первый
//unique	убрать дубликаты
//unshift	добавить в начало
//flip	поменять ключ и значение
//pop	удалить последний
//push	добавить в конец
//in_array	проверить значение

