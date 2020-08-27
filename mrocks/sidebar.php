<div class="col-lg-4">
    <div class="blog_right_sidebar">

        <aside class="single_sidebar_widget search_widget">
            <?php get_search_form()?>
        </aside>

        <?php if ( is_active_sidebar( 'sidebar-widgets' ) ){ ?>
                <?php // dynamic_sidebar( 'sidebar-widgets' ); ?>
        <?php } ?>
   		<aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Category</h3>
			<a style="display:block;" class="sidebar-menu"; href="https://m-rocks.com/category/marketing-rocks/">Marketing Rocks</a>
			<a style="display:block;"  class="sidebar-menu"; href="https://m-rocks.com/category/leaders-notes/">Leader’s Notes</a>
			 <a style="display:block;" class="sidebar-menu"; href="https://m-rocks.com/category/learning-hub/">Learning Hub</a>
                
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
                <?php $the_query = new WP_Query( [
					'cat' => array(8,11,12,13,14),
					'posts_per_page' => 4,
				] ); ?>
		
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                    <div class="media post_item">
                        <?php the_post_thumbnail('thumbnail')?>
                        <div class="media-body">
                            <a href="<?php the_permalink() ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <p><?php the_time('F j, Y'); ?></p>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
        </aside>


        <?php if ( is_active_sidebar( 'tag-title' ) ){ ?>
            <?php dynamic_sidebar( 'tag-title' ); ?>
        <?php } ?>


<!--
        <aside class="single_sidebar_widget instagram_feeds">
            <h4 class="widget_title">Instagram Feeds</h4>
            <ul class="instagram_row flex-wrap">
                <li>
                    <a href="#">
                        <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/post/post_5.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/post/post_6.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/post/post_7.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/post/post_8.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/post/post_9.png" alt="">
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/post/post_10.png" alt="">
                    </a>
                </li>
            </ul>
        </aside>


        <aside class="single_sidebar_widget newsletter_widget">
            <h4 class="widget_title">Newsletter</h4>

            <form action="#">
                <div class="form-group">
                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_4"
                        type="submit">Subscribe</button>
            </form>
        </aside>
									 -->
    </div>
</div>