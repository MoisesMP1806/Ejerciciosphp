<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Document</title>
</head>
<body>
    <div class="cont-gen">
        <div class="piramid">
            <p>
                <?php
                    include('piramideNormal.php');
                ?>
            </p>
        </div>

        <div class="cont-inv">
            <div class="piramid">
                <p>
                    <?php
                        include('piramideNormal.php');
                    ?>
                </p>
            </div>
            <div class="piramid-inv">
                <p>
                    <?php
                        include('piramideInv.php');
                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>