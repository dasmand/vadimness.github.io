<!-- footer part start-->
<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="<?php echo home_url()?>"> <img src="<?php bloginfo('template_url')?>/img/logo1.png" alt=""> </a>
                    <?php dynamic_sidebar('text-footer') ?>
                </div>
            </div>
        
			<div class="col-sm-6 col-md-6 col-xl-4">
                <div class="single-footer-widget footer_2">
                 <?php echo do_shortcode('[contact-form-7 id="371" title="Без названия"]'); ?>
    
				</div>
                    
                </div>
           
            <div class="col-sm-12 col-md-8 col-xl-3">
                <h4 style="color:#fff;">Join us in socials</h4>
                <div class="social_icon">
                        <a href="https://www.facebook.com/mrocksagency/"style="margin-left:-6px;font-size:x-large"> <i class="ti-facebook"></i></a>
                        <a href="https://www.instagram.com/mrocksagency/"style="margin-left:6px;font-size:x-large"> <i class="ti-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/mrocksagency/about/"style="margin-left:12px;font-size:x-large"> <i class="ti-linkedin"></i></a>
                      <div style="padding-top:20px;"><i class="ti-email"style="font-size:medium;color:#007bff"></i> <a style="color: #fff;" href="mailto:mrocks.team@gmail.com" target="_blank" rel="noopener">mrocks.team@gmail.com</a></div> 
                    </div>
                <!-- <div class="single-footer-widget footer_3">
                    <h4>“Let’s climb M-Rocks together!”</h4>
                    <div class="footer_img">
                        <div class="single_footer_img">
                            <img src="<?php bloginfo('template_url')?>/img/footer_img/footer_img_1.png" alt="">
                            <a href="https://www.instagram.com/mrocksagency/"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="<?php bloginfo('template_url')?>/img/footer_img/footer_img_2.png" alt="">
                            <a href="https://www.instagram.com/mrocksagency/"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="<?php bloginfo('template_url')?>/img/footer_img/footer_img_3.png" alt="">
                            <a href="https://www.instagram.com/mrocksagency/"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="<?php bloginfo('template_url')?>/img/footer_img/footer_img_4.png" alt="">
                            <a href="https://www.instagram.com/mrocksagency/"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="<?php bloginfo('template_url')?>/img/footer_img/footer_img_5.png" alt="">
                            <a href="https://www.instagram.com/mrocksagency/"><i class="ti-instagram"></i></a>
                        </div>
                        <div class="single_footer_img">
                            <img src="<?php bloginfo('template_url')?>/img/footer_img/footer_img_6.png" alt="">
                            <a href="https://www.instagram.com/mrocksagency/"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>  >--> 
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<!-- jquery -->

<?php wp_footer()?>
</body>

</html>