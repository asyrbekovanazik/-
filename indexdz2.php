<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Шахматное поле</title>
        <style>
        table{
            border-collapse:collapse;
        }

        td{
            width: 40px;
            height: 40px;
            border:1px solid black; 
            text-align:center;
        }

        .black{
            background-color:black;
        }

        .white{
            background-color:white;
        }

        .yellow {
            background-color:yellow;
        }
    
    </style>
</head>
<body>
    <table>
    <?php 
    $row = 0;
    while( $row <10){ /*цикл строк,создали 10 */
        echo "<tr>";

    $col =0;
    while( $col<10){/*тоже самое 10 сталбец */

        if($row == 0 || $col == 0){ /*желтая линия 0 строка и 0 столбец они будут желтыми  */
            echo "<td class='yellow'></td>";
        }else {
            if (($row + $col) %2 == 0){ /* это формула делает чередование типа по очереди цветов белый черный бклый черный */
                echo"<td class='white'></td>";
                } else {
                    echo"<td class='black'></td>";
                }
            }
            $col++;
        }
        echo"</tr>";
        $row++;
    }
    ?>
    </table>
    
    
</body>
</html>