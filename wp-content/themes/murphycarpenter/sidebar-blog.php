<?php
/**
 * Right Sidebar displayed on post and blog templates.
 */
?>
        <div class="col-md-4">
            <div class="well sidebar-nav">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("sidebar-posts");
                } ?>
            </div><!--/.well .sidebar-nav -->
        </div><!-- /.col-md-4 -->
    </div><!-- /.row .content -->
</div><!--/.container -->
