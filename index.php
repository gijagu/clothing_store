<?php 
include "php/config.php";
include "php/header.php";
?>
			<section  class="homepage-slider" id="home-slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<img src="images/carousel/banner1.jpg" alt="" />
						</li>
						<li>
							<img src="images/carousel/banner2.png" alt="" />
						</li>
						<li>
							<img src="images/carousel/banner3.png" alt="" />
						</li>
					</ul>
				</div>			
			</section>
			<section class="header_text">
				SOMOS LA CHICA MALA DE LAS DEMÁS MARCAS, SOMOS ÚNICAS, ESPECIALES, EGOÍSTAS CON NUESTRO ESTILO, <br>ATRÉVETE A SER UNA CHICA MALA!.
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
														<span class="sale_tag">NUEVO</span>
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
										<h4>MODERNOS <strong>DISE&Ntilde;OS</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>									
									</div>
								</div>
							</div>
							<div class="span4">	
								<div class="service">
									<div class="customize">			
										<img src="images/feature_img_1.png" alt="" />
										<h4>ENVIOS A TODO EL <strong>PERÚ</strong></h4>
										<p>Lorem Ipsum is simply dummy text of the printing and printing industry unknown printer.</p>
									</div>
								</div>
							</div>
							<div class="span4">
								<div class="service">
									<div class="support">	
										<img src="images/feature_img_3.png" alt="" />
										<h4>VENTAS X <strong>MAYOR</strong></h4>
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

<?php 
include "php/footer.php";
?>
