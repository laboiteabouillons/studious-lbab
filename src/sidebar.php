<?php
/**
 * The sidebar containing the main widget area.
 *
 * For a sidebar to work in a theme it must be registered and then a template file for the sidebar must be created.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#sidebar-php
 *
 * @package studious-lbab
 */

declare(strict_types=1);

if ( is_active_sidebar( 'sidebar-name' ) ) {
    echo esc_html( 'No active sidebar.' . basename( __FILE__ ) ), PHP_EOL;
    return;
}
?>
<aside>
<?php /* dynamic_sidebar( 'sidebar-name' ); */ ?>
</aside>
<?php
echo esc_html( basename( __FILE__ ) ), PHP_EOL;
