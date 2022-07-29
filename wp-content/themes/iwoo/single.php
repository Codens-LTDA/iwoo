<?php get_header(); ?>
<img src="<?php echo get_field('bannertop')['url']?>" class="desktop-obj single-blog" alt="Banner"/>
<img src="<?php echo get_field('bannertopmobile')['url']?>" class="mobile-obj single-blog" alt="Banner"/>
<h1 class="title-blog">
    <?php the_title() ?>
    <p class="categorytitle">                                
            <?php
                $id = get_the_ID();
                $cats = get_the_category($id);
                echo $cats[0]->name;
            ?>
    </p>   
</h1>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamentabout.png" class="desktop-obj ornamentaaboutcarrouselsingle" alt="Background About" title="Background About">                                         

<div class="container">
    <div class="row">
        <div class="col-12 col-md-9">
        <div class="box-banner">
            <img src="<?php echo get_field('banner')['url']?>" class="desktop-obj banner-content" alt="Banner"/>
            <img src="<?php echo get_field('bannermobile')['url']?>" class="mobile-obj banner-content" alt="Banner"/>            
        </div>
        <div class="container div-text">
            <?php the_content() ?>
            <div class="container share">
                <div class="row">
                    <div class="col">
                        <p class="text-share">COMPARTILHE COM O UNIVERSO!</p>
                    </div>
                    <div class="col col-right">
                        <span>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook-social.png" class="networkbog" alt="networkbog" title="networkbog ">                                         
                        </span>
                        <span>
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/instagram-social.png" class="networkbog" alt="networkbog" title="networkbog ">                                         
                        </span>                        
                    </div>                    
                </div>
            </div>
        </div>        
        </div>

            <div class="col-12 col-md-3 col-cate">
                <div class="desktop-obj">               
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/categories.png" class="categoriesimg" alt="Background About" title="Background About">                        
                    <br/>
                    <ul class="ul-categories">
                        <?php
                            $all_categories=get_categories();
                            foreach($all_categories as $categories_item)
                            {
                        ?>
                            <li class="li-categories">
                                <a href="?categoria=<?php echo $categories_item->slug;?>"><span><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="" title=""></span><?php echo $categories_item->name;?></a>                  
                            </li>
                        <?php
                            }
                        ?>
                    </ul>
                    </br></br>
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/recents.png" class="categoriesimg" alt="Background About" title="Background About">                        
                    <ul class="ul-categories">
                    <?php
                        $args = new WP_Query([
                            'post_type'			=> 'post',
                            'post_status'		=> 'publish',
                            'order'				=> 'ASC',
                            'posts_per_page'    => '6', 
                        ]);
                        add_filter( 'posts_where', 'title_filter', 10, 2 );
                        $query = new WP_Query($args);
                        remove_filter( 'posts_where', 'title_filter', 10, 2 );                
                        if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
                    ?>   
                        <li class="li-categories">
                            <a href="<?php the_permalink() ?>"><span><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="" title=""></span><?php the_title() ?></a>                  
                        </li>
                    <?php endwhile; endif; wp_reset_postdata(); ?>  
                    </ul>       
                </div>      
            </div>
        </div>
        <div class="mobile-obj">
                    <div class="accordion accordion2" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link  bt-collapsed collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                   Categorias
                                </button>
                            </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/categories.png" class="categoriesimg" alt="Background About" title="Background About">                        
                                    <br/>
                                    <ul class="ul-categories">
                                        <?php
                                            $all_categories=get_categories();
                                            foreach($all_categories as $categories_item)
                                            {
                                        ?>
                                            <li class="li-categories">
                                                <a href="?categoria=<?php echo $categories_item->slug;?>"><span><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="" title=""></span><?php echo $categories_item->name;?></a>                  
                                            </li>
                                        <?php
                                            }
                                        ?>
                                    </ul>     
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                            <h5 class="mb-0 title-collapse">
                                <button class="btn btn-link bt-collapsed collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Recentes
                                </button>
                            </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/recents.png" class="categoriesimg" alt="Background About" title="Background About">                        
                                        <ul class="ul-categories">
                                        <?php
                                            $args = new WP_Query([
                                                'post_type'			=> 'post',
                                                'post_status'		=> 'publish',
                                                'order'				=> 'ASC',
                                                'posts_per_page'    => '6', 
                                            ]);
                                            add_filter( 'posts_where', 'title_filter', 10, 2 );
                                            $query = new WP_Query($args);
                                            remove_filter( 'posts_where', 'title_filter', 10, 2 );                
                                            if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
                                        ?>   
                                            <li class="li-categories">
                                                <a href="<?php the_permalink() ?>"><span><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="" alt="" title=""></span><?php the_title() ?></a>                  
                                            </li>
                                        <?php endwhile; endif; wp_reset_postdata(); ?>  
                                        </ul>  
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>        
</div>     
<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/macha2.png" class="desktop-obj ornamentleftcard2single" alt="Background About" title="Background About">                        

<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ornamentcards.png" class="desktop-obj ornamentleftcardsingle" alt="Background About" title="Background About">                        
<section class="listblogmore desktop-obj">
            <div class="container">
                <h1 class="title-post-news">Leia Também</h1>
                <div class="row">
                    <?php
                        $args = new WP_Query([
                        'post_type'			=> 'post',
                        'post_status'		=> 'publish',
                        'order'				=> 'DESC',
                        'posts_per_page'	=> 4,
                        ]);
                        if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
                    ?>
                        <div class="col-12 col-md-3">
                            <div class="box-around">
                                <div class="image-list-blog">
                                    <img src="<?php echo get_field('banner')['url'] ?>" alt="<?php echo the_field('banner')['alt']; ?>" title="<?php echo get_field('banner')['title']; ?> " class="img-blog-more">           
                                </div>
                                <div class="title-around">
                                    <h1 class="title-associetade-blog2"><?php the_title() ?></h1>      
                                </div>
                                <div class="text-around">
                                    <p class="introduction-associetade-blog"><?php echo excerpt(15) ?></p>   
                                </div>
                            </div>                        
                        </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
        <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/Heart_28.png" class="desktop-obj ornamentrightsingle" alt="Background About" title="Background About">                        
         
<?php get_template_part( 'template/franchise2');?>
<div class="desktop-obj">
    <?php get_footer(); ?>
</div>
<div class="mobile-obj">
    <?php get_template_part( 'footer_mobile');?>   
</div>

