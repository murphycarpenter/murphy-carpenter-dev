<?php
/**
 * The Right Sidebar displayed on page templates.
 */
?>
        <div class="col-md-4">
            <div class="well sidebar-nav">
                <?php
                if (function_exists('dynamic_sidebar')) {
                    dynamic_sidebar("sidebar-page");
                }
                ?>
            </div>
            <!--/.well .sidebar-nav -->
        </div><!-- /.col-md-4 -->
    </div><!-- /.row .content -->
</div><!--/.container -->
