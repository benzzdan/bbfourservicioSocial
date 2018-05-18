<?php $this->load->view('templates/carousel') ?>
<div class="voluntarios" style="background-color: #25052c">
	<div class="row justify-content-md-center no-gutters">
		<img src="<?php echo base_url('assets/images/voluntarios-logo-1.png') ?>" alt="">
	</div>
	<div class="row justify-content-md-center no-gutters">
		<div class="col col-md-2">
			<a href="#">
				<img src="<?php echo base_url('assets/images/yo-con-mexico-activaciones.jpg')?>" alt="">
			</a>
		</div>
		<div class="col col-md-2">
			<a href="#">
				<img src="<?php echo base_url('assets/images/yo-con-mexico-activista-digital.jpg')?>" alt="">
			</a>
		</div>
		<div class="col col-md-2">
			<a href="#">
				<img src="<?php echo base_url('assets/images/yo-con-mexico-apoyo-en-eventos.jpg')?>" alt="">
			</a>
		</div>
	</div>
	<div class="h20"></div>
	<div class="row justify-content-md-center no-gutters">
		<div class="col col-md-2">
			<a href="#">
				<img src="<?php echo base_url('assets/images/yo-con-mexico-donativos.jpg')?>" alt="">
			</a>
		</div>
		<div class="col col-md-2">
			<a href="#">
				<img src="<?php echo base_url('assets/images/yo-con-mexico-propuestas.jpg')?>" alt="">
			</a>
		</div>
		<div class="col col-md-2">
			<a href="#">
				<img src="<?php echo base_url('assets/images/yo-con-mexico-suma-a-tus-amigos.jpg')?>" alt="">
			</a>
		</div>
	</div>
	<div class="h20"></div>
	<div class="h20"></div>
	<div class="h20"></div>
</div>
<div class="eventos w-100" style="background-color: #710b88; text-align: center">
		<h2 style="padding-top: 5vh; padding-bottom: 3vh">EVENTOS</h2>
	<div class="container-fluid">
		<div class="row no-gutters justify-content-md-center">
			<div class="col col-md-4" style="padding: 4vh">	
				<div class="parent" onclick="">
					<div class="child bg-one">
					</div>
				</div>
				<div class="event-label">
					<p><small>09 Agosto 2016</small></p>
					<p class="text-left main-txt">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
					</p>
					<p class="text-left small-txt">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
					</p>
					<hr>
					<div id="shareIcons"></div>

				</div>
			</div>
			<div class="col col-md-4" style="padding: 4vh">
				<div class="parent" onclick="">
					<div class="child bg-two">
					</div>
				</div>
				<div class="event-label">
					<p><small>09 Agosto 2016</small></p>
					<p class="text-left main-txt">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
					</p>
					<p class="text-left small-txt">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
					</p>
					<hr>
					<div id="shareIcons2"></div>
				</div>
			</div>
			<div class="col col-md-4" style="padding: 4vh">
				<div class="parent" onclick="">
					<div class="child bg-three">
					</div>
				</div>
				<div class="event-label">
					<p><small>09 Agosto 2016</small></p>
					<p class="text-left main-txt">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
					</p>
					<p class="text-left small-txt">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
					</p>
					<hr>
					<div id="shareIcons3"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-md-center no-gutters p-3">
		<a href="#" class="btn btn-primary dark-purple">Ver más</a>
	</div>
	
	<!-- footer -->

		<div class="row no-gutters" style="background: white; padding-top: 5vh">
			<div class="col col-md-3 align-self-center">
				
				<a href="#">
					<img src="<?php echo base_url('assets/images/logo_small.jpg')?>" alt="">
				</a>
			</div>
			<div class="col col-md-3 align-self-center">
				<ul class="footer-social-media-container footer-col-elements">
				<span>Síguenos en:</span>
					<li><a href="https://www.facebook.com/YoConMex/" target="_blank" rel="noopener"><img style="width: 30px !important; height: 30px !important;" src="http://www.yoconmexico.com/wp-content/uploads/2017/07/facebook-icon.png" class="footer-images-positioning"></a></li>
					<li><a href="https://twitter.com/YoConMex" target="_blank" rel="noopener"><img style="width: 30px !important; height: 30px !important;" src="http://www.yoconmexico.com/wp-content/uploads/2017/07/twitter-icon.png" class="footer-images-positioning"></a></li>
					<li><a href="https://www.instagram.com/yoconmexico/" target="_blank" rel="noopener"><img style="width: 30px !important; height: 30px !important;" src="http://www.yoconmexico.com/wp-content/uploads/2017/07/instagram-icon.png" class="footer-images-positioning"></a></li>
				</ul>
			</div>
			<div class="col col-md-3 align-self-center">
				<?php $this->load->view('templates/menu-footer') ?>
			</div>
		<div class="col col-md-3 align-self-center">
			<a class="btn btn-primary dark-purple nav-btn hvr-underline-from-center" href="#">Contáctanos</a>
		</div>
		<div class="container-fluid text-left">
			<p>&copy Todos los derechos reservados 2018 | <a href="#"><strong>Aviso de privacidad</strong></a> </p>
		</div>
	</div>

</div>




