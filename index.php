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

        .logo {
            display: inline-block;
            position: relative;
            top: 8px;
        }

    </style>
</head>
<body>
<div class="section">
    <div class="container">

        <div class="columns ">
            <div class="column">
                <?php foreach ($battles as $battle): ?>

                <div>

                    <?php
                    $winner_str = '<span style="background-color: green">Победитель</span>';
                    $loser_str = '<span style="background-color: red">Проигравший</span>';
                    ?>

                    <?= ($battle['first']['id'] == $battle['winner']) ? $winner_str : $loser_str?>

                    <?= $battle['first']['name'] ?>
                    <strike><?= $battle['first_power'] ?></strike>
                    <?= $battle['first']['power'] ?>

                    |

                    <?= ($battle['second']['id'] == $battle['winner']) ? $winner_str : $loser_str?>
                    <?= $battle['second']['name'] ?>
                    <strike><?= $battle['second_power'] ?></strike>
                    <?= $battle['second']['power'] ?>



                    | урон <?= $battle['damage'] ?>
                </div>

                <?php endforeach; ?>

            </div>
        </div>
        <div class="columns ">
            <div class="column">
                <?php
                $char = $characters[0];
                include 'char.php'
                ?>
            </div>
            <div class="column">
                <?php
                $char = $characters[1];
                include 'char.php'
                ?>
            </div>
        </div>
    </div>
</div>


</body>
</html>