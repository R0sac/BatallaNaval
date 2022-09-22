<?php
echo "<table border : '2px'>";
$n = 11;
$s = 11;

$fragata = [[1,1],[1,1]];
$submari = [[5,5],[5,4]];
$destructor = [[9,7],[9,6],[9,5]];
$portaavions = [[3,5],[3,4],[3,3],[3,2]];

for($j=0; $j<$s;$j++){
    echo "<tr>\n";
    for($i=0;$i<$n;$i++){
        if (($j==0) && ($i != 0)){
            echo "<td>$i</td>\n";
        }
        elseif (($j!=0) && ($i==0)){
            echo "<td>".chr($j+64)."</td>";
        }
        else{

            if ($j == $fragata[0][0] && $i == $fragata[0][1]){
                echo "<td style = 'background-color : red'><p>x</p></td>";
            }
            elseif (($j == $submari[0][0] && $i == $submari[0][1]) || ($j == $submari[1][0] && $i == $submari[1][1])) {
                echo "<td style = 'background-color : red'><p>x</p></td>";
            }
            elseif (($j == $destructor[0][0] && $i == $destructor[0][1]) || ($j == $destructor[1][0] && $i == $destructor[1][1]) || ($j == $destructor[1][0] && $i == $destructor[1][1])) {
                echo "<td style = 'background-color : red'><p>x</p></td>";
            }
            elseif (($j == $portaavions[0][0] && $i == $portaavions[0][1]) || ($j == $portaavions[1][0] && $i == $portaavions[1][1])) {
                echo "<td style = 'background-color : red'><p>x</p></td>";
            }
            else{
            echo "<td></td>\n";
        }
        }
    }
    echo "</tr>";
}
echo "</table>";
?>