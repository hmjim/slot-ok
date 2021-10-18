<?php
/**
 * The template for displaying the footer.
 *
 * @package gump
 * @since gump 1.0
 */
?>

</div>
            </div>
            <div id="footer">
                <!-- footer start -->
                <div id="footer_title">
                
            
            
                <?php $args = array(
                    	'theme_location' => 'fot-menu',
                        'container' => 'false',
                    );
                    wp_nav_menu( $args );
                    ?>
                    
                    
                    
                </div>
                <div id="footer_copyr">
                   © 2021 slot-ok Россия. Только бесплатные демо-версии игровых автоматов.
                </div>
                
                <div id="footer_bottom">
                    <div id="footer_bottom_left">
                   <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
				      <?php dynamic_sidebar( 'footer-1' ); ?>
                   <?php endif; ?>
                    </div>
                    <div id="footer_bottom_center">
                    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
				      <?php dynamic_sidebar( 'footer-2' ); ?>
                    <?php endif; ?>
                    </div>
                    <div id="footer_bottom_right">
                    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
				      <?php dynamic_sidebar( 'footer-3' ); ?>
                    <?php endif; ?>
                    </div>
                </div>
                
                <!-- footer end -->
            </div>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter28535251 = new Ya.Metrika({id:28535251,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/28535251" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>