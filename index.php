<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="American flag"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>American flag</title>
</head>

<body>
    <div class="container">
        <table >

            <?php for($i = 0; $i < 8; $i++):?>

            <tr> 
                <td class="red_line" ></td>
            </tr>
            <tr>
                <td class="white_line" ></td>
            </tr>

            <?php endfor; ?>

        </table>
        <div class="stars">

            <?php for($i = 0; $i < 50; $i++):?>
            <span style="position:fixed; top:<?php print(rand(1,230));?>; left:<?php print(rand(1,380));?>;">
            <?php  echo("★");?>
            <?php endfor; ?>
            </span>

        </div>
    </div>
</body>
</html>