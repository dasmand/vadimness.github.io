<?php get_header('main') ?>
<?php
$cat = get_the_category($post->ID);
?>
<!-- breadcrumb start-->

<section class="breadcrumb breadcrumb_bg breadcrumb_bg-contacts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                     	<img style="position:relative; top:-25px;" src="<?php bloginfo('template_url')?>/img/about-us.png"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about_img">
                        <img src="https://m-rocks.com/wp-content/themes/mrocks/img/about_img_1.png" class="img_1" alt="">
                        <img src="https://m-rocks.com/wp-content/themes/mrocks/img/about_img_2.png" class="img_2" alt="">
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
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-app-7 custom-animation"><img src="https://m-rocks.com/wp-content/themes/mrocks/img/animate_icon/icon_7.png" alt=""></div>
        <div class="hero-app-8 custom-animation2"><img src="https://m-rocks.com/wp-content/themes/mrocks/img/animate_icon/icon_4.png" alt=""></div>
        <div class="hero-app-6 custom-animation3"><img src="https://m-rocks.com/wp-content/themes/mrocks/img/animate_icon/icon_5.png" alt=""></div>
    </section>


  <?php
                                $id = 7;
                                $posts_team = new WP_Query(['cat' => $id, 'posts_per_page' => 25, 'order' => 'ASC']);
                                $cat = get_the_category();
                                $num_comments = get_comments_number();
                            ?>

 <section class="team_member_section section_padding">
	 <!--<h3 style="color:#fff; text-align:center; margin-bottom:25px; font-size:36px;">Our team</h3>-->
        <div class="container">
            <div class="row">
		
    <?php if ( $posts_team->have_posts()) : while ( $posts_team->have_posts()) :  $posts_team->the_post(); ?>
                <div class="col-sm-4">
                    <div class="single_team_member">
                        <?php the_post_thumbnail()?>
                        <div class="single_team_text">
                            <h3><a href="<?php // the_permalink()?>"><?php the_title()?></a></h3>
                            <p><?php the_content('')?></p>
                            <div class="team_member_social_icon">

                            <?php if(get_field('facebook')):
                                $facebook = get_field('facebook');
                            ?>
                            <a href="<?php echo esc_url($facebook['url']); ?>" target="<?php echo esc_attr($facebook['target']? $facebook['target'] : '_self'); ?>"  ><?php echo esc_html($facebook['title']);?></a>
                            <?php endif;?>

                            <?php if(get_field('twitter')):
                                $twitter = get_field('twitter');
                            ?>
                            <a href="<?php echo esc_url($twitter['url']); ?>" target="<?php echo esc_attr($twitter['target']? $twitter['target'] : '_self'); ?>"  ><?php echo esc_html($twitter['title']);?></a>
                            <?php endif;?>


                            <?php if(get_field('skype')):
                                $skype= get_field('skype');
                            ?>
                                <a href="<?php echo esc_url($skype['url']); ?>" target="<?php echo esc_attr($skype['target']? $skype['target'] : '_self'); ?>"  ><?php echo esc_html($skype['title']);?></a>
                            <?php endif;?>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="col-sm-8">
		<div>
		 <p style="color:#abb2ba;font-style:italic;">"Hey guys!</p>
<p style="color:#abb2ba;font-style:italic;">My name is Olga and I am a Marketing expert with over 6 years of practical experience in Digital Marketing. I started my path with the Copywriter position and acquired experience in Content marketing, SEO, SMM, Branding and PR. For the last 3 years, I've been holding a CMO position managing teams of 20+ people.</p> 
	<p style="color:#abb2ba;font-style:italic;">I love both reading and writing.I love both learning and sharing knowledge. </p>
<p style="color:#abb2ba;font-style:italic;">I love both accepting and creating new challenges.</p>
<p style="color:#abb2ba;font-style:italic;">But most of all I love building and developing from scratch. That's why I've decided to found M-Rocks."</p>
	<p style="color:#fff;text-size:16px;text-align:center;"><b></b>About “M-Rocks”</b></p> 
<p style="color:#abb2ba;">“M-Rocks” means Marketing Rocks (where the word “Rocks” is used both as a noun and a verb). </p>
<p style="color:#abb2ba;">When we talk about Marketing Rocks as a noun, we show you that we are here to help you overcome all the obstacles and rocks that stand on your way to achieving your ambitious goals. </p>
<p style="color:#abb2ba;">When we say that Marketing Rocks, we think of it as of something that inspires us. We truly believe that Marketing is the starting point for every business and that the thoroughly developed Marketing Strategy can help every brand skyrocket. 
<p style="color:#abb2ba;">At “M-Rocks”, we rely on three core values to drive success:</p>
<ul class="list-about-us" style="color:#abb2ba;" >
	<li><i class="ti-arrow-right" style="font-size:medium;color:#007bff"></i>&nbspIntegrity</li>
<li><i class="ti-arrow-right" style="font-size:medium;color:#007bff"></i>&nbspDedication</li>
<li><i class="ti-arrow-right" style="font-size:medium;color:#007bff"></i>&nbspResult-oriented performance</li>	
</ul>	
<p style="color:#abb2ba;">These three pillars form the foundation for everything we do in regard to our clients. When you partner with “M-Rocks”, you’re choosing a marketing agency that is dedicated to protecting and growing your brand.</p>
	 </div>
    <?php endwhile; ?>
    <?php else: ?>
    <p>Записей рубрики recent work нет...</p>
			
    <?php endif;?>
    <?php wp_reset_postdata(); ?>
				
            </div>
        </div>
	 

    </section>

<h2 style="text-align:center;color:#ff1481;padding:50px;0px;0px;">Our achievements</h2>


<section class="happy_client" style="background-color:#162b45">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_happy_client">
                    <img src="https://m-rocks.com/wp-content/themes/mrocks/img/icon/hand.png" alt="cap">
                    <span class="counter">12</span>
                    <h4>Satisfied <br> clients</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_happy_client">
                    <img src="https://m-rocks.com/wp-content/themes/mrocks/img/icon/lamp.png" alt="cap">
                    <span class="counter">15</span>
                    <h4>Total<br>projects</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_happy_client">
                    <img src="https://m-rocks.com/wp-content/themes/mrocks/img/icon/time.png" alt="cap">
                    <span class="counter">2400</span>
                    <h4>Hours<br>spent</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_happy_client">
                    <img src="https://m-rocks.com/wp-content/themes/mrocks/img/icon/cup.png" alt="cap">
                    <span class="counter">100</span>
                    <h4>% Works<br>completed</h4>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer()?>