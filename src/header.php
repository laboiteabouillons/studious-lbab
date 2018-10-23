<?php
/**
 * The header template partial usually contains your site’s document type, meta information, links to stylesheets and
 * scripts, and other data.
 *
 * The template tag to use to include this template as a part of another template is: get_header()
 * Any head content should be hooked into the wp_head filter.
 * Styles and scripts are enqueued through the wp_enqueue_script function.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/#header-php
 *
 * @package studious-lbab
 */

declare(strict_types=1);
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php wp_head(); ?>
<!--meta name="viewport" content="width=device-width, initial-scale=1" -->
<!--link rel="profile" href="https://gmpg.org/xfn/11" -->
</head>
<body <?php body_class(); ?>>
<?php
echo esc_html( basename( __FILE__ ) ), PHP_EOL;
