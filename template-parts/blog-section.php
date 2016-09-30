<?php
/**
 * Blog Section
 *
 *
 * @package Blaire
 */
$blog_arg = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'posts_status' => 'publish',
    'order' => 'desc',
    'orderby' => 'menu_order date'
    );
$blog_query = new WP_Query($blog_arg);
if($blog_query->have_posts()): ?>
     <!-- Start of blog post -->
    <div class="blog-post-sec sec">
        <div class="container">
            <div class="row">
                <div class="section-heading">
                  <h3>Recent Posts</h3>
                  <span>Read our latest posts</span>
                </div>

                <div class="blog-post-wrapper">

                    <?php while($blog_query->have_posts()):
                        $blog_query->the_post(); ?>

                        <div class="blog-post-item">
                            <div class="blog-post">
                                <div class="blog-image">
                                    <img src="<?php echo get_template_directory_uri() . '/images/blog1.jpg'?>">
                                </div>
                                <div class="blog-text">
                                    <?php the_title( '<h3>', '</h3>' );?>
                                    <div class="icons-wrapper">
                                        <span><i class="fa fa-calendar"></i>
                                            : August 08, 2016</span>&nbsp;&nbsp;<span><i class="fa fa-comment-o"></i>10 Comments</span>
                                        </div>
                                        <div class="blog-detail">
                                            <p><?php the_excerpt(); ?></p>
                                            <a href="<?php the_permalink() ?>" ><?php esc_html_e('Read More' );?></a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <?php endwhile;
                    wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endif;
