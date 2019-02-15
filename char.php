<div class="box ">
    <article class="media">
        <div class="media-left">
            <figure class="image is-128x128">
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

                    <?= ($char['power'] <= 0) ? ' [мертв]' : '' ?>

                </div>
            </div>
        </div>
    </article>
</div>
