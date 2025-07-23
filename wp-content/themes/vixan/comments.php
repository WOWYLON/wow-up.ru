<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vixan
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
 
 //strarting work

if ( post_password_required() ) { ?>
	<?php esc_html_e('This post is password protected. Enter the password to view comments.', 'vixan') ?>
<?php
	return;
}
?>

<div id="comments" class="comments-area anim_div_ShowDowns col-xl-8 col-lg-7"> 

<?php if ( have_comments() ) : ?>
	<h4 class="comments-title comment-one__title">           
	<?php
        echo esc_html(
            sprintf( 
                _nx( "1 Comment", '%s Comments', get_comments_number(), 'comments title', 'vixan' ), number_format_i18n( get_comments_number() ) 
            )
        ); 
    ?>
	</h4>

    <ol class="comment-list">
        <?php
            wp_list_comments( array(
                    'callback'       => 'vixan_comments',
                    'short_ping'  => true,
                    'avatar_size' => 120,
                ) );
        ?>
    </ol>
    
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
    <nav id="comment-nav-above">
        <div class="next-post"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'vixan' ) ); ?></div>
        <div class="pre-post"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'vixan' ) ); ?></div>
    </nav>
<?php endif; // check for comment navigation ?>

<?php
/* If there are no comments and comments are closed, let's leave a little note, shall we?
 * But we don't want the note on pages or post types that do not support comments.
 */
elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
?>

    <div class="disp"><?php the_tags(); ?></div>
    <p class="nocomments"><?php esc_html_e( 'Comments are closed.', 'vixan' ); ?></p>

<?php else : ?>

    <div class="entry-content first-comment">
        <p><?php esc_html_e( 'No Comment Yet! You can post first response comment.', 'vixan' ); ?></p>
    </div><!-- .entry-content -->
    
<?php endif; ?>
    
    <?php vixan_comment_form(); ?>
</div>

