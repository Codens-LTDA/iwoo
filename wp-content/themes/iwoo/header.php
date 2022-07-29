<!DOCTYPE html>
<?php 

function fmg_theme_assets(){
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'fmg_theme_assets');
?>
    <html lang="pt-br">
        <head>
            <title><?php wp_title( '|', true, 'right' ); ?></title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/bootstrap5/css/bootstrap.min.css"/>            
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/splide/css/splide.min.css">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/splide/css/splide-core.min.css">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/fontawesome/fontawesome-free-6.0.0-beta2-web/css/all.css"/>
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/magnificpopup/css/magnificpopup.css">
            <link rel="stylesheet" href="<?php echo get_bloginfo('template_url') ?>/assets/carrousel.css">
            
            <script>
                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidetopo = new Splide( '#slidetopo', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        gap: '1rem',
                    } );

                    slidetopo.mount();
                } );

                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidefoods = new Splide( '#slidefoods', {
                        rewind: true,
                        perPage: 4,
                        perMove: 4,
                        gap: '0rem',
                    } );

                    slidefoods.mount();
                } );  

                document.addEventListener( 'DOMContentLoaded', function () {
                    var slideabout = new Splide( '#slideabout', {
                        rewind: true,
                        perPage: 3,
                        perMove: 1,
                        //autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slideabout.mount();
                } );                  

                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidecardapio1 = new Splide( '#slidecardapio1', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slidecardapio1.mount();
                } ); 
                
                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidecardapio2 = new Splide( '#slidecardapio2', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slidecardapio2.mount();
                } );       

                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidecardapio3 = new Splide( '#slidecardapio3', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slidecardapio3.mount();
                } );       
                
                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidetopomobile = new Splide( '#slidetopomobile', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slidetopomobile.mount();
                } );
                
                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidefoodsmobile = new Splide( '#slidefoodsmobile', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slidefoodsmobile.mount();
                } );

                document.addEventListener( 'DOMContentLoaded', function () {
                    var slidefoodmobileyellow = new Splide( '#slidefoodmobileyellow', {
                        rewind: true,
                        perPage: 1,
                        perMove: 1,
                        autoplay: 'pause',
                        gap: '0rem',
                    } );

                    slidefoodmobileyellow.mount();
                } );

           
                document.addEventListener( 'DOMContentLoaded', function () {
                    $('#cascade-slider').cascadeSlider({});

                autoplay();
                function autoplay() {
                    $('.cascade-slider_arrow-right').click();
                    setTimeout(autoplay, 4500);
                }	
             

            });
            
            </script>
            <?php wp_head(); ?>
        </head>
        <body <?php body_class() ?> id="body" data-url="<?php echo get_site_url(); ?>">
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <button type="button" class="btclose-modal" data-dismiss="modal">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/close.png"/>
            </button>
            <div class="">
                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/backmodal.png" class="backmodal"/>
                <div class="containersub">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/iwoologomodal.png" class="iwoologo-modal"/>
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartmodal.png" class="heart-modal"/>
                    <div class="buttons">
                        <a href="<?php echo get_field('link_ifood') ?>" target="_blank" class="a-b-c abcmodal">
                            <div class="button-custon-2">
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ifood2.png"  class="butonsmodal"/>
                            </div>
                        </a>
                        <a href="<?php echo get_field('link_rappi') ?>"  target="_blank" class="a-b-c  abcmodal">
                            <div class="button-custon-2">
                                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/rappi2.png" class="butonsmodal"/>
                            </div>
                        </a>                        
                    </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <header>
		<div class="row row-colors">
				<div class="col color1">
				</div>
				<div class="col color2">
				</div>
				<div class="col color3">
				</div>
				<div class="col color4">
				</div>												
			</div>	            
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/backheadmobile.png" class="backheadmobile" alt="O segredo é colocar amor" title="O segredo é colocar amor">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/backgroundhead.png" class="topheader" alt="O segredo é colocar amor" title="O segredo é colocar amor">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php the_permalink(5) ?>">
                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo.png" class="logo" alt="Iwoo" title="Iwoo">                        
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <?php
                                    if($_SERVER['REQUEST_URI'] == '/iwoo/'){
                                ?>
                                    <a class="nav-link active" aria-current="page" href="<?php the_permalink(5) ?>">Home</a>
                                    <div class="active-menu">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/efectmenu.png" class=" efect"/>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <a class="nav-link" aria-current="page" href="<?php the_permalink(5) ?>">Home</a>      
                                    <div class="active-menu ac-empty">
                                    </div>                             
                                <?php
                                    }
                                ?>
                            </li>
                            <li class="nav-item">
                                <?php
                                    if($_SERVER['REQUEST_URI'] == '/iwoo/about/'){
                                ?>
                                    <a class="nav-link active" href="<?php the_permalink(32) ?>">Sobre</a>
                                    <div class="active-menu">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/efectmenu.png" class=" efect"/>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <a class="nav-link" href="<?php the_permalink(32) ?>">Sobre</a>
                                    <div class="active-menu ac-empty">
                                    </div>                            
                                <?php
                                    }
                                ?>
                            </li>
                            <li class="nav-item">
                                <?php
                                    if($_SERVER['REQUEST_URI'] == '/iwoo/cardapio/'){
                                ?>
                                    <a class="nav-link active" href="<?php the_permalink(46) ?>">Cardápio</a>
                                    <div class="active-menu">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/efectmenu.png" class=" efect"/>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <a class="nav-link" href="<?php the_permalink(46) ?>">Cardápio</a>
                                    <div class="active-menu ac-empty">
                                    </div>                            
                                <?php
                                    }
                                ?>                                
                            </li>
                            <li class="nav-item">
                                <?php
                                    if($_SERVER['REQUEST_URI'] == '/iwoo/blog/'){
                                ?>
                                    <a class="nav-link active" href="<?php the_permalink(70) ?>">Blog</a>
                                    <div class="active-menu">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/efectmenu.png" class=" efect"/>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                     <a class="nav-link" href="<?php the_permalink(70) ?>">Blog</a>
                                    <div class="active-menu ac-empty">
                                    </div>                            
                                <?php
                                    }
                                ?>                                 
                            </li>     
                            <li class="nav-item">
                                <?php
                                    if($_SERVER['REQUEST_URI'] == '/iwoo/franquia/'){
                                ?>
                                    <a class="nav-link active" href="<?php the_permalink(96) ?>">SEJA UM FRANQUEADO</a>
                                    <div class="active-menu">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/efectmenu.png" class=" efect"/>
                                    </div>
                                <?php
                                    }else{
                                ?>
                                    <a class="nav-link" href="<?php the_permalink(96) ?>">SEJA UM FRANQUEADO</a>
                                    <div class="active-menu ac-empty">
                                    </div>                            
                                <?php
                                    }
                                ?>                                    
                                
                            </li>                                        
                        </ul>
                        <div class="end-nav">
                            <div class="links">
                                <span class="mobile-obj">
                                    <a href="https://www.facebook.com/iwoofoods"  target="_blank">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.png" class="" alt="" title="">				
                                    </a>
                                    <a href="https://www.instagram.com/iwoofoods/" target="_blank">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/insta.png" class="" alt="" title="">				
                                    </a>
                                    <a href="<?php echo get_field('link_rappi') ?>" target="_blank">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/rappi.png" class="" alt="" title="">				
                                    </a>
                                    <a href="<?php echo get_field('link_ifood') ?>" target="_blank">
                                        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ifood.png" class="" alt="" title="">				
                                    </a>																		
                                </span>
                            </div>
                            <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                                <div class="button-custon-2">
                                    Peça Agora
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ancora.png"  class="ancora" onclick="scrollAnimate('#body', 0, 200)"/>            
            </header>