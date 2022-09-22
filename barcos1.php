<?php
echo "<table border : '2px'>";
$n = 11;
$s = 11;
$submari= [[5,5],[5,4]];
for($j=0; $j<$s;$j++){
    echo "<tr>\n";
    for($i=0;$i<$n;$i++){
        if (($j==0) && ($i != 0)){
            echo "<td>$i</td>\n";
        }
        elseif (($j!=0) && ($i==0)){
            echo "<td>".chr($j+64)."</td>";
        }else{
            echo "<td></td>\n";
        }
    }
    echo "</tr>";
}
echo "</table>";
?>