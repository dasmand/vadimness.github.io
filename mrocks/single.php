<?php get_header('main') ?>

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
           <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <img style="position:relative; top:-25px;" src="https://m-rocks.com/wp-content/themes/mrocks/img/marketing-hub.png">
                    </div>
                </div>
            </div>
          
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <?php the_post_thumbnail('full',array('class' => 'rounded-0'))?>
                                    <a href="#" class="blog_item_date">
                                        <h3><?php the_time('j'); ?></h3>
                                        <p><?php the_time('F'); ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">

                                        <h2><?php the_title()?></h2>

                                    <?php the_content('')?>
                                   <ul class="blog-info-link">

								<li style="color: #666666"><i class="far fa-user"></i> <strong>Name:</strong> <?php  the_author() ?> <strong>Position:</strong> <?= the_field('position')?></li>
                                <li><a href="<?php the_permalink() ?>#comments"><i class="far fa-comments"></i><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'Mrocks' ), number_format_i18n( get_comments_number() ) ); ?> </a></li>
                            </ul>
                                </div>
                            </article>
                        <?php endwhile; ?>
                            <?php comments_template(); ?>
                        <?php else: ?>
                            <p>Записей блога нет...</p>
                        <?php endif;?>
                    </div>
                </div>

                <?php get_sidebar()?>


            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

<?php get_footer()?>