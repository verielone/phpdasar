<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 5; $i++) : ?>
            <tr>
                <?php for($j = 1; $j <= 5; $j++) : 
                    if( $j % 2 == 0) : ?>
                        <td style="background-color:red;">
                            <?= "$i,$j"; ?>
                        </td>
                    <?php else : ?>
                        <td style="background-color:blue;">
                            <?= "$i,$j"; ?>
                        </td>
                <?php endif; endfor; ?>
            </tr>
        <?php endfor; ?>    




        <!-- for($i = 1; $i <= 3; $i++){
            echo '<tr>';
            for($a = 1; $a <= 5; $a++){
                echo "<td>'.$i,$a</td>";
            }
            echo '</tr>';
        } -->
        
    </table>
</body>
</html>