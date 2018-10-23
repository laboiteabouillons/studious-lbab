<?php
/**
 * The footer template partial usually contains your site’s credits, widgetized areas, etc.
 *
 * The template tag to use to include this template as a part of another template is: get_footer()
 * Any footer content should be hooked into the wp_footer filter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#footer-php
 *
 * @package studious-lbab
 */

declare(strict_types=1);
?>
<footer>
<?php
// get_sidebar( 'sidebar-name' );
?>
</footer>
<?php wp_footer(); ?>
</body>
</html>
<?php
echo esc_html( basename( __FILE__ ) ), PHP_EOL;
