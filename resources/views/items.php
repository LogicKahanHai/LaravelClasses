<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items Data</title>
</head>
<body>
    <table>
        <tr>
            <th><b>Name</b></th>
            <th><b>Price</b></th>
        </tr>
        <?php

        foreach($items as $device) {
            echo "<tr>";
            echo "<td>";
            echo $device["name"];
            echo "</td>";
            echo "<td>";
            echo $device["price"];
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    
</body>
</html>