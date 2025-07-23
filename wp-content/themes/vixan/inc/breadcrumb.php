<?php

if ( !function_exists( 'vixan_breadcrumb' ) ) :
    /*
    * Shows a breadcrumb for all types of pages.  This is a wrapper function for the vixan_Breadcrumb class,
    * which should be used in theme templates.
    *
    * @access public
    * @param  array $args Arguments to pass to vixan_Breadcrumb.
    * @return void
    */
    function vixan_breadcrumb( $defaults = array() ){
        /* === OPTIONS === */
        $text['home']     = esc_html__('Home / ', 'vixan');
        $text['category'] = esc_html__('Category  " %s " ', 'vixan'); // text for a category page
        $text['tax']    = esc_html__('Archive for "%s"', 'vixan'); // text for a taxonomy page
        $text['search']   = esc_html__('Search Results for "%s" Query', 'vixan'); // text for a search results page
        $text['tag']      = esc_html__('Posts Tagged "%s"', 'vixan'); // text for a tag page
        $text['author']   = esc_html__('Posted by %s', 'vixan'); // text for an author page
        $text['404']      = esc_html__('Error 404', 'vixan'); // text for the 404 page

        $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
        $showOnHome  = 0; // 1 - show breadcrumbs on the homepage, 0 - don't show
        $delimiter   = ''; // delimiter between crumbs
        $before      = '<li class="current">'; // tag before the current crumb
        $after       = '</li>'; // tag after the current crumb

        /* === END OF OPTIONS === */

        global $post;
        $homeLink = esc_url( home_url( '/' ) );;
        $linkBefore = '<li class="breadcrumb-category">';
        $linkAfter = '</li>';
        $linkAttr = '';
        $link = $linkBefore . '<a' . $linkAttr . ' href="%1$s">%2$s</a>' . $linkAfter;
                $page_num='';
        if ( get_query_var('paged') ) {
            if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) 
                            $page_num='('.esc_html__('Page','vixan').' ' . get_query_var('paged'). ')';
                    
        }


        if (is_home() || is_front_page()) {
            if ($showOnHome) echo '<li id="crumbs"> <a href="' . $homeLink . '">' . $text['home'] . '</a></li>';
        } else {
                    
            echo '<ul id="crumbs" class="list-inline">' . sprintf($link, $homeLink, $text['home']) . $delimiter;

            if ( is_category() ) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                $allowed_html = array(
                    'a' => array(
                        'href' => array(),
                        'title' => array()
                    ),
                    'li' => array('class' => true)
                );
                echo wp_kses($cats, $allowed_html);
            }
                echo esc_attr($before) . sprintf($text['category'], single_cat_title('', false)) .' '. $page_num . $after ;

        } elseif( is_tax() ){
            $thisCat = get_category(get_query_var('cat'), false);
            
            if ( !isset($thisCat->errors) && $thisCat->parent != 0 ) {
                $cats = get_category_parents($thisCat->parent, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo esc_attr($cats);
            }
            echo esc_attr($before) . sprintf($text['tax'], single_cat_title('', false)) .' '. $page_num . $after;

        }elseif ( is_search() ) {
            echo esc_attr($before) . sprintf($text['search'], get_search_query()).' '. $page_num . $after;

        } elseif ( is_day() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo sprintf($link, get_month_link(get_the_time('Y'),get_the_time('m')), get_the_time('F')) . $delimiter;
            echo esc_attr($before) . get_the_time('d') .' '. $page_num. $after;

        } elseif ( is_month() ) {
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $delimiter;
            echo esc_attr($before) . get_the_time('F') . $after;

        } elseif ( is_year() ) {
            echo esc_attr($before) . get_the_time('Y').' '. $page_num . $after;

        } elseif ( is_single() && !is_attachment() ) {
            if ( get_post_type() != 'post' ) {
                if(get_post_type() == 'product'){
                    global $concierge_option_data;
                    if(isset($concierge_option_data['concierge-select-search-page']) && !empty($concierge_option_data['concierge-select-search-page'])){
                        $search_page_id = $concierge_option_data['concierge-select-search-page'];
                        $page = get_post($search_page_id);
                        printf($link, get_permalink($search_page_id), $page->post_title);
                    if ($showCurrent == 1) echo esc_attr($delimiter) . $before . get_the_title() . ' ' . $page_num . $after;

                    }else{

                        if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
                            printf($link, get_permalink( wc_get_page_id( 'shop' )), 'product');
                            if ($showCurrent == 1) echo esc_attr($delimiter) . $before . get_the_title() . ' ' . $page_num. $after;
                        }
                    }
                }else{

                  $post_type = get_post_type_object(get_post_type());

                  $slug = $post_type->rewrite;
                  printf($link, $homeLink . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                  if ($showCurrent == 1) echo esc_attr($delimiter) . $before . get_the_title() . ' ' . $page_num. $after;
                }
            }else {
                $cat = get_the_category();
                if(is_array($cat) && !empty($cat)){
                    $cat = $cat[0];
                    $cats = get_category_parents($cat, TRUE, $delimiter);
                    if ($showCurrent == 0) $cats = preg_replace("#^(.+)$delimiter$#", "$1", $cats);
                    $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                    $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                    echo esc_attr($cats);
                }
                if ($showCurrent == 1) echo esc_attr($before) . get_the_title() . ' ' . $page_num . $after;
            }

        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());

            if(isset($post_type) && !empty($post_type)){
                echo esc_attr($before) . $post_type->labels->singular_name . ' ' . $page_num. $after;
            }
        } elseif ( is_attachment() ) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            if(is_array($cat) && !empty($cat)){
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $delimiter);
                $cats = str_replace('<a', $linkBefore . '<a' . $linkAttr, $cats);
                $cats = str_replace('</a>', '</a>' . $linkAfter, $cats);
                echo esc_attr($cats);
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($showCurrent == 1) echo esc_attr($delimiter) . $before . get_the_title() . $after;

        } elseif ( is_page() && !$post->post_parent ) {
            if ($showCurrent == 1) echo esc_attr($before) . get_the_title() . ' ' . $page_num. $after;

        } elseif ( is_page() && $post->post_parent ) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo esc_attr($breadcrumbs[$i]);
                if ($i != count($breadcrumbs)-1) echo esc_attr($delimiter);
            }
            if ($showCurrent == 1) echo esc_attr($delimiter) . $before . get_the_title() . $after;

        } elseif ( is_tag() ) {
            echo esc_attr($before) . sprintf($text['tag'], single_tag_title('', false)) . ' ' . $page_num . $after;

        } elseif ( is_author() ) {
            global $author;
            $userdata = get_userdata($author);
            echo esc_attr($before) . sprintf($text['author'], $userdata->display_name) . $after;

        } elseif ( is_404() ) {
            echo esc_attr($before) . $text['404'] . ' ' . $page_num . $after;
        }

                

        echo '</ul>';

        }
    }

endif;