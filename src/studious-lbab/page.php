<?php
declare(strict_types=1);
/**
 * The page template is used when visitors request individual pages, which are
 * a built-in template.
 *
 * The template file used to render:
 *  - a static page (page post-type).
 *    Function is_page returns TRUE.
 *  - a static front page when “front page” is set in the front page displays
 *    section and front-page.php does not exists.
 *    Functions is_front_page and is_page return TRUE.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package studious-lbab
 */

echo basename(__FILE__), PHP_EOL;
