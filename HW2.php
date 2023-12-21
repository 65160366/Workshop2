<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php $multi_x = 2; ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <div class = "GG">
    <table>
        <tbody>
            <?php
            for($i = 1; $i <= 24 ;$i++){
                echo "<tr>";
                echo "<td> $multi_x X $i = ".$multi_x*$i."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <style>
        table {
            width: 250px;
            height: 300px;
            background-color : pink;
        }
        div.GG{
            height: 300px;
            width: 250px;
            overflow-y : scroll;
        }
        h1{
            text-shadow: 3px 3px yellow;
        }
    </style>
</body>
</html>