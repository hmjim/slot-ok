<?php
/**
* The main template file.
*
* @package gump
* @since gump 1.0
*/

get_header(); ?>

<!-- content start -->

<h1 id="cont_title">Игровые автоматы онлайн — играть бесплатно на slot-oker.com</h1>

<div id="content-block-info">

<?php

if ( have_posts() ) : ?>      

			<?php while ( have_posts() ) : the_post(); ?>
            
            

				<?php get_template_part( 'content', 'avtomatu' ); ?>
            
			<?php endwhile; ?>

              
              <?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif;
?> 
<!-- #main -->
</div>
<div id="cont_block_navi">
<?php kama_pagenavi(); ?>
</div>


<!--
<div id="cont_block_navi">
<div class="wp-pagenavi">
<span class="swchItemA">1</span> 
        <a class="swchItem" href="/avtomatu/page/2/">2</a> 
        <a class="swchItemB" href="/avtomatu/page/2/">NEXT</a> 
</div>
</div>
-->

<?php if ( is_active_sidebar( 'index-6' ) ) : ?>
<div id="cont_block_news">  <?php dynamic_sidebar( 'index-6' ); ?>
<?php endif; ?>

<!-- content end -->
</div>  </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>