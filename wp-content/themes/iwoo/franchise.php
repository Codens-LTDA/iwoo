<?php /* Template Name: Franquia */?>
<?php get_header(); ?>
<section class="franchise-page">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/topofranch.png" class="desktop-obj topofranch" alt="Background About" title="Background About">      
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/franchisemobiletop.png" class="mobile-obj topofranch" alt="Background About" title="Background About">                            

    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/franch2.png" class="desktop-obj franch2image" alt="Background About" title="Background About">                        
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/franch2mobile.png" class="mobile-obj franch2image" alt="Background About" title="Background About">                        
    <div class="container container-form-franch">
        <div class="row">
            <div class="col-12 col-md-6">

            </div>
            <div class="col-12 col-md-6">
                <?php echo do_shortcode('[contact-form-7 id="99" title="Contact"]'); ?>
            </div>
        </div>
    </div>
</section>
<div class="franchfranch">
    <?php get_template_part( 'template/franchise2');?>
</div>
<div class="desktop-obj">
    <?php get_footer(); ?>
</div>
<div class="mobile-obj">
    <?php get_template_part( 'footer_mobile');?>   
</div>



