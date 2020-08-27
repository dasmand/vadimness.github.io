<?php get_header('main') ?>
<?php
$cat = get_the_category($post->ID);
?>
<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2><?php echo $cat[0]->name; ?></h2>
                        <p><a style="color: #fff" href="<?php echo home_url()?>">Home</a><span>//</span><?php the_title()?></p>
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
                            <?php the_post_thumbnail('large',array('class' => 'rounded-0'))?>
                          
                        </div>

                        <div class="blog_details">
                            <a class="d-inline-block" href="<?php the_permalink()?>">
                                <h2><?php the_title()?></h2>
                            </a>
                            <?php the_content('')?>
                            <ul class="blog-info-link">

                                <li><a href="<?php echo get_category_link($cat[0]->cat_ID);?>"><i class="far fa-user"></i> <?php echo $cat[0]->name; ?></a></li>
                                <li><a href="<?php the_permalink() ?>#comments"><i class="far fa-comments"></i><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'Mrocks' ), number_format_i18n( get_comments_number() ) ); ?> </a></li>
                            </ul>
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

          <?php get_sidebar()?>


        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php get_footer()?>