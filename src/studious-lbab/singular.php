<?php
declare(strict_types=1);
/**
 * The singular template is used for posts when single.php is not found, or for
 * pages when page.php are not found. If singular.php is not found, index.php is used.
 *
 * The template file used to render:
 *  - a single post
 *    Functions is_singular and is_single return TRUE.
 *  - a single page
 *    Functions is_singular and is_page return TRUE.
 *  - an attachment page
 *    Functions is_attachment, is_singular and is_single return TRUE.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/post-template-files/#singular-php
 *
 * @package studious-lbab
 */

echo basename(__FILE__), PHP_EOL;
