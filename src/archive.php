<?php
declare(strict_types=1);
/**
 * The archive template is used when visitors request posts by category, author,
 * or date. Note: this template will be overridden if more specific templates
 * are present like category.php, author.php, and date.php.
 *
 * Function is_archive returns TRUE.
 * The file is used to render:
 *  - the author page. Function is_author returns true
 *  - the category page. Function is_category returns true
 *  - the tag page. Function is_tag returns true
 *
 * @link https://codex.wordpress.org/Creating_an_Archive_Index#The_Archives_Page
 *
 * @package studious-lbab
 */

echo basename(__FILE__), PHP_EOL;
