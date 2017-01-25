<?php

//Check if isset $_POST and draw the desk

if (isset($_POST['action']) && $_POST['action'] == 'choose') {
    desc($_POST['cols'] ? $_POST['cols'] : 6, $_POST['rows'] ? $_POST['rows'] : 6, $_POST['color'] ? $_POST['color'] : 'pink');
}


//function which draws desk
function desc($rows, $cols, $color)
{
    $cols = (int)$cols;
    $rows = (int)$rows;
    $colors = ['black', 'white'];
    $colors[] = $color;


    if ($cols % 3 == 0) {
        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {
            array_unshift($colors, array_pop($colors));
            echo "<tr>";

            for ($j = 0; $j < $cols; $j++) {
                echo "<td style='background-color:" . $colors[0] . "'></td>";
                array_unshift($colors, array_pop($colors));

            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<table>";
        for ($i = 0; $i < $rows; $i++) {

            echo "<tr>";

            for ($j = 0; $j < $cols; $j++) {

                echo "<td style='background-color:" . $colors[0] . "'></td>";
                array_unshift($colors, array_pop($colors));
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

?>


<style type="text/css">
    table {
        border: 1px solid black;
        border-collapse: collapse;

    }

    th, td {
        border: 1px solid black;
        width: 50px;
        height: 50px;
    }

    input {
        width: 300px;
        height: 30px;
    }

</style>



<h1> Chess board </h1>

<form action="" method="post">
    <input type="hidden" name="action" value="choose">
    <input type="number" name="rows" id="rows" placeholder="Enter number of rows.."><br><br>
    <input type="number" name="cols" id="cols" placeholder="Enter number of cols.."><br><br>
    <input type="text" name="color" placeholder="Enter a color.."><br>
    <input type="submit">
</form>
