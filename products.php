<?php
include 'init.php'
?>

			<section class="header_text sub">
                <div class="image-productDetails">

                    <div class="overlayy"></div>
                </div>
				<h4><span>Neue Produkte</span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">

							<li class="span3">
								<div class="product-box">                                        												
									<a href="product_detail.php"><img alt="" src="layout/images/products/1.jpg"></a><br/>
									<a href="product_detail.php" class="title">Produkt 1</a><br/>
									<a href="#" class="category">Beschreibung 1</a>
									<p class="price">35 <i class="fa fa-eur" aria-hidden="true"></i></p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="layout/images/products/2.jpg"></a><br/>
									<a href="product_detail.php" class="title">Produkt 2</a><br/>
									<a href="#" class="category">Beschreibung 2</a>
									<p class="price">61  <i class="fa fa-eur" aria-hidden="true"></i></p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="layout/images/products/3.jpg"></a><br/>
									<a href="product_detail.php" class="title">Produkt 3</a><br/>
									<a href="#" class="category">Beschreibung 3</a>
									<p class="price">23 <i class="fa fa-eur" aria-hidden="true"></i></p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="layout/images/products/4.jpg"></a><br/>
									<a href="product_detail.php" class="title">Produkt 4</a><br/>
									<a href="#" class="category">Beschreibung 4</a>
									<p class="price">13 <i class="fa fa-eur" aria-hidden="true"></i></p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.php"><img alt="" src="layout/images/products/5.jpg"></a><br/>
									<a href="product_detail.php" class="title">Produkt 5</a><br/>
									<a href="#" class="category">Beschreibung 5</a>
									<p class="price">26 <i class="fa fa-eur" aria-hidden="true"></i></p>
								</div>
							</li>
						</ul>								
						<hr>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="#">Prev</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">Next</a></li>
							</ul>
						</div>
					</div>
					<div class="span3 col">
						<div class="block">	
							<ul class="nav nav-list">
								<li class="nav-header">Schönheit und Kosmetik</li>
								<li><a href="products.php">Haut</a></li>
								<li class="active"><a href="products.php">Körper</a></li>
								<li><a href="products.php">Lippen</a></li>
								<li><a href="products.php">Gesicht</a></li>
								<li><a href="products.php">Haare</a></li>
								<li><a href="products.php">Reinigung</a></li>
							</ul>
							<br/>
							<ul class="nav nav-list below">
								<li class="nav-header">Bio Arganöl</li>
								<li><a href="products.php">Atlas</a></li>
								<li><a href="products.php">Amlou</a></li>
							</ul>
						</div>
						<div class="block">
							<h4 class="title">
								<span class="pull-left"><span class="text">Randomize</span></span>
								<span class="pull-right">
									<a class="left button" href="#myCarousel" data-slide="prev"></a><a class="right button" href="#myCarousel" data-slide="next"></a>
								</span>
							</h4>
							<div id="myCarousel" class="carousel slide">
								<div class="carousel-inner">
									<div class="active item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">
													<span class="sale_tag"></span>												
													<img alt="" src="layout/images/products/1.jpg"><br/>
													<a href="product_detail.php" class="title">Produkt 1</a><br/>
													<a href="#" class="category">Beschreibung 1</a>
													<p class="price">26 <i class="fa fa-eur" aria-hidden="true"></i></p>
												</div>
											</li>
										</ul>
									</div>
									<div class="item">
										<ul class="thumbnails listing-products">
											<li class="span3">
												<div class="product-box">												
													<img alt="" src="layout/images/products/2.jpg"><br/>
													<a href="product_detail.php" class="title">Produkt 2</a><br/>
													<a href="#" class="category">Beschreing 2</a>
													<p class="price">13 <i class="fa fa-eur" aria-hidden="true"></i></p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="block">								
							<h4 class="title"><strong>Best</strong> Bestellt</h4>
							<ul class="small-product">
								<li>
									<a href="#" title="Praesent tempor sem sodales">
										<img src="layout/images/products/3.jpg" alt="Praesent tempor sem sodales">
									</a>
									<a href="#">Produkt 1</a>
								</li>
								<li>
									<a href="#" title="Luctus quam ultrices rutrum">
										<img src="layout/images/products/4.jpg" alt="Luctus quam ultrices rutrum">
									</a>
									<a href="#">Produkt 2</a>
								</li>
								<li>
									<a href="#" title="Fusce id molestie massa">
										<img src="layout/images/products/5.jpg" alt="Fusce id molestie massa">
									</a>
									<a href="#">Produkt 3</a>
								</li>   
							</ul>
						</div>
					</div>
				</div>
			</section>
			<?php
include 'includes/footer.php';
?>