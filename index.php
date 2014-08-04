<?php 
include "php/config.php";
include "php/header.php";
?>
		<div id="wrapper" class="container">
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/carousel/banner-1.jpg" alt="" />
						</li>
						<li>
							<img src="images/carousel/banner-2.jpg" alt="" />
							<div class="intro">
								<h1>Mid season sale</h1>
								<p><span>Up to 50% Off</span></p>
								<p><span>On selected items online and in stores</span></p>
							</div>
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				We stand for top quality templates. Our genuine developers always optimized bootstrap commercial templates. 
				<br/>Don't miss to use our cheap abd best bootstrap templates.
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Nuestros <strong>Productos mas buscados </strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel" class="myCarousel carousel slide">

									<div class="carousel-inner">

										<div class="active item">

											<ul class="thumbnails">	

											<?php

											$conexion  = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
											mysqli_set_charset($conexion, "utf8");
											$peticion  = "SELECT * FROM products WHERE existencias > 0";
											$resultado = mysqli_query($conexion, $peticion);
											
											$row_cnt   = mysqli_num_rows($resultado);
											$counter   = 1;

									    
											while($fila = mysqli_fetch_array($resultado)) {

											?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
											<?php

												$peticion2  = "SELECT * FROM imagesproducts WHERE idproduct = ".$fila['id']." LIMIT 1";
												$resultado2 = mysqli_query($conexion, $peticion2);

													while($fila2 = mysqli_fetch_array($resultado2)) {	?>

														<p><a href="product_detail.php?id=<?= $fila['id']; ?>"><img src="photo/<?= $fila2['imagen']; ?>" alt="" /></a></p>

													<?php }?>
														<a href="product_detail.php?id=<?= $fila['id']; ?>" class="category"><?= $fila['nombre']; ?></a><br/>
														<p class="price">S/. <?= $fila['precio']; ?></p>

													</div><!--./product-box-->
												</li>		
									<?php if ($counter % 4 == 0 ) { ?>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
							<?php }

										if ( $row_cnt == $counter){	?>
											</ul>
										</div>
							<?php	}

										$counter++;

										} 

											mysqli_close($conexion); ?>
											
								
									</div>							
								</div>
							</div>						
						</div>
						<br/>
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Ultimos <strong>Productos</strong></span></span></span>
									<span class="pull-right">
										<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>
									</span>
								</h4>
								<div id="myCarousel-2" class="myCarousel carousel slide">
									<div class="carousel-inner">

										<div class="active item">

											<ul class="thumbnails">	
												<?php ?><?php ?>

											<?php

											$conexion  = mysqli_connect($server,$user,$password,$database) or die("Error " . mysqli_error($conexion));
											mysqli_set_charset($conexion, "utf8");
											$peticion  = "SELECT * FROM products WHERE existencias > 0";
											$resultado = mysqli_query($conexion, $peticion);
											
											$row_cnt   = mysqli_num_rows($resultado);
											$counter   = 1;

									    
											while($fila = mysqli_fetch_array($resultado)) {

											?>
												<li class="span3">
													<div class="product-box">
														<span class="sale_tag"></span>
											<?php

												$peticion2  = "SELECT * FROM imagesproducts WHERE idproduct = ".$fila['id']." LIMIT 1";
												$resultado2 = mysqli_query($conexion, $peticion2);

													while($fila2 = mysqli_fetch_array($resultado2)) {	?>

														<p><a href="product_detail.php?id=<?= $fila['id']; ?>"><img src="photo/<?= $fila2['imagen']; ?>" alt="" /></a></p>

													<?php }?>
														<a href="product_detail.php<?= $fila['id']; ?>" class="category"><?= $fila['nombre']; ?></a><br/>
														<p class="price">S/. <?= $fila['precio']; ?></p>

													</div><!--./product-box-->
												</li>		
									<?php if ($counter % 4 == 0 ) { ?>
											</ul>
										</div>
										<div class="item">
											<ul class="thumbnails">
							<?php }

										if ( $row_cnt == $counter){	?>
											</ul>
										</div>
							<?php	}

										$counter++;

										} 

											mysqli_close($conexion); ?>
											
								
									</div>								
								</div>
							</div>						
						</div>
						<div class="row feature_box">						
							<div class="span4">
								<div class="service">
									<div class="responsive">	
										<img src="images/feature_img_2.png" alt="" />
										<h4>MODERN <strong>DESIGN</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="images/feature_img_1.png" alt="" />
										<h4>FREE <strong>SHIPPING</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="images/feature_img_3.png" alt="" />
										<h4>24/7 LIVE <strong>SUPPORT</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>	
						</div>		
					</div>				
				</div>
			</section>
			<section class="our_client">
				<h4 class="title"><span class="text">Manufactures</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="#"><img alt="" src="images/clients/14.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="images/clients/35.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="images/clients/1.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="images/clients/2.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="images/clients/3.png"></a>
					</div>
					<div class="span2">
						<a href="#"><img alt="" src="images/clients/4.png"></a>
					</div>
				</div>
			</section>
			<section id="footer-bar">
				<div class="row">
					<div class="span3">
						<h4>Navigation</h4>
						<ul class="nav">
							<li><a href="index.html">Homepage</a></li>  
							<li><a href="about.html">About Us</a></li>
							<li><a href="contact.html">Contac Us</a></li>
							<li><a href="cart.html">Your Cart</a></li>
							<li><a href="register.html">Login</a></li>							
						</ul>					
					</div>
					<div class="span4">
						<h4>My Account</h4>
						<ul class="nav">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="span5">
						<p class="logo"><img src="images/logo.png" class="site_logo" alt=""></p>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the  Lorem Ipsum has been the industry's standard dummy text ever since the you.</p>
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
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
<?php 
include "php/footer.php";
?>
