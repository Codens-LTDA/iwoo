<?php get_header(); ?>
<?php /* Template Name: Cardápio */?>
<section class="cards">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/topocardapio.png" class="desktop-obj about-bg" alt="Background About" title="Background About">                        
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/topcardapiomobile.png" class="mobile-obj about-bg" alt="Background About" title="Background About">                        
    <div class="container">
        <div class="cardapio1">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/hearts.png" class=" desktop-obj hearts" alt="Background About" title="Background About">                        
            <div class="row row-cards">
                <div class="col-12 col-md-6 col-lg-6">
                    <?php
                        $cardapio1 = get_field('cardapio1');
                    ?>
                    <h1 class="title-namespoffs mobile-obj">Poff</h1>                    
                    <div id="slidecardapio1" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($cardapio1 as $key => $photo) { 
                                    echo '
                                        <li class="splide__slide">
                                            <img src="'.$photo['image']['url'].'" class="" alt=""/>                                             
                                        </li>
                                    ';
                                } ?>                            
                            </ul>
                        </div>
                    </div> 
                    <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                        <div class="button-custon-4">
                            Pedir Agora
                        </div>
                    </a>             
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="namepoffs">
                        <h1 class="title-namespoffs desktop-obj">Poff</h1>
                        <p class="text-p">Os Poffertjes são minipanquecas holandesas. Nós os chamamos carinhosamente de Poffs!</p>
                        <?php foreach ($cardapio1 as $key => $photo) { 
                            echo '
                                <p class="poffname"><span>';
                        ?>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="Background About" title="Background About">                        
                        <?php
                                echo '</span>'.
                                    $photo['name']. 
                                '</p>
                            ';
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamentcards.png" class="desktop-obj ornamentleftcard" alt="Background About" title="Background About">                        
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamentabout.png" class="mobile-obj ornamentleftcard" alt="Background About" title="Background About">                        
        <div class="cardapio2">
            <div class="row row-cards flex-column-reverse flex-lg-row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="namepoffs2">
                        <h1 class="title-namespoffs desktop-obj">Escondidinho</h1>
                        <p class="text-p">
                            Os nossos escondidinhos de chocolate são verdadeiros tesouros! Assados, ficam com uma camada sequinha por cima e com uma cremosidade 
                            irresistível por dentro.                            
                        </p>                        
                        <?php 
                            $cardapio2 = get_field('cardapio2');
                            foreach ($cardapio2 as $key => $photo) { 
                                echo '
                                <p class="poffname"><span>';
                        ?>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="Background About" title="Background About">                        
                        <?php
                                echo '</span>'.
                                    $photo['name']. 
                                '</p>
                            ';
                        } ?>                       
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/hearts.png" class="hearts hearts-right desktop-obj" alt="Background About" title="Background About">                        
                    <?php
                        $cardapio2 = get_field('cardapio2');
                    ?>
                    <h1 class="title-namespoffs mobile-obj">Escondidinho</h1>
                    <div id="slidecardapio2" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($cardapio2 as $key => $photo) { 
                                    echo '
                                        <li class="splide__slide">
                                            <img src="'.$photo['image']['url'].'" class="" alt=""/>                                             
                                        </li>
                                    ';
                                } ?>
                                <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                                    <div class="button-custon-2">
                                        Pedir Agora
                                    </div>
                                </a>                                
                            </ul>
                        </div>
                    </div>  
                    <a href="" class="a-b-c" data-toggle="modal" data-target="#exampleModal">
                        <div class="button-custon-4">
                            Pedir Agora
                        </div>
                    </a>                             
                </div>
            </div>
        </div>
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamentrightcard.png" class="desktop-obj ornamentleftcard2" alt="Background About" title="Background About">                        
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/mancha222.png" class="mobile-obj ornamentleftcard2" alt="Background About" title="Background About">                        
        <div class="cardapio3">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/hearts.png" class="desktop-obj hearts" alt="Background About" title="Background About">                        
            <div class="row row-cards">
                <div class="col-12 col-md-6 col-lg-6">
                    <?php
                        $cardapio3 = get_field('cardapio3');
                    ?>
                    <h1 class="title-namespoffs mobile-obj">Waff</h1>
                    <div id="slidecardapio3" class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <?php foreach ($cardapio3 as $key => $photo) { 
                                    echo '
                                        <li class="splide__slide">
                                            <img src="'.$photo['image']['url'].'" class="" alt=""/>                                             
                                        </li>
                                    ';
                                } ?>                               
                            </ul>
                        </div>
                    </div>   
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="namepoffs3">
                        <h1 class="title-namespoffs desktop-obj">Waff</h1>
                        <p class="text-p">
                            Uns chamam de “uêifol”,outros chamam de “uófol”. Nós os chamamos de waffs!
                            </br>
                            <b>Obs.: Os waffs não são entregues por meio de delivery. Para experimentar visite nossa loja. ;)</b>                           
                        </p>                           
                        <?php foreach ($cardapio3 as $key => $photo) { 
                                echo '
                                <p class="poffname"><span>';
                        ?>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="Background About" title="Background About">                        
                        <?php
                                echo '</span>'.
                                    $photo['name']. 
                                '</p>
                            ';
                        } ?>
                    </div>
                </div>                
            </div>
        </div> 
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartcardleft.png" class="desktop-obj ornamentheartleft" alt="Background About" title="Background About">                                       
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/mancha3.png" class="mobile-obj ornamentheartleft" alt="Background About" title="Background About">                                       

    </div>
</section>
<?php get_template_part( 'template/franchise2');?>
<div class="desktop-obj">
    <?php get_footer(); ?>
</div>
<div class="mobile-obj">
    <?php get_template_part( 'footer_mobile');?>   
</div>

