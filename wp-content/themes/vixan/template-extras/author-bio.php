  
  <div class="media mediaucstom-1 img-thumbnail">
      <?php
        echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'pink_author_bio_avatar_size', 80 ) );
      ?>
      <div class="media-body">
          <div class="clearfix row">
            <div class="col-md-4">
              <h5 class="author-name"><?php the_author(); ?></h5>
            </div>  
            <div class="col-md-8">
              <ul class="list-inline author-sci">
              <?php  
              $linkedin_profile = trim( get_the_author_meta( 'linkedin_profile' ) );
              if ( $linkedin_profile && ! empty( $linkedin_profile ) ) {
                echo '<li class="linkedin"><a class = "social-icon" href="' . esc_url( $linkedin_profile ) . '" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
              }

              $twitter_profile = trim( get_the_author_meta( 'twitter_profile' ) );
              if ( $twitter_profile && ! empty( $twitter_profile ) ) :
                echo '<li class="twitter"><a class = "social-icon" href="' . esc_url( $twitter_profile ) . '" target="_blank"><i class="fa fa-twitter"></i></a></li>';
              endif;

              $facebook_profile = trim( get_the_author_meta( 'facebook_profile' ) );
              if ( $facebook_profile && ! empty( $facebook_profile ) ) :
                echo '<li class="facebook"><a class = "social-icon" href="' . esc_url( $facebook_profile ) . '" target="_blank"><i class="fa fa-facebook"></i></a></li>';
              endif;

              $google_profile = trim( get_the_author_meta( 'google_profile' ) );
              if ( $google_profile && ! empty( $google_profile ) ) {
                echo '<li class="google"><a class = "social-icon" href="' . esc_url( $google_profile ) . '" rel="author" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
              }

              $github_profile = trim( get_the_author_meta( 'github_profile' ) );
              if ( $github_profile && ! empty( $github_profile ) ) {
                echo '<li class="linkedin"><a class = "social-icon" href="' . esc_url( $github_profile ) . '" target="_blank"><i class="fa fa-github"></i></a></li>';
              }
            ?>
            </ul>
          </div>
        </div>
        <p><?php echo esc_html( get_the_author_meta( 'description' ) ) ?></p>
    </div>
</div>

<div class="clear"></div>
