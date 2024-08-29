<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border>
        <tr>
            <th>Product</th>
            <th>Price</th>
        </tr>
        <?php
        foreach ($products as $pdt) {
            echo "<tr>";
            echo "<td>";
            echo $pdt["productname"];
            echo "</td>";
            echo "<td>";
            echo $pdt["price"];
            echo "</td>";
            echo "</tr>";
        }
        ?>

    </table>

    <?php
    if ($finalPrice != null && $pdtName != null) {
        echo "Discount Applied! $pdtName has 10% discount. The final price is: $finalPrice";
    }
    ?>

</body>

</html>
