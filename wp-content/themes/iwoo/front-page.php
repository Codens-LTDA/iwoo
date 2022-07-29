<?php get_header(); ?>
<?php /* Template Name: Home */?>
<section>
    <div class="desktop-obj slide-topo">
        <?php
            $slidetopo = get_field('slide');
        ?>
        <div id="slidetopo" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($slidetopo as $key => $photo) { 
                        echo '
                            <li class="splide__slide">
                                <img src="'.$photo['image']['url'].'" class="imgslidetopo" alt=""/>                            
                            </li>
                        ';
                    } ?>
                </ul>
            </div>
        </div>            
    </div>
    <div class="mobile-obj slide-topo">
        <?php
            $slidetopomobile = get_field('slidemobile');
        ?>
        <div id="slidetopomobile" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($slidetopomobile as $key => $photo) { 
                        echo '
                            <li class="splide__slide">
                                <img src="'.$photo['image']['url'].'" class="imgslidetopo" alt=""/>                            
                            </li>
                        ';
                    } ?>
                </ul>
            </div>
        </div>            
    </div>    
    <div class="links-top-home">
        <ul class="links-top">
            <li>
                <a  href="https://www.facebook.com/iwoofoods" target="_blank">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.png" class="" alt="" title="">				
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/iwoofoods/"  target="_blank">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/insta.png" class="" alt="" title="">				
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('link_rappi') ?>"  target="_blank">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/rappi.png" class="" alt="" title="">				
                </a>
            </li>
            <li>
                <a href="<?php echo get_field('link_ifood') ?>" target="_blank">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ifood.png" class="" alt="" title="">				
                </a>																		
            </li>
        </ul>
    </div>    
</section>
<section class="section-foods-yellow">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/background-yellow.png" class="yellow-bg desktop-obj" alt="Background Yellow" title="Background Yellow">                        
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/background-yellowmobile.png" class="yellow-bg-mobile mobile-obj" alt="Background Yellow" title="Background Yellow">                        
    <div class="mobile-obj slide-food-yellow">
        <div class="flex-ornament">
                <div class="div-ornament-heart">
                </div>
                <div class="div-ornament">
                </div>
        </div>        
        <div id="slidefoodmobileyellow" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="container-foods-yellow-1">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food1.png" class="foods-yellow" alt="Food1" title="Food1">                    
                            <div class="hover-1">
                                <p class="text-photo">
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                                    </span>
                                    ESCONDIDINHO 
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                                    </span>
                                    <br/>
                                    DE ALGO                            
                                </p>
                                <a class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                                    <div class="button-custon-2">
                                        Pedir Agora
                                    </div>
                                </a>
                            </div>
                        </div>                            
                    </li>
                    <li class="splide__slide">
                        <div class="container-foods-yellow-1">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food2.png" class="foods-yellow" alt="Food2" title="Food2">
                            <div class="hover-1">
                                <p class="text-photo">
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                                    </span>
                                    ESCONDIDINHO 
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                                    </span>
                                    <br/>
                                    DE ALGO                            
                                 </p>
                                <a class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                                    <div class="button-custon-2">
                                        Pedir Agora
                                    </div>
                                </a>
                            </div>
                        </div>                          
                    </li>
                    <li class="splide__slide">
                        <div class="container-foods-yellow-1">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food3.png" class="foods-yellow" alt="Food3" title="Food4">
                            <div class="hover-1">
                                <p class="text-photo">
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                                    </span>
                                    ESCONDIDINHO 
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                                    </span>
                                    <br/>
                                    DE ALGO                            
                                </p>
                                <a  class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                                    <div class="button-custon-2">
                                        Pedir Agora
                                    </div>
                                </a>
                            </div>
                        </div>                           
                    </li>
                    <li class="splide__slide">
                        <div class="container-foods-yellow-1">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food4.png" class="foods-yellow" alt="Food4" title="Food4">
                            <div class="hover-1">
                                <p class="text-photo">
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                                    </span>
                                    ESCONDIDINHO 
                                    <span>
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                                    </span>
                                    <br/>
                                    DE ALGO                            
                                </p>
                                <a class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                                    <div class="button-custon-2">
                                        Pedir Agora
                                    </div>
                                </a>
                            </div>             
                        </div>                          
                    </li>                                        
                </ul>
            </div>
        </div>            
    </div>
    <div class="container container-foods-yellow desktop-obj">
        <div class="flex-ornament">
                <div class="div-ornament-heart">
                </div>
                <div class="div-ornament">
                </div>
        </div>
        <div class="row row-foods-yellow">
            <div class="col-12 col-md-3 col-lg-3">
                <div class="container-foods-yellow-1">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food1.png" class="foods-yellow" alt="Food1" title="Food1">                    
                    <div class="hover-1">
                        <p class="text-photo">
                            <span>
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                            </span>
                            POFF 
                            <span>
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                            </span>
                            <br/>
                        <p>
                        <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                            <div class="button-custon-2">
                                Pedir Agora
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <div class="container-foods-yellow-1">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food2.png" class="foods-yellow" alt="Food2" title="Food2">
                    <div class="hover-1">
                        <p class="text-photo">
                            <span>
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                            </span>
                            Waffs 
                            <span>
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                            </span>
                            <br/>
                        <p>
                        <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                            <div class="button-custon-2">
                                Pedir Agora
                            </div>
                        </a>
                    </div>
                </div>           
            </div>
            <div class="col-12 col-md-3 col-lg-3">
                <div class="container-foods-yellow-1">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food3.png" class="foods-yellow" alt="Food3" title="Food4">
                    <div class="hover-1">
                        <p class="text-photo">
                            <span>
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                            </span>
                            ESCONDIDINHO 
                            <span>
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                            </span>
                            <br/>
                            DOCE                            
                        <p>
                        <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                            <div class="button-custon-2">
                                Pedir Agora
                            </div>
                        </a>
                    </div>
                </div>         
            </div>
            <div class="col-12 col-md-3 col-lg-3">
            <div class="container-foods-yellow-1">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/food4.png" class="foods-yellow" alt="Food4" title="Food4">
                <div class="hover-1">
                    <p class="text-photo">
                        <span>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">            
                        </span>
                        ESCONDIDINHO 
                        <span>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
                        </span>
                        <br/>
                        DE SALGADO                            
                    <p>
                    <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                        <div class="button-custon-2">
                            Pedir Agora
                        </div>
                    </a>
                </div>             
            </div>                                    
        </div>
        <div class="div-ornament-heart-bottom">
        </div>        
    </div>
</section>
<section class="section-text-purple">
    <div class="container">
        <p>
            A iWOo é Comfort Food.
            Isso quer dizer que,
            preparamos
            alimentos com um valor </br>
            sentimental e, sobretudo,
            que afloram
            sensações prazerosas.
            <br></br>
            Nós queremos despertar emoções por meio do paladar e nesse sentido, utilizamos um
            ingrediente especial: o amor. </br> Ou seja, sabe aquele tipo de comida que leva acalento e
            con
            forto ao coração? </br> A gente faz, e fazemos muito bem        
        </p>
    </div>
</section>
<?php get_template_part( 'template/slidefood');?>
<section class="about-home">
    <div class="container">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamenthow.png" class="ornamenthow desktop-obj" alt="" title=""> 
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamenthow2.png" class="ornamenthow2 desktop-obj" alt="" title="">                                           
        <div class="row row-how">
            <div class="col-12 col-md-6 col-lg-6 col-text-how">
                <h1 class="title-how">A <span class="red">iwOo</span>    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartpoints.png" class="hearornamenthow" alt="" title="">        </br> começou de </br> um <span class="otherfont">Sonho...</span></h1>
                <p class="text-how-p">
                    Criar
                    um empreendimento que permitisse amar as pessoas de diferentes formas, a
                    começar nu
                    trindo o corpo e alma. Foi assim que encontramos o conceito "Comfort
                    Food" e trouxemos receitas tipicamente internacionais, mas com um toque
                    "abrasileirado" dando origem
                    aos poffs, waffs e escondidinhos.
                   </br></br>
                    Em outras palavras, nós levamos amor através das no
                        ssas delícias, bem como,
                        recebemos todo esse afeto por parte dos nossos clientes, que nos inspiram a sermos
                        cada vez mais criativos e exclusivos, afinal, tudo aqui é feito à mão
                </p>
                <div class="button-custon-3">
                    <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                        <div class="button-custon">
                            Venha conhecer!
                        </div>
                    </a>
                </div>                
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-center">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/sonho.png" class="dream desktop-obj" alt="Sonho" title="Sonho">
            </div>                
        </div>
    </div>
</section>
<?php get_template_part( 'template/franchise');?>   
<div class="desktop-obj">
    <?php get_footer(); ?>
</div>
<div class="mobile-obj">
    <?php get_template_part( 'footer_mobile');?>   
</div>

