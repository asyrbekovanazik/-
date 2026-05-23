<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>функция</title>
</head>
<body>

    <?php
    error_reporting(-1);//бул керектуу код анткени ушунун жардамы менен кодтун ошибкасы дароо чыгып калат 

    function debug($data)
    {
        echo '<pre>'.print_r($data,1).'</pre>';
    }

    /*
* Str_count($str, $substr) деген функция жазыңыз.
* Бул функция 2 аргумент кабыл алат: сап (строка) жана подсап (подстрока).
* Функция подсап саптын ичинде канча жолу кездешкенин кайтарышы керек.
* Мисал: 'hello', 'l' => 2
*/

function str_count($str,$substr)
{
    return substr_count($str,$substr);
}

echo str_count('hello', 'l');// 'l' бул нерсени жазбай деле койсо болмок деп ойлогом да бирок андай эмес экен, анткени 
// биз изде туп туруп эстеке эмнени издешин керектигин бербей коет экенбиз  ошого '' жазыш керек экен.
echo '<br>';
echo str_count('Nazik', 'a');
echo '<br>';

function my_srtlen($str)
{
    $count = 0;
    while(isset($str[$count])) 
        {
            $count++;
        }
        return $count;
}

echo my_srtlen('hello Nazik');
echo '<br>';

function my_strlen1($str)
{
    $count = 0;
    for($i = 0; isset($str[$i]); $i++) // $i = 0 бул биринчи стракадан башталат деген белги
    //isset($str[$i]) бул текшеруучу ушугдай символ барбы? деген ишти аткарат 
    //ошондой символ бар болсо,анда озун ишин уланта берет 
    //эгер символ жок боло турган болсо мен издеген анда жумушун токтотуп  коет.
    //$i++ бул увеличиваем индекс на 1, идем к следующему символу,
    //ошондо тагырак айтканда эгер мен издеген символ табылса,анда дагы ошондой символ издеп тапса кошулуп кете берет.
        {
            $count++;//  бул ошо символдорду эсептеп  турат.
        }
        return $count;
}

echo my_strlen1('Hello world  my name Nazik!');
echo '<br>';
echo substr('Hello world', 4, -2); // бул жерде 4 бул ошол жерден баштап сана деген белги а -2 аягынан кемит деген белги.
echo '<br>';


function my_substr($str,$start,$length = null) // $str сап, $start кайсыл жерден баштайбыз,$length канча символ алабыз(болбосо-аягына чейин)
{
    $result ='';// бош строка ачып алабыз анткени жыйынтык ушул жерге сакталат
    if($lenght === null)// бул узундугу берилген жок,сапты башынана аягына чейин алабыз
        {
            for($i =$start; isset($str[$i]);$i++)//$i = $start ошол жерден баштайт,isset($str[$i]) символ барбы текшерет,$i++ кийинки символго өтөт
                {
                    $result.=$i.'-'.$str[$i].'<br>';
                }
        }else {
            for($i=$start;isset($str[$i]);$i++) {
                $result.=$i.'-'.$str[$i].'<br>';
            }
        }
        return $result;
}

function my_substr1($str, $start, $length)
{
    $result = '';
    
        for ($i = $start; isset($str[$i]) && $i < $start + $length; $i++) {
            $result .= $i.' - '.$str[$i].'<br>';;
        }
    
    return $result;
}

function my_substr2($str, $start, $length)

{
    $result = "";
    $str_len = 0;

    while (isset($str[$str_len])) { //строканын узундугун эсептейт
        $str_len++;
    }

    if ($length < 0) {
        $length = $str_len - $start + $length;
    }

    for ($i = $start; $i < $start + $length; $i++) {
        if (!isset($str[$i])) break;
        $result .= $str[$i];
    }
    return $result;
}
echo my_substr2('Hello world!', 9, -1);
echo '<br>';

function my_substr_count($str, $substr) //$str ичинде $substr канча жолу бар экенин эсептейт
{
    $count = 0;//канча жолу кездешкенин санайт
    for ($i = 0; isset($str[$i]); $i++) {
        //$i = 0 → башынан баштайт
        //isset($str[$i]) → символ барбы текшерет
        //$i++ → кийинки символго өтөт, ар бир позицияны текшерет
        if (my_substr2($str, $i,my_strlen5($substr)) === $substr) {
            //$str ичинен:
            //$i позициядан баштап
           //$substr узундугундагы бөлүктү алат
           // ошол бөлүк $substr менен теңби текшерет
            $count++; 
        }
    }
    return $count;
}

/*
 * Напишите функцию no_space(string $str): string, которая принимает 
 * аргументом строку и возвращает строку с удаленными пробелами
 * */

function no_space(string $str): string
{
    return str_replace(' ', '', $str);
}

var_dump(no_space(' Hello, world,My name Aiymkan! '));
echo'<br>';

/*
 * Напишите функцию max_number(int $num): int, которая принимает аргументом число и 
 * возвращает максимальное число из цифр, полученного аргумента. Пример: 123 => 321
 * */

function max_number(int $num): int
{
    $digits = str_split($num);
    rsort($digits);//массивди чоңдон кичинеге сорттойт
    return (int)implode('', $digits);//implode('', $digits) массивди кайра бириктирет,
}

echo max_number(3123009);

    ?>
</body>
</html>