<section>
    <div class="desktop-obj slide-topo">
        <?php
            $slidefood = get_field('slidefood', 5);
        ?>
        <div class="">
            <div id="slidefoods" class="splide">
                <div class="splide__track">
                    <ul class="splide__list splide__listtemplate">
                        <?php foreach ($slidefood as $key => $photo) { 
                        ?>
                            <li class="splide__slide slide_img_food">
                         <?php 
                            echo '
                                    <a class="image-link" href="'.$photo['imagemfull']['url'].'" title="<section><p>'.$photo['name'].'</p><a href=>Pedir Agora</a></section>"><img src="'.$photo['image']['url'].'" class="imgslidetopo" alt=""/></a>                            
                                    <div class="hover-slipe">
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="col box-title-hover">
                                                <div class="row">
                                                    <div class="col col-md-1 plus-hover">
                                                        <i class="fas fa-plus "></i>
                                                    </div>                                                                    
                                                </div>
                                            </div>                                                            
                                        </div>
                                    </div>
                                </li>
                            ';
                        } ?>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
    <div class="mobile-obj slide-topo">
        <?php
            $slidefoodmobile = get_field('slidefoodmobile', 5);
        ?>
        <div class="">
            <div id="slidefoodsmobile" class="splide">
                <div class="splide__track">
                    <ul class="splide__list splide__listtemplate">
                        <?php foreach ($slidefoodmobile as $key => $photo) { 
                        ?>
                            <li class="splide__slide slide_img_food">
                         <?php 
                            echo '
                                    <a class="image-link" href="'.$photo['imagemfull']['url'].'" title="<section><p>'.$photo['name'].'</p><a href=>Pedir Agora</a></section>"><img src="'.$photo['image']['url'].'" class="imgslidetopo" alt=""/></a>                            
                                    <div class="hover-slipe">
                                        <div class="row">
                                            <div class="col">
                                            </div>
                                            <div class="col box-title-hover">
                                                <div class="row">
                                                    <div class="col col-md-1 plus-hover">
                                                        <i class="fas fa-plus "></i>
                                                    </div>                                                                    
                                                </div>
                                            </div>                                                            
                                        </div>
                                    </div>
                                </li>
                            ';
                        } ?>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
</section>