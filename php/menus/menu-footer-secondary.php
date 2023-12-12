<?php 
    /**
     * php/menus/menu-footer-secondary.php
     * @package scgolfpanel
     * @author Scott Shealy
     * @version 1.0.0 (2023.12.12)
     * @copyright 2023 (2023.12.12)
    **/
?>

<?php 
    wp_nav_menu(
        array(
            'theme_location' => 'menu-7',
            'menu_id' => 'Footer-Secondary'
        )
    );
?>