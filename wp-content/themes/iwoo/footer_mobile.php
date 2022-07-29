	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-3 col-lg-3 col-border-sides">
					<ul class="ul-footer">
						<li>
							<a href="<?php the_permalink(5) ?>" class="text-footer">
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
								</span>	
								HOME
							</a>
						</li>
						<li>
							<a href="<?php the_permalink(32) ?>" class="text-footer">
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
								</span>
								SOBRE
							</a>
						</li>
						<li>
							<a href="<?php the_permalink(46) ?>" class="text-footer">
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
								</span>
								CARDÁPIO
							</a>
						</li>
						<li>
							<a href="<?php the_permalink(70) ?>" class="text-footer">
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
								</span>							
								BLOG
							</a>
						</li>
						<li>
							<a href="<?php the_permalink(96) ?>" class="text-footer">
								<span>
									<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/heartlittle.png" class="heartlittle" alt="" title="">                                           
								</span>
								SEJA UM FRANQUEADO
							</a>
						</li>																		
					</ul>
				</div>
				<div class="col-12 col-md-6 col-lg-6 col-line-fine">
					<hr class="hr-divisor-home">
					<div class="row">
						<div class="col-12 col-md-4 col-lg-4">
							<p class="text-footer"><span><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/whatsapp.png" class="" alt="" title=""></span>(4 1)   9 9 5 5 0 . 7 0 1 0</p>
						</div>
						<div class="col-12 col-md-6 col-lg-6 col-line-fine-bottom">
							<p class="text-footer"><span><img src="<?php echo get_bloginfo('template_url') ?>/assets/images/email.png" class="" alt="" title=""></span>c o n t a t o @ i w o o . c o m . b r</p>
						</div>						
					</div>
					<div class="row">
						<div class="col  col-line-fine-bottom">
						<p class="text-footer">
							Av. Presidente Kennedy 2511 - K2511 Centro </br>
							Empresarial, Coworking e Eventos Bairro Portão </br>
							Curitiba - PR, CEP 80610-010
						<p>
						</div>
					</div>
					<hr class="hr-divisor-home">					
				</div>				
				<div class="col-12 col-md-3 col-lg-3 col-flex-center">
					<div class="links">
						<a  href="https://www.facebook.com/iwoofoods" target="_blank">
							<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook.png" class="" alt="" title="">				
						</a>
						<a href="https://www.instagram.com/iwoofoods/"  target="_blank">
							<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/insta.png" class="" alt="" title="">				
						</a>
						<a href="<?php echo get_field('link_rappi') ?>"  target="_blank">
							<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/rappi.png" class="" alt="" title="">				
						</a>
						<a href="<?php echo get_field('link_ifood') ?>" target="_blank">
							<img src="<?php echo get_bloginfo('template_url') ?>/assets/images/ifood.png" class="" alt="" title="">				
						</a>																		
					</div>
                    <a href="" class="a-b-c"  data-toggle="modal" data-target="#exampleModal">
                        <div class="button-custon-2">
                            Pedir Agora
                        </div>
                    </a>					
				</div>								
			</div>
			<div class="row row-dev">
				<div class="col">
					<p class="text-footer-end">Desenvolvido Por <span>Trats</span>. Todos os direitos reservados.</p>
				</div>
			</div>		
		</div>
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
	</footer>
	<?php wp_footer() ?>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/js/jquery-3.1.0_full.js"></script>           
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/bootstrap5/js/bootstrap.min.js"></script>		
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/magnificpopup/js/magnificpopup.js"></script>
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/gallery.js"></script>	            
	<!--Chama head do wordpress para css customizado-->
	<script type="text/javascript" src="<?php echo get_bloginfo('template_url') ?>/assets/js/scrollreveal.js"></script>
	<script src="<?php echo get_bloginfo('template_url') ?>/assets/splide/js/splide.min.js"></script>
  <script src="<?php echo get_bloginfo('template_url') ?>/assets/js/cascade-slider.js"></script>

  <script>

function scrollAnimate(elemento, margem, velocidade, url){
 $(location).attr('href', url);

 if($(elemento).length > 0){
  posicao = $(elemento).offset().top - margem;
 }

 $('html, body').stop().animate({ scrollTop: posicao }, velocidade);
}   
  </script>
	<script>
		/* Start scripts effects for services section*/
		ScrollReveal().reveal('.services', { duration: 2000 });
	</script>		
    </body>
</html>