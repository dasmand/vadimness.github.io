<?php get_header()?>

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-md-6">
                    <div class="banner_text">
                        <div class="banner_text_iner text-center">
                            <?php if(get_field('header1')):?>
                                <h2><?php the_field('header1')?></h2>
                            <?php endif;?>
                            <?php if(get_field('header2')):?>
                                <h3><?php the_field('header2')?></h3>
                            <?php endif;?>
                            <?php if(get_field('header_btn')):
                                $link = get_field('header_btn');
                                ?>
                                <a href="<?php echo esc_url($link['url']); ?>" class="btn_1"  target="<?php echo esc_attr($link['target']? $link['target'] : '_self'); ?>"  ><?php echo esc_html($link['title']);?><i class="ti-angle-right"></i> </a>
                            <?php endif;?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6">
                    <div class="banner_bg">
                        <img src="<?php bloginfo('template_url')?>/img/banner_img.png" alt="banner">
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-1 custom-animation"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_1.png" alt=""></div>
        <div class="hero-app-5 custom-animation2"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_3.png" alt=""></div>
        <div class="hero-app-7 custom-animation3"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_2.png" alt=""></div>
        <div class="hero-app-8 custom-animation"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_4.png" alt=""></div>
    </section>
    <!-- banner part start-->

    <!-- cta part start-->
    <section class="cta_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cta_part_iner">
                        <div class="cta_part_text">
                            <p> Our main feature</p>
                            <h1>Helping brands skyrocket</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->

    <!-- service_part part start-->
   <section class="service_part section_bg_2 section_padding">
        <div class="container">
            <div class="row">
             
            
                <div class="col-lg-3 col-sm-6" style="margin-bottom:25px">
                    <div class="single_service_part">
                        <div class="single_service_part_iner">
                             <span class="ti-image"></span>                            <h3>Marketing Strategy</h3>
                            <p>Based on in-depth market competitive analysis, we curate a Marketing strategy developed for your unique business requirements and needs</p>
                        </div>
                    </div>
                </div>
	  
                <div class="col-lg-3 col-sm-6" style="margin-bottom:25px">
                    <div class="single_service_part">
                        <div class="single_service_part_iner">
                             <span class="ti-gallery"></span>                            <h3>Branding &amp; Design</h3>
                            <p><strong style="color: #ff00ff;">Juicy pink </strong>or <strong style="color: #00ffff;">minty blue</strong> — it’s all about our imagination, creativity. And it’s also about your craziest ideas our designers will bring into life.</p>
                        </div>
                    </div>
                </div>
	  
                <div class="col-lg-3 col-sm-6" style="margin-bottom:25px">
                    <div class="single_service_part">
                        <div class="single_service_part_iner">
                             <span class="ti-bar-chart"></span>                            <h3>Startups &amp; Enterprises</h3>
                            <p>Whether you need a brand-new approach to launch your startup or a fresh vision to rebranding of your enterprise — we are here to provide both</p>
                        </div>
                    </div>
                </div>
	  
                <div class="col-lg-3 col-sm-6" style="margin-bottom:25px">
                    <div class="single_service_part">
                        <div class="single_service_part_iner">
                             <span class="ti-check-box"></span>                            <h3>Result Oriented</h3>
                            <p>While being creative, we don’t forget to calculate CPC, CPM, ROI, and other important metrics, providing you leads and customers</p>
                        </div>
                    </div>
                </div>
	        		
            </div>
        </div>
    </section>
    <!-- service_part part end-->
    <!-- about part start-->
    <section class="our_achivements"></section>
        <h2 style="text-align:center;color:#ff1481;padding:50px;0px;0px;">Our achievements</h2>
    <?php get_template_part('counter')?>
    <section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img src="<?php bloginfo('template_url')?>/img/about_img_1.png" class="img_1" alt="">
                        <img src="<?php bloginfo('template_url')?>/img/about_img_2.png" class="img_2" alt="">
                        <h2 style="margin-left:5px;">8+Years in <br>Digital Marketing</h2>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-4">
                    <div class="about_text">
                        <h5>About our Team</h5>
                        <h2>Lift the customer above ground</h2>
                        <h4>Help the customer run up the marketing hills by leveraging appropriate marketing rocks to get to the top. </h4>
                        <p>We are a team of dedicated digital marketing experts possessing 8+ years experience in the sphere. The services we provide includes but is not limited to Branding, Paid advertising, Search engine optimization and reputation management, Media Buying, Social media marketing, Content management, Community management, Video marketing, Email marketing, Online PR, Event management.
                        </p>
                        <a href="https://m-rocks.com/about_us/" class="btn_1">learn more <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-7 custom-animation"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_7.png" alt=""></div>
        <div class="hero-app-8 custom-animation2"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_4.png" alt=""></div>
        <div class="hero-app-6 custom-animation3"><img src="<?php bloginfo('template_url')?>/img/animate_icon/icon_5.png" alt=""></div>
    </section>
    
    <!-- about part start-->

    <!-- service_part start-->

     <!--       <section class="our_latest_work section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <p>recent work</p>
                        <h2>Creative work for client</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">

-->
    <!--                    <?php
               //        $id = 101;
                 //      $creative = new WP_Query(['cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC']);
                //       $recent_work = get_category($id);
                    ?>
                    <?php //if ( $creative->have_posts()) :   while ( $creative->have_posts()) :  $creative->the_post(); ?>
                    <div class="single_work">
                        <div class="row align-items-center">
                            <div class="col-md-5">
                                <div class="single_work_demo">
                                    <h5><?php //the_title()?></h5>
                                    <?php //the_content('')?>
                                    <a href="<?php //the_permalink()?>" class="btn_3">learn more <span class="flaticon-slim-right"></span> </a>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="demo_img">
                                     <?php //the_post_thumbnail('full')?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php //endwhile; ?>
                    <?php //else: ?>
                        <p>Записей рубрики creative work for client нет...</p>
                    <?php //endif;?>
                    <?php //wp_reset_postdata(); ?>


                </div>
            </div>
        </div>
    </section>
-->
    <!-- upcoming_event part start-->
    <!--::review_part start::-->
 <!-- 
<section class="review_part padding_top">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section_tittle text-center">
                        <p>recent work</p>
                        <h2>Creative work for client</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="intro_video_bg">
                        <div class="intro_video_iner text-center">
                            <div class="intro_video_icon">
                                <a id="play-video_1" class="video-play-button popup-youtube"
                                   href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                    <span class="ti-control-play"></span>
                                </a>
                            </div>
                            <p>Watch intro video</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-5">
                    <div class="review_text_item">
                        <div class="row">
                            <div class="col-lg-7 col-sm-8">
                                <div class="owl-carousel owl-theme" id="sync2">
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_1.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_2.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_3.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_1.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_2.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_3.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_1.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_2.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_3.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_1.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_2.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                    <div class="owl-thumb-item">
                                        <div class="slider-thumbnails">
                                            <img src="<?php bloginfo('template_url')?>/img/client/client_3.png" alt="slideimg" class="image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="slider owl-carousel owl-theme" id="sync1">
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                    <div class="client_review_text">
                                        <p>Own midst. Behold sea created male he together of That Said fourth deep
                                            abundantly
                                            have light night beginning rule darkness seed darkness which land saying
                                            moveth.
                                            Fifth shall wont signs, can seasons green days gathered great</p>
                                        <img src="<?php bloginfo('template_url')?>/img/client/client_logo.png" alt="#">
                                        <div class="client_info">
                                            <h3>Daniel E Gilcritst</h3>
                                            <h5>Manager, Vision</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

-->

    <!--::blog_part end::-->

    <!-- portfolio_part start-->

    <!-- cta part start-->


    <section class="cta_part" style="padding:5px 0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="cta_part_iner">
                        <div class="cta_part_text">
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->
    <!-- team_member part start-->


   


    <!-- team_member part end-->

<?php
    $id = 8;
    $news= new WP_Query(['cat' => $id, 'posts_per_page' => 3, 'order' => 'ASC']);
    $news_cat = get_category($id);
?>
 <!--   <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p><?= $news_cat->name ?></p>
                        <h2><?= $news_cat->description ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <?php if ( $news->have_posts()) : while ( $news->have_posts()) :  $news->the_post(); ?>
                <div class="col-sm-6 col-lg-4 col-xl-4  d-sm-block ">
                    <div class="single-home-blog">
                        <div class="card">
                            <?php the_post_thumbnail('large',array('class' => 'card-img-top'))?>
                            <div class="card-body">
                                <?php
                                    $cat = get_the_category($id);
                                ?>
                                <a href="<?php echo get_category_link($cat[0]->cat_ID);?>"> <?php echo $cat[0]->name; ?></a> | <span>  <?php the_time('F j, Y'); ?></time></span>
                                <a href="<?php the_permalink()?>">
                                    <h5 class="card-title"><?php the_title()?></h5>
                                </a>
                                <ul>
                                    <li> <i class="ti-comments"></i><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'Mrocks' ), number_format_i18n( get_comments_number() ) ); ?> </li>
                                    <li> <i class="ti-eye"></i><?php echo get_post_meta ($post->ID,'views',true); ?>
                                        <?php echo getPostViews(get_the_ID()); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php else: ?>
                    <p>Записей рубрики recent work нет...</p>
                <?php endif;?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
-->

<?php get_footer()?>