<!-- Check to see if specified sidebar is available and load it -->
<?php 
    if(!is_active_sidebar('main-sidebar')) {
        return;
    }
?>


<aside id="secondary" class="widget-area" role="complimentary">
    <!-- Load Dynamic Sidebar -->
    <?php dynamic_sidebar('main-sidebar'); ?>
</aside>