			<section id="footer-bar">
				<div class="row">
					<div class="span7">
						<h4>Mapa del Sitio</h4>
						<ul class="nav">
							<li><a href="index.html">Home</a></li>  
							<li><a href="about.html">Nosotros</a></li>
							<li><a href="contact.html">Contactanos</a></li>
							<li><a href="cart.html">Tu Carrito</a></li>
							<li><a href="register.html">Logout</a></li>							
						</ul>					
					</div>

					<div class="span5">
						<p class="logo"><img src="images/logo.png" class="site_logo" alt=""></p>
						<p>SOMOS LA CHICA MALA DE LAS DEMÁS MARCAS, SOMOS ÚNICAS, ESPECIALES, EGOÍSTAS CON NUESTRO ESTILO, ATRÉVETE A SER UNA CHICA MALA!.</p>
						<br/>
						<span class="social_icons">
							<a class="facebook" href="#">Facebook</a>
							<a class="twitter" href="#">Twitter</a>
							<a class="skype" href="#">Skype</a>
							<a class="vimeo" href="#">Vimeo</a>
						</span>
					</div>					
				</div>	
			</section>
			<section id="copyright">
				<span>CHICA MALA SAC 2014,  All right reserved.</span>
			</section>


		</div><!--end wrapper-->


		<script src="statics/js/common.js"></script>
		<script src="statics/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});

				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});

		</script>	
    </body>
</html>