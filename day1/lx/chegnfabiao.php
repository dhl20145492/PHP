<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2016/12/8
 * Time: 18:27
 */
//for ($i = 1;$i<=9;$i++){
//    for ($j = 1;$j<=$i;$j++){
//        echo $i." * ".$j." = ".($i*$j)."&nbsp;";
//    }
//    echo "<br />";
//}



//echo "<table width = 1000px align = center border = 1>";
//$color = "";
//for ($i = 1;$i<=9;$i++){
//    if ($i%2 == 0){
//        $color = "white";
//    }
//    else{
//        $color = "grace";
//    }
//    echo "<tr bgColor = ".$color.">";
//    for ($j = 1;$j<=$i;$j++){
//        echo "<td>";
//        echo $i."*".$j."=".($i*$j);
//        echo "</td>";
//    }
//    echo "<br />";
//    echo "</tr>";
//}
//echo "<table>";


echo "<table width = 1000px align = center border = 1>";
$color = "";
for ($i = 9;$i>=1;$i--){
    if ($i%2 == 0){
        $color = "white";
    }
    else{
        $color = "grace";
    }
    echo "<tr bgColor = ".$color.">";
    for ($j = 1;$j<=$i;$j++){
        echo "<td>";
        echo $i."*".$j."=".($i*$j)."&nbsp;";
        echo "</td>";
    }
    echo "<br />";
    echo "</tr>";
}
echo "<table>";
