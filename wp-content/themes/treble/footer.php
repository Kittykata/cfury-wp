<!--footer-->
    <footer id="footer">
        <div class="wrap" style="margin-bottom: 64px;">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </footer
<!--//footer-->
   <?php wp_footer();?>

</body></html>