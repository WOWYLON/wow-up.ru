<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vixan
 */

get_header();
$vixan_options = get_option('vixan_options'); ?>

<?php
    $blog_layout_choice = '';
    $sidebar_switch = '';   
    $navigation_switch = '';
    $show_social_icon = '';
    
    $relp_title = '';
    $relp_title2 = '';
    $relp_no = '';

    if(isset($vixan_options['vixan_relp_title'])){  
        $relp_title = $vixan_options['vixan_relp_title'];
    } 
    if(isset($vixan_options['vixan_relp_title2'])){  
        $relp_title2 = $vixan_options['vixan_relp_title2'];
    }
	if(isset($vixan_options['vixan_relp_no'])){  
        $relp_no = $vixan_options['vixan_relp_no'];
    }   
    
    if(isset($vixan_options['vixan_layout_blog'])){
        $blog_layout_choice = $vixan_options['vixan_layout_blog'];
    }   

    if(isset($vixan_options['vixan_single_sidebar'])){    
        $sidebar_switch = $vixan_options['vixan_single_sidebar'];
    }

    if(isset($vixan_options['vixan_switch_navigation'])){ 
        $navigation_switch = $vixan_options['vixan_switch_navigation'];
    }
    
    if(isset($vixan_options['vixan_show_social_icon'])){    
        $show_social_icon = $vixan_options['vixan_show_social_icon'];
    }   

?>


<div class="cs_height_219 cs_height_lg_120"></div>

<!-- Start Main -->
<div class="blog-details single-blog">
    <div class="container">
        <div class="row">

            <?php while (have_posts()) : the_post(); ?>
                
                <div id="primary" class="single-post-area">
                    <?php get_template_part('template-parts/post/content', 'single'); ?>
                </div><!-- #primary -->

            <?php endwhile; // End of the loop. ?>

                                        
            <?php if (comments_open() || get_comments_number()) { ?> 
            
                <div class="cs_height_100 cs_height_lg_50"></div>

                <?php comments_template(); ?>
                
                <div class="cs_height_150 cs_height_lg_60"></div>

            <?php } ?>
            
            <?php if(!empty($relp_title)) { ?>
            
                <?php get_template_part('template-parts/post/content', 'relatedpost'); ?><!-- #Related Post -->  
            
            <?php } ?>
                
        </div><!-- row -->
    </div><!-- container -->
</div><!-- single-main -->

<?php get_footer();
