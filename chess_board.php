<?php 

echo "<table border='5'>";
    for($col = 0; $col < 8; $col++){
        echo "<tr>"; 
        for($row = 0; $row < 8; $row++){
            $tot = $row + $col;
            if($tot % 2 == 0) {
                echo "<td style='background-color: white; width: 90px; height:90px;'>";
            }else {
                echo "<td style='background-color: black; width: 90px; height:90px;'>";
            }
            // echo "<td style='width: 90px; height:90px;'></td>";
        }
        echo "</tr>";
    } 
echo "</table>";

?>