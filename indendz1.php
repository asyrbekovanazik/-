<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashirbekova</title>
</head>
<body>
    /** <?php
echo '<table border="1" cellpadding="5" style="border-collapse: collapse; width: 50%; margin-bottom: 56px;">';
    echo '<tr>
        <th>ФИО студента</th>
        <th>Пол</th>
        <th>День рождения</th>
        <th>Присутствие</th>
    </tr>';

    echo'<tr>
    <td>Абдыева Акылай Султановна</td>
    <td>Женский</td>
    <td>21.06.2007</td>
    <td>Отсутствует</td>
    </tr>';

    echo'<tr>
    <td>Авазова Маржона Убайдулло</td>
    <td>Женский</td>
    <td>12.02.2007</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Аширбекова Назик Кенжебековнаа</td>
    <td>Женский</td>
    <td>29.09.2006</td>
    <td>Отсутствует</td>
    </tr>';

    echo'<tr>
    <td>Ибраимова Айдай Зулпукаровна</td>
    <td>Женский</td>
    <td>20.06.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Илияс уулу Билал</td>
    <td>Мужской</td>
    <td>23.06.2006</td>
    <td>Отсутствует</td>
    </tr>';

    echo'<tr>
    <td>Исаков Тилек Молдосунович</td>
    <td>Мужской</td>
    <td>31.03.2007</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Калыбекова Аэлита Эрлановна</td>
    <td>Женский</td>
    <td>05.12.2005</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Кубатова Курманжан Кубатовна</td>
    <td>Женский</td>
    <td>16.06.2006</td>
    <td>Отсутствует</td>
    </tr>';

    echo'<tr>
    <td>Кудайбердиева Айпери Абдукеримовна</td>
    <td>Женский</td>
    <td>07.08.2007</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Кырбашова Айдана Даниловна</td>
    <td>Женский</td>
    <td>16.02.2007</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Молдогараева Жаркын Дамирбековна</td>
    <td>Женский</td>
    <td>26.07.2007</td>
    <td>Отсутствует</td>
    </tr>';

    echo'<tr>
    <td>Мухидинов Шахриёр Дилшатович</td>
    <td>Мужской</td>
    <td>21.08.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Райымкулова Аиза Тилековна</td>
    <td>Женский</td>
    <td>07.10.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Рустам кызы Шахризада</td>
    <td>Женский</td>
    <td>19.05.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Рысбек кызы Айжамал</td>
    <td>Женский</td>
    <td>02.11.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Сайдинова Сыйда Майрамбековна</td>
    <td>Женский</td>
    <td>04.05.2007</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Салыбаева Аяна Нурлановна</td>
    <td>Женский</td>
    <td>20.07.2006</td>
    <td>Отсутствует</td>
    </tr>';

    echo'<tr>
    <td>Сатыбалдиев Ильяз Рустамович</td>
    <td>Мужской</td>
    <td>20.07.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Солтонов Дастанбек Суйунтбекович</td>
    <td>Мужской</td>
    <td>16.07.2007</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Тагаева Айымкан Абдикалыковна</td>
    <td>Женский</td>
    <td>31.10.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Токтошова Сумая Сайпиллаевна</td>
    <td>Женский</td>
    <td>23.06.2006</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Уланова Айпери Улановна</td>
    <td>Женский</td>
    <td>01.12.2005</td>
    <td>Присутствует</td>
    </tr>';

    echo'<tr>
    <td>Урманбетова Айдана Максатовна</td>
    <td>Женский</td>
    <td>14.03.2006</td>
    <td>Присутствует</td>';
    echo '</table>
    </tr>';
    ?>

    <?php

echo '<table border="1" cellpadding="5" style="border-collapse: collapse; width: 50%; margin-bottom: 56px;">';
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришел</th></tr>";

for($i=1;$i<=23;$i++){

    switch($i){

        case 1: $n="Акылай";$s="Абдыева";$v=true;break;
        case 2: $n="Маржона";$s="Авазова";$v=false;break;
        case 3: $n="Назик";$s="Аширбекова";$v=true;break;
        case 4: $n="Айдай";$s="Ибраимова";$v=true;break;
        case 5: $n="Билал";$s="Илияс у";$v=false;break;
        case 6: $n="Тилек";$s="Исаков";$v=true;break;
        case 7: $n="Аэлита";$s="Калыбекова";$v=true;break;
        case 8: $n="Курманжан";$s="Кубатова";$v=false;break;
        case 9: $n="Айпери";$s="Кудайбердиева";$v=true;break;
        case 10:$n="Айдана";$s="Кырбашова";$v=true;break;
        case 11:$n="Жаркын";$s="Молдогараева";$v=true;break;
        case 12:$n="Шахриёр";$s="Мухидинов";$v=false;break;
        case 13:$n="Аиза";$s="Райымкулова";$v=true;break;
        case 14:$n="Шахризада";$s="Рустам к";$v=true;break;
        case 15:$n="Айжамал";$s="Рысбек к";$v=false;break;
        case 16:$n="Сыйда";$s="Сайдинова";$v=true;break;
        case 17:$n="Аяна";$s="Салыбаева";$v=true;break;
        case 18:$n="Ильяз";$s="Сатыбалдиев";$v=true;break;
        case 19:$n="Дастанбек";$s="Солтонов";$v=false;break;
        case 20:$n="Айымкан";$s="Тагаева";$v=true;break;
        case 21:$n="Сумая";$s="Токтошова";$v=true;break;
        case 22:$n="Айпери";$s="Уланова";$v=false;break;
        case 23:$n="Айдана";$s="Урманбетова";$v=true;break;
    }

    if($v){ $color="#79a877"; $status="true"; }
    else{ $color="#b78080"; $status="false"; }

    echo "<tr style='background:$color'><td>$n</td><td>$s</td><td>$status</td></tr>";

}

echo "</table>";


echo '<table border="1" cellpadding="5" style="border-collapse: collapse; width: 50%; margin-bottom: 56px;">';
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришел</th></tr>";

$i=1;

do{

    switch($i){
        case 1:$n="Акылай";$s="Абдыева";$v=true;break;
        case 2:$n="Маржона";$s="Авазова";$v=false;break;
        case 3:$n="Назик";$s="Аширбекова";$v=true;break;
        case 4:$n="Айдай";$s="Ибраимова";$v=true;break;
        case 5:$n="Билал";$s="Илияс у";$v=false;break;
        case 6:$n="Тилек";$s="Исаков";$v=true;break;
        case 7:$n="Аэлита";$s="Калыбекова";$v=true;break;
        case 8:$n="Курманжан";$s="Кубатова";$v=false;break;
        case 9:$n="Айпери";$s="Кудайбердиева";$v=true;break;
        case 10:$n="Айдана";$s="Кырбашова";$v=true;break;
        case 11:$n="Жаркын";$s="Молдогараева";$v=true;break;
        case 12:$n="Шахриёр";$s="Мухидинов";$v=false;break;
        case 13:$n="Аиза";$s="Райымкулова";$v=true;break;
        case 14:$n="Шахризада";$s="Рустам к";$v=true;break;
        case 15:$n="Айжамал";$s="Рысбек к";$v=false;break;
        case 16:$n="Сыйда";$s="Сайдинова";$v=true;break;
        case 17:$n="Аяна";$s="Салыбаева";$v=true;break;
        case 18:$n="Ильяз";$s="Сатыбалдиев";$v=true;break;
        case 19:$n="Дастанбек";$s="Солтонов";$v=false;break;
        case 20:$n="Айымкан";$s="Тагаева";$v=true;break;
        case 21:$n="Сумая";$s="Токтошова";$v=true;break;
        case 22:$n="Айпери";$s="Уланова";$v=false;break;
        case 23:$n="Айдана";$s="Урманбетова";$v=true;break;
    }

if($v){ $color="#79a877";; $status="true"; }
    else{ $color="#b78080"; $status="false"; }

    echo "<tr style='background:$color'><td>$n</td><td>$s</td><td>$status</td></tr>";


    $i++;

}while($i<=23);

echo "</table>";
?>
<?php

echo '<table border="1" cellpadding="5" style="border-collapse: collapse; width: 50%; margin-bottom: 56px;">';
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришел</th></tr>";

for($i=1;$i<=23;$i++){

    if($i==1){$n="Акылай";$s="Абдыева";$v=true;}
    else if($i==2){$n="Маржона";$s="Авазова";$v=false;}
    else if($i==3){$n="Назик";$s="Аширбекова";$v=true;}
    else if($i==4){$n="Айдай";$s="Ибраимова";$v=true;}
    else if($i==5){$n="Билал";$s="Илияс у";$v=false;}
    else if($i==6){$n="Тилек";$s="Исаков";$v=true;}
    else if($i==7){$n="Аэлита";$s="Калыбекова";$v=true;}
    else if($i==8){$n="Курманжан";$s="Кубатова";$v=false;}
    else if($i==9){$n="Айпери";$s="Кудайбердиева";$v=true;}
    else if($i==10){$n="Айдана";$s="Кырбашова";$v=true;}
    else if($i==11){$n="Жаркын";$s="Молдогараева";$v=true;}
    else if($i==12){$n="Шахриёр";$s="Мухидинов";$v=false;}
    else if($i==13){$n="Аиза";$s="Райымкулова";$v=true;}
    else if($i==14){$n="Шахризада";$s="Рустам к";$v=true;}
    else if($i==15){$n="Айжамал";$s="Рысбек к";$v=false;}
    else if($i==16){$n="Сыйда";$s="Сайдинова";$v=true;}
    else if($i==17){$n="Аяна";$s="Салыбаева";$v=true;}
    else if($i==18){$n="Ильяз";$s="Сатыбалдиев";$v=true;}
    else if($i==19){$n="Дастанбек";$s="Солтонов";$v=false;}
    else if($i==20){$n="Айымкан";$s="Тагаева";$v=true;}
    else if($i==21){$n="Сумая";$s="Токтошова";$v=true;}
    else if($i==22){$n="Айпери";$s="Уланова";$v=false;}
    else if($i==23){$n="Айдана";$s="Урманбетова";$v=true;}

    if($v){ $color="#79a877";; $status="true"; }
    else{ $color="#b78080"; $status="false"; }

    echo "<tr style='background:$color'><td>$n</td><td>$s</td><td>$status</td></tr>";

    
}

echo "</table>";
?>  */

</body>
</html>