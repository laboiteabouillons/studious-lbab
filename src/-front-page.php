<?php
declare(strict_types=1);
/**
 * The front page template is always used as the site front page if it exists,
 * regardless of what settings on Admin > Settings > Reading.
 *
 * The template file used to render the site front-page:
 *  - the latest blog posts when “your latest posts” is set in the front page
 *    displays section.
 *    Functions is_home, is_front_page return TRUE.
 *  - a static page when “a static page” is set in the front page displays
 *    section.
 *    Functions is_front_page, is_page return TRUE.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package studious-lbab
 */

echo basename(__FILE__), PHP_EOL;
