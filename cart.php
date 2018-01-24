<?php
include 'init.php'
?>

			<section class="header_text sub">
                <div class="image-productDetails">

                    <div class="overlayy"></div>
                </div>
				<h4><span>Shopping Cart</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>Ihre</strong> Einkauflist</span></h4>
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Löschen</th>
									<th>Bild</th>
									<th>Produkt Name</th>
									<th>Menge</th>
									<th>Preice</th>
									<th>Summe</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src="layout/images/products/1.jpg"></a></td>
									<td>Produkt 1 </td>
									<td><input type="text" placeholder="2" class="input-mini"></td>
									<td>17.00 <i class="fa fa-eur" aria-hidden="true"></i></td>
									<td>34.00 <i class="fa fa-eur" aria-hidden="true"></i></td>
								</tr>			  
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src="layout/images/products/2.jpg"></a></td>
									<td>Produkt 2</td>
									<td><input type="text" placeholder="1" class="input-mini"></td>
									<td>20.00 <i class="fa fa-eur" aria-hidden="true"></i></td>
									<td>20.00 <i class="fa fa-eur" aria-hidden="true"></i></td>
								</tr>
								<tr>
									<td><input type="checkbox" value="option1"></td>
									<td><a href="product_detail.php"><img alt="" src="layout/images/products/3.jpg"></a></td>
									<td>Produkt 3</td>
									<td><input type="text" placeholder="3" class="input-mini"></td>
									<td>20.00 <i class="fa fa-eur" aria-hidden="true"></i></td>
									<td>60.00 <i class="fa fa-eur" aria-hidden="true"></i></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><strong>114.00 <i class="fa fa-eur" aria-hidden="true"></i></strong></td>
								</tr>		  
							</tbody>
						</table>
						<h4>Was wollen Sie danach machen?</h4>
						<p>haben Sie ein Coupon ?.</p>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
							Coupon benutzen
						</label>
						<label class="radio">
							<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
							Estimate Shipping &amp; Taxes
						</label>
						<hr>
						<p class="cart-total right">
							<strong>Sub-Total</strong>:	114.00 <i class="fa fa-eur" aria-hidden="true"></i><br>
							<strong>Eco Tax (-2.00)</strong>: 2.00 <i class="fa fa-eur" aria-hidden="true"></i><br>
							<strong>VAT (17.5%)</strong>: 3.00 <i class="fa fa-eur" aria-hidden="true"></i><br>
							<strong>Total</strong>: 119.00 <i class="fa fa-eur" aria-hidden="true"></i><br>
						</p>
						<hr/>
						<p class="buttons center">				
							<button class="btn" type="button">Aktualisieren</button>
							<button class="btn" type="button">Weiter</button>
							<button class="btn btn-inverse" type="submit" id="checkout">Checkout</button>
						</p>					
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
													<p class="price"><i class="fa fa-eur" aria-hidden="true"></i>26</p>
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
													<p class="price"><i class="fa fa-eur" aria-hidden="true"></i>13</p>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</section>
			<?php

include 'includes/footer.php';
?>