<?php /* Template Name: Blog externa */?>
<?php get_header(); ?>
<section class="blog">
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/news.png" class="desktop-obj about-bg" alt="Background About" title="Background About">                        
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/newsmobile.png" class="mobile-obj about-bg" alt="Background About" title="Background About">    
    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartcardleft.png" class="desktop-obj heartcardleft-blog" alt="Background About" title="Background About">                        
    <div class="container">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-12 col-md-9">
                <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                        $args = new WP_Query([
                            'post_type'			=> 'post',
                            'post_status'		=> 'publish',
                            'orderby'			=> 'DESC',
                            'posts_per_page'    => '10',
                            'paged' => $paged,
                            's' => $_GET['search'],
                            'category_name' =>  $_GET['categoria'], 
                        ]);
                        add_filter( 'posts_where', 'title_filter', 10, 2 );
                        $query = new WP_Query($args);
                        remove_filter( 'posts_where', 'title_filter', 10, 2 );                
                        if ( $args->have_posts() ) : while ( $args->have_posts() ) : $args->the_post();
                    ?>   
                    <div class="col-12 col-blog-list">
                        <div class="row g-0">
                            <div class="col-md-3">
                                <img src="<?php echo get_field('banner')['url'] ?>" alt="<?php echo the_field('banner')['alt']; ?>" title="<?php echo get_field('banner')['title']; ?> " class="img-blog">           
                            </div>
                            <div class="col-md-6 col-text">
                                <h1 class="title-associetade-blog"><?php the_title() ?></h1>      
                                <p class="introduction-associetade-blog"><?php echo excerpt(15) ?></p>
                                <div class="divbtn">
                                    <a href="<?php the_permalink() ?>" class="a-b-c">
                                        <div class="button-custon-5">
                                            Leia +
                                        </div>
                                    </a>  
                                </div>
                            </div>
                        </div>            
                    </div>
                    <?php endwhile; endif; wp_reset_postdata(); ?>  
            <?php
                $total_pages = $args->max_num_pages;

                    if ($total_pages > 1){

                        $current_page = max(1, get_query_var('paged'));
            ?>
            <div class="container linkpc">
                <div class="linkpage">
                <?php
                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => '/page/%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text'    => __('«'),
                                'next_text'    => __('»'),
                            ));
                ?>
                </div>
            </div>
            <?php
                    }            
            ?>    
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
                <div class="mobile-obj">
                    <div class="accordion" id="accordionExample">
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
        </div>
    </div>
</section>
<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/Heart_28.png" class="heartcardright-blog" alt="Background About" title="Background About">
<?php get_template_part( 'template/franchise');?>
<div class="desktop-obj">
    <?php get_footer(); ?>
</div>
<div class="mobile-obj">
    <?php get_template_part( 'footer_mobile');?>   
</div>

