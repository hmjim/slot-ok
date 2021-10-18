<div id="cont_block">
    <div id="cont_block_title">
        <a href="<?php echo get_permalink();?>"><?php echo get_the_title();?></a>
    </div>
    <div id="cont_block_img">
        <a href="<?php echo get_permalink();?>">
            <img width="208" height="140" src="<?= get_post_meta(get_the_ID(), 'wpcf-miniatyra', true) ?>" class="attachment-featureds" alt="<?php echo the_title();?>" title="<?php echo the_title();?>">
        </a>
    </div>
    <div id="cont_block_btn_t">
        <div id="b_1">
            <a href="<?php echo get_permalink();?>" title="Игровой автомат <?php echo get_the_title();?> бесплатно">БЕСПЛАТНО</a>
        </div>
        <div id="b_2">
            <a href="/gocasino/formoney" title="<?php echo get_the_title();?> на деньги онлайн">НА ДЕНЬГИ</a>
        </div>
    </div>
</div>