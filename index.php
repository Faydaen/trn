<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Битва</title>
    <?php
    include 'main.php';
    ?>
    <link rel="stylesheet" href="/bulma.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <style>
        main {
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }
        .battle {
            background-color: grey;
            display: inline-block;
            width: 50%;
        }
        .characters {
            background-color: antiquewhite;
            display: inline-block;
            width: 50%;
        }
    </style>
</head>
<body>
<div class="section">
    <div class="container">
        <div class="columns ">
            <div class="column">
            </div>
            <div class="column">

                <?php foreach ($characters as $char): ?>


                <div class="is-size-4">
                <?php if($char['sex'] == 'f'): ?>
                        <i class="fa fa-venus"></i>
                <?php else: ?>
                        <i class="fa fa-mars"></i>
                <?php endif; ?>






                    








                <?=$char['name']?>
                </div>

<!--                -->
<!--                    --><?//=$char['sex']?>
<!--                --><?//=$char['alignment']?>
<!--                --><?//=$char['power']?>
<!--                --><?//=$char['image']?>


                <?php endforeach; ?>


            </div>
        </div>
    </div>
</div>


</body>
</html>