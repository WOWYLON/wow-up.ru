<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package vixan
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function vixan_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'onfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'vixan_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function vixan_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'vixan_pingback_header' );


//----------------------------------------------------------------------
/* Get comment form */
//----------------------------------------------------------------------
if ( ! function_exists( 'vixan_comment_form' ) ) :

function vixan_comment_form(){
	global $user_identity;
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	if ( comments_open() ) { ?>

	<div id="respond" class="comment-form comment-respond">

		<div class="cs_height_30 cs_height_lg_30"></div>

		<h4 id="reply-title" class="comment-form__title">
			<?php comment_form_title(esc_html_e('Leave a comment', 'vixan')); ?>
		</h4>

		<div class="cancel-reply"><?php cancel_comment_reply_link(); ?></div>

		<form id="comment-form" class="form comment-one__form contact-form-validated" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">

		<?php if ( is_user_logged_in() ) : ?>

			<div class="row">
                <div class="col-lg-6">
				
                    <div class="comment-log">
                        <p><?php esc_html_e('Logged in as', 'vixan'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo esc_html($user_identity); ?></a>. <a href="<?php echo esc_url( wp_logout_url( get_permalink() ) ); ?>" title="<?php esc_attr_e('Log out of this account', 'vixan'); ?>"><?php esc_html_e('Log out &raquo;', 'vixan'); ?></a></p>
                    </div>

                    <div class="cs_field_group">
                        <textarea name="comment" id="comment" class="form-control cs_input_field" placeholder="<?php echo esc_attr_x( 'Write Comment Here..', 'placeholder', 'vixan'); ?>"></textarea>
						<label for="comment" class="cs_input_label"><?php esc_html_e('Your Comment', 'vixan');?></label>
					</div>    	

					<div class="cs_height_50 cs_height_lg_50"></div>

                    <div class="cs_field_group">
						<button class="cs_btn cs_style_1 cs_type_btn">
							<input class="text thm-btn comment-form__btn" name="submit" type="submit" id="submit" value="<?php echo esc_attr_x( 'Post Comment', 'submit', 'vixan'); ?>">
							<?php comment_id_fields(); ?>
							<?php do_action('comment_form', get_the_ID()); ?>
						<svg
							width="19"
							height="13"
							viewBox="0 0 19 13"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
							d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
							fill="currentColor"
							></path>
						</svg>
						</button>	
					</div>

			    </div>
            </div>

		<?php else : ?>

			<div class="col-lg-6">
                <div class="row">

                    <div class="cs_field_group col">
						<input type="text" name="name" placeholder="<?php echo esc_attr_x( 'Name', 'placeholder', 'vixan'); ?>" class="form-control cs_input_field"/>
						<label for="name" class="cs_input_label"><?php esc_html_e('Name', 'vixan'); ?></label>
                    </div>

					<div class="cs_field_group col">
						<input type="email" name="email" placeholder="<?php echo esc_attr_x( 'Email', 'placeholder', 'vixan'); ?>" class="form-control cs_input_field"/>
						<label for="name" class="cs_input_label"><?php esc_html_e('Email', 'vixan'); ?></label>
					</div>

                    <div class="cs_field_group">
                        <textarea name="comment" id="comment" class="form-control cs_input_field" placeholder="<?php echo esc_attr_x( 'Write Comment Here..', 'placeholder', 'vixan'); ?>"></textarea>
						<label for="comment" class="cs_input_label"><?php esc_html_e('Your Comment', 'vixan');?></label>
					</div> 
				</div>	   	

					<div class="cs_height_50 cs_height_lg_50"></div>

                    <div class="cs_field_group">
						<button class="cs_btn cs_style_1 cs_type_btn">
							<input class="text thm-btn comment-form__btn" name="submit" type="submit" id="submit" value="<?php echo esc_attr_x( 'Post Comment', 'submit', 'vixan'); ?>">
							<?php comment_id_fields(); ?>
							<?php do_action('comment_form', get_the_ID()); ?>
						<svg
							width="19"
							height="13"
							viewBox="0 0 19 13"
							fill="none"
							xmlns="http://www.w3.org/2000/svg"
						>
							<path
							d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
							fill="currentColor"
							></path>
						</svg>
						</button>	
					</div>
            </div>        

		<?php endif; ?>

		</form>

    </div>

	<?php
	}
}
endif;

//----------------------------------------------------------------------
// Comments list
//----------------------------------------------------------------------

if ( ! function_exists( "vixan_comments" ) ) :

	function vixan_comments( $comment, $args, $depth ) {

		$GLOBALS[ 'comment' ] = $comment;
		switch ( $comment->comment_type ) {

			// Display trackbacks differently than normal comments.
			case 'pingback' :
			case 'trackback' :
				?>

				<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
					
				<p><?php esc_html_e( 'Pingback:', 'vixan' ); ?><?php comment_author_link(); ?><?php edit_comment_link( esc_html__( '(Edit)', 'vixan' ), '<span class="edit-link">', '</span>' ); ?></p>

				<?php
				break;

			default :
				// Proceed with normal comments.
				global $post;
				?>
			<li <?php comment_class("comment_item"); ?> id="li-comment-<?php comment_ID(); ?>">

				<div id="div-comment-<?php comment_ID(); ?>" class="comment-body comment-one__single row">

                    <div class="comment-one__image col-lg-2">
                        <?php if ($args['avatar_size'] != 0) echo  get_avatar( $comment, 120 ); ?>
                    </div><!-- .comment-author -->

	                <div class="comment-one__content col-lg-9">

                        <h6 class="comment_author"><?php echo get_comment_author(); ?></h6>

						<div class="comment-metadata">
	                        <span><?php echo get_comment_date(' M d, Y'); ?>
	                    </div><!-- .comment-metadata -->

                        <div class="comment-content">
                            <?php comment_text(); //Comment text ?>
                        </div>

                        <div class="reply">
							<button class="cs_btn cs_style_1 cs_type_btn">
								<?php comment_reply_link( array_merge( $args, array(
									'reply_text' =>   esc_html__( 'Reply', 'vixan' ), 
									'depth'      => $depth,
									'max_depth'  => $args[ 'max_depth' ]
								) ) ); ?>
								<svg
									width="19"
									height="13"
									viewBox="0 0 19 13"
									fill="none"
									xmlns="http://www.w3.org/2000/svg"
								>
									<path
									d="M18.5303 7.03033C18.8232 6.73744 18.8232 6.26256 18.5303 5.96967L13.7574 1.1967C13.4645 0.903806 12.9896 0.903806 12.6967 1.1967C12.4038 1.48959 12.4038 1.96447 12.6967 2.25736L16.9393 6.5L12.6967 10.7426C12.4038 11.0355 12.4038 11.5104 12.6967 11.8033C12.9896 12.0962 13.4645 12.0962 13.7574 11.8033L18.5303 7.03033ZM0 7.25H18V5.75H0V7.25Z"
									fill="currentColor"
									></path>
								</svg>
							</button>	
                        </div>

                    </div>					

                </div>

				<?php if ( '0' == $comment->comment_approved ) { //Comment moderation ?>
					<div class="alert alert-info">
						<?php esc_html_e( 'Your comment is awaiting moderation.', 'vixan' ); ?>
					</div>
				<?php } ?>
						
				<!-- #comment-## -->
				<?php
				break;
		} // end comment_type check

	}

endif;


/**
 * Social Share
 */
function vixan_social_share_buttons() {

	$post_url = get_the_permalink();
    $post_title = get_the_title();

	echo '  <div class="container">
				<div class="row">
				<div class="cs_share_post anim_div_ShowDowns">
					<h6 class="m-0">SHARE POST</h6>
					<div>
					<div class="cs_share_btn_g">
						<div class="col cs_share_btn cs_center">
						<a href="https://twitter.com/intent/tweet?url='. esc_url($post_url) .'"> Twitter </a>
						</div>
						<div class="col cs_share_btn cs_center">
						<a href="https://www.facebook.com/sharer/sharer.php?u='. esc_url($post_url) .'"> Facebook </a>
						</div>
						<div class="col cs_share_btn cs_center">
						<a href="https://www.linkedin.com/sharing/share-offsite/?url='. esc_url($post_url) .'"> Linkedin </a>
						</div>
						<div class="col cs_share_btn cs_center">
						<a href="https://pinterest.com/pin/create/button/?url='. esc_url($post_url) .'"> Pinterest </a>
						</div>
					</div>
					</div>
				</div>
				</div>
				<div class="cs_height_70 cs_height_lg_35"></div>
				<div class="cs_hr_design anim_div_ShowDowns"></div>
			</div>';

}


/**
 * Block Styles
 */
function vixan_register_block_styles() {

	if ( function_exists( 'register_block_style' ) ) {

		register_block_style(
			'core/image',
			array(
				'name'  => 'bottom-right',
				'label' => esc_html__( 'Bottom Right', 'vixan' ),
			)
		);
		
		register_block_style(
			'core/image',
			array(
				'name'  => 'bottom-left',
				'label' => esc_html__( 'Bottom Left', 'vixan' ),
			)
		);

		register_block_style(
			'core/image',
			array(
				'name'  => 'center',
				'label' => esc_html__( 'Center', 'vixan' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'vixan_register_block_styles' );


/**
 * Block Pattern
 */
function vixan_register_block_patterns() {
        register_block_pattern(
            'wpdocs/my-example',
            array(
                'title'         => __( 'My First Block Pattern', 'vixan' ),
                'description'   => _x( 'This is my first block pattern', 'Block pattern description', 'vixan' ),
                'content'       => '<!-- wp:paragraph --><p>A single paragraph block style</p><!-- /wp:paragraph -->',
                'categories'    => array( 'text' ),
                'keywords'      => array( 'cta', 'demo', 'example' ),
                'viewportWidth' => 800,
            )
        );
}
add_action( 'init', 'vixan_register_block_patterns' );


/**
 * Top Search Form
 */
 



 /**
 * Mute Migrate is installed
 */ 
// silencer script
function jquery_migrate_silencer() {
    // create function copy
    $silencer = '<script>window.console.logger = window.console.log; ';
    // modify original function to filter and use function copy
    $silencer .= 'window.console.log = function(tolog) {';
    // bug out if empty to prevent error
    $silencer .= 'if (tolog == null) {return;} ';
    // filter messages containing string
    $silencer .= 'if (tolog.indexOf("Migrate is installed") == -1) {';
    $silencer .= 'console.logger(tolog);} ';
    $silencer .= '}</script>';
    return $silencer;
}


// for the admin, hook to admin_print_scripts
add_action('admin_print_scripts','jquery_migrate_echo_silencer');
function jquery_migrate_echo_silencer() {echo jquery_migrate_silencer();}

 
 /**
 * Remove Traling slashes
 */ 
function vixan_remove_trailing_slashes( $content ) {
if ( is_admin()){
return $content;
}
else {
return str_replace( '/>', '>', $content );
}
}
add_filter( 'litespeed_buffer_after', 'vixan_remove_trailing_slashes', 0);
