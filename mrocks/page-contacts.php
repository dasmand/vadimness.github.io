<?php get_header('main') ?>
<?php
$cat = get_the_category($post->ID);
?>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg-contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
            
							<img style="position:relative; top:-25px;" src="<?php bloginfo('template_url')?>/img/contact-us.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


<!--================Blog Area =================-->
<section class="blog_area section_padding"  style="padding:0px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">


                <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
                    <article class="blog_item">
                        <div class="blog_item_img">
                            <?php the_post_thumbnail('large',array('class' => 'rounded-0'))?>
                          
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php the_permalink()?>">
                                <h2><?php the_title()?></h2>
                            </a>
                            <?php the_content('')?>
                      
                        </div>
                    </article>
                <?php endwhile; ?>

                    <?php the_posts_pagination(array(
                        'end_size' => 1,  // количество страниц на концах
                        'mid_size' => 1,  // количество страниц вокруг текущей
                        'type' => 'list',
                        'prev_text'    => __('&lt;'),
                        'next_text'    => __('&gt;'),
                    )) ?>

                <?php else: ?>
                <p>Записей блога нет...</p>
                <?php endif;?>
                </div>
            </div>

          <?php // get_sidebar()?>


        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php get_footer()?>