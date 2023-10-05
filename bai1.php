<?php
$sinhVien = array(
    array('sv1', 10, 8, 10),
    array('sv2', 8, 8, 9),
    array('sv3', 9, 7, 8),
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 1</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table>
        <tr>
            <td>Họ tên</td>
            <td>Tin học</td>
            <td>KTLT</td>
            <td>MMT</td>
        </tr>

        <?php
        foreach ($sinhVien as $hang) {
            ?>
            <tr>
                <?php
                foreach ($hang as $cot) {
                    echo "<td>$cot</td>";
                }
                ?>
            <tr>
                <?php
        }
        ?>
    </table>
</body>

</html>