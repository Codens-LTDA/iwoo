<?php get_header(); ?>
<?php /* Template Name: Aboutus */?>
<section class="about-top">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/backgroundabout.png" class="desktop-obj about-bg" alt="Background About" title="Background About">   
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/backgroundaboutmobile.png" class="mobile-obj about-bg" alt="Background About" title="Background About">                           
    <div class="container container-about-top">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-7 col-lg-7 col-about-top">
                <h1 class="title-how title-about">comida <br/> que levanta <br> o <span>Ânimo</span></h1>
                <p>
                Diretamente da Holanda,
os n
ossos bolinhos
ganharam um toque especial quando
chegaram por aqui,
eles
agora são os
poffs
! Em seguida trouxemos uma receita
americana que "abrasileiramos" e
tornou
-
se
os nossos waffs </br>
Agora, se você
gosta de salgado
s
tanto quanto de doces
apresentamos
a vocês os
nossos escondidinhos salgados com sabores que vão dar água na boca.
</br>
Tudo
feito à mão e fresquinho!
Isso
é Comfort Food e você só encontra aqui!
                   
                </p>
            </div>
            <div class="col-12 col-sm-6 col-md-5 col-lg-5">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/photosabout.png" class="desktop-obj photosabout" alt="Background About" title="Background About">                        
            </div>
        </div>
    </div>
</section>
<section class="bomgourmet">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/bomgourmet.png" class="bomgourmetimg" alt="Background About" title="Background About">                        
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-spacing-intern">
                <h1 class="title-how tt-gourmet">a iWOo no </br><span>Bom Gourmet</span></h1>
                <p>
                Na última edição do Prêmio Bom Gourmet
–
Gazeta do Povo, em 2021, fomos
agraciados juntamente com outros 30 estabelecimentos, na Categoria “Indicação
Popular
–
Novidade”, com o maior prêmio de gastronomia do estado do Paraná!                    </br></br>
Dedicamos toda nossa alegria e reconhecimento a Deus, assim como, a
cada um de
vocês que contribuiu para que a iWOo alcançasse essa conquista!                </p>                
            </div>
        </div>
    </div>
</section>
<?php get_template_part( 'template/slidefood');?>
<section class="here">
    <div class="container container-here">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="title-how tt-gourmet tt-here">só <span>aqui</span> você <br/> <span>encontra...</span></h1>
                </br>
                <div class="">
                    <?php
                        $slideabout = get_field('slideabout');
                    ?>
    <div class="cascade-slider_container" id="cascade-slider">
      <div class="cascade-slider_slides">
      <?php 
        $slideabout = get_field('slideabout');        
        $i=1;
        foreach ($slideabout as $key => $photo) { 
            echo '
                <div class="cascade-slider_item">';
                ?>
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartcircular.png" alt="">
                    <span class="key"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT);?></span>
                    <p><?php echo $photo['text'];?></p>
                <?php    
                    echo '</br>
                </div>';
                $i++;                
        } 
      ?>                        
      </div>

      <ol class="cascade-slider_nav">
        <?php 
            $slideabout = get_field('slideabout');        
            $i=1;
        ?>        
      </ol>

      <span class="cascade-slider_arrow cascade-slider_arrow-left" data-action="prev">Prev</span>
      <span class="cascade-slider_arrow cascade-slider_arrow-right" data-action="next">Next</span>
    </div>          
                </div>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/woman.png" class="desktop-obj woman" alt="Background About" title="Background About">                                     
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/womanmobile.png" class="mobile-obj woman" alt="Background About" title="Background About">                                     
            </div>
        </div>
    </div>
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamentabout.png" class="ornamentaaboutcarrousel" alt="Background About" title="Background About">                                         
</section>
<?php get_template_part( 'template/franchise2');?>
<div class="desktop-obj">
    <?php get_footer(); ?>
</div>
<div class="mobile-obj">
    <?php get_template_part( 'footer_mobile');?>   
</div>

