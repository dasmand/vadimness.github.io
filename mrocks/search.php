<?php get_header('main') ?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Our blog</h2>
                        <p>Home<span>//</span>blog</p>
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

                    <h3><?php
                        /* translators: %s: search query. */
                        printf( esc_html__( 'Search Results for: %s', 'Mrocks' ), '<span style="color: #ff1481">' . get_search_query() . '</span>' ); // сюда будут выводиться результаты поиска для вот такого поискового запроса:  %s - т..е. вместо этого маркера подставится: get_search_query()
                        ?>
                    </h3>
                    <?php if ( have_posts()) : while ( have_posts()) : the_post(); ?>
                        <article class="blog_item">
                            <div class="blog_details">
                                <a class="d-inline-block" style="text-decoration: underline" href="<?php the_permalink()?>">
                                    <h4><?php the_title()?></h4>
                                </a>
                            </div>
                        </article>
                    <?php endwhile; ?>

                    <?php else: ?>
                        <p><?php _e('Nothing found', 'Mrocks') ?></p>
                    <?php endif;?>

                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <?php get_sidebar()?>


        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php get_footer()?>
