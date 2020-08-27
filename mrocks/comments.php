<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comment-form container-fluid">

    <?php if ( have_comments() ) : ?>
        <h4>
            <?php
            $comments_number = get_comments_number();
            if ( 1 === $comments_number ) {
                /* translators: %s: post title */
                printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
            } else {
                printf(
                /* translators: 1: number of comments, 2: post title */
                    _nx(
                        '%1$s thought on &ldquo;%2$s&rdquo;',
                        '%1$s thoughts on &ldquo;%2$s&rdquo;',
                        $comments_number,
                        'comments title',
                        'twentysixteen'
                    ),
                    number_format_i18n( $comments_number ),
                    get_the_title()
                );
            }
            ?>
        </h4>

        <?php the_comments_navigation(); ?>

        <div class="comment">
            <?php
            wp_list_comments( array(
                'style'       => 'div',
                'short_ping'  => true,
                'avatar_size' => 84,
            ) );
            ?>
        </div><!-- .comment-list -->

        <?php the_comments_navigation(); ?>

    <?php endif; // Check for have_comments(). ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
        ?>
        <p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
    <?php endif; ?>

    <?php
    $fields = array(
        'author' => '<input type="text" class="form-control" name="author" id="author" placeholder="Your name">',
        'email' => '<input type="email" class="form-control" name="email" id="email" placeholder="Your Email">',
    );

    $args = array(
        'comment_notes_after' => '',
        'comment_field' => '<textarea class="form-control" rows="8" id="comment" name="comment" placeholder="Your message"></textarea>',
        'label_submit' => 'Send message',
        'fields' => apply_filters('comment_form_default_fields', $fields)
    );
    comment_form($args);
    ?>

</div><!-- .comments-area -->