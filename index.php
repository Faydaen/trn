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
        /*main {*/
            /*width: 90%;*/
            /*margin-left: auto;*/
            /*margin-right: auto;*/
        /*}*/

        .logo {
            display: inline-block;
            position: relative;
            top: 8px;
        }
        .red-cross {
            /*background-image: url(/images/system/isDead.png);*/
            /*display: inline-block;*/
            /*width: 128px;*/
            /*height: 128px;*/
            /*position: relative;*/
            /*top: 135px;*/
            /*z-index: 2;*/
        }
        /*.good {*/
            /*color: #b08def;*/
        /*}*/
        /*.evil {*/
            /*color: red;*/
        /*}*/
        /*.neutral {*/
            /*color: grey;*/
        /*}*/
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


                </div>





                    <div class="box ">
                        <article class="media">
                            <div class="media-left">




                                <figure class="image is-128x128">
                                    <?php if ($char['power'] <= 0): ?>
                                        <div class="red-cross"></div>
                                    <?php endif; ?>
                                    <img src="/images/avatars/<?=$char['image']?>" alt="Image">
                                </figure>
                            </div>

                            <div class="media-content">
                                <div class="content">
                                    <div class="is-size-4">
                                        <?php if($char['sex'] == 'f'): ?>
                                            <i class="fa fa-venus"></i>
                                        <?php else: ?>
                                            <i class="fa fa-mars"></i>
                                        <?php endif; ?>


                                        <strong><?=$char['name']?></strong>

                                        <div class="logo image is-32x32">
                                            <img src="images/logos/<?=getLogo($char['universe'])?>" alt="Image">
                                        </div>
                                    </div>


                                    <div class="is-size-3">
                                        <?=$char['power']?>
                                    </div>

                                    <div>
                                        <?php if($char['alignment'] == 'good'): ?>
                                            добро
                                        <?php elseif($char['alignment'] == 'evil'): ?>
                                            зло
                                        <?php elseif($char['alignment'] == 'neutral'): ?>
                                            нейтрал
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>






<!--                    universe-->


<!--                -->
<!--                --><?//=$char['alignment']?>


                <?php endforeach; ?>


            </div>
        </div>
    </div>
</div>


</body>
</html>