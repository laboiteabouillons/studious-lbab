<?php
/**
 * The comments template.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comments
 *
 * @package studious-lbab
 */

declare(strict_types=1);

// Ignore comments if a password is required.
if ( post_password_required() ) {
    return;
}

// Ensure the current post type supports comments.
if ( ! post_type_supports( get_post_type(), 'comments' ) ) {
    return;
}

?>

<?php
echo esc_html( basename( __FILE__ ) ), PHP_EOL;
