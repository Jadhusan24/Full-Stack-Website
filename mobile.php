<!--
author: Cyberstore
Date: 2020|01|13 7:40pm
-->
<?php 
	require('php/includes.php');
	require('inc/header.html.php');
?>
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l page-head_agile_info_w3l-3">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Mobile Phones</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>M</span>obile
				<span>P</span>hones</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php get_products_phones(); ?>
							</div>
						</div>
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Search Brand..." name="search" required="">
								<input type="submit" value=" ">
							</form>
							<div class="left-side py-2">
								<ul>
									<li>
										<input type="checkbox" class="checked" id="s">
										<span class="span">Samsung</span>
									</li>
									<li>
										<input type="checkbox" class="checked" id="o">
										<span class="span">Oppo</span>
									</li>
									<li>
										<input type="checkbox" class="checked" id="a">
										<span class="span">Apple</span>
									</li>
									<li>
										<input type="checkbox" class="checked" id="so">
										<span class="span"> Sony</span>
									</li>
									<li>
										<input type="checkbox" class="checked" id="n">
										<span class="span">Nokia</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Micromax</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Lenovo</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Red Mi</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Nexus</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Motorola</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">One Plus</span>
									</li>
								</ul>
							</div>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Price</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Under $1,000</a>
									</li>
									<li class="my-1">
										<a href="#">$1,000 - $5,000</a>
									</li>
									<li>
										<a href="#">$5,000 - $10,000</a>
									</li>
									<li class="my-1">
										<a href="#">$10,000 - $20,000</a>
									</li>
									<li>
										<a href="#">$20,000 $30,000</a>
									</li>
									<li class="mt-1">
										<a href="#">Over $30,000</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- discounts -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Discount</h3>
							<ul>
								<li>
									<span class="span">5% or More</span>
								</li>
								<li>
									<span class="span">10% or More</span>
								</li>
								<li>
									<span class="span">20% or More</span>
								</li>
								<li>
									<span class="span">30% or More</span>
								</li>
							</ul>
						</div>
						<!-- //discounts -->
						<!-- offers -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Offers</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Exchange Offer</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">No Cost EMI</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Special Price</span>
								</li>
							</ul>
						</div>
						<!-- //offers -->
						<!-- arrivals -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">New Arrivals</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 30 days</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Last 90 days</span>
								</li>
							</ul>
						</div>
						<div class="left-side py-2">
							<h3 class="agileits-sear-head mb-3">Availability</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Exclude Out of Stock</span>
								</li>
							</ul>
						</div>
						<!-- //arrivals -->
						<!-- delivery -->
						<div class="left-side border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Cash On Delivery</h3>
							<ul>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Eligible for Cash On Delivery</span>
								</li>
							</ul>
						</div>
						<!-- //delivery -->

					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>

	</div>

	<?php
	require('inc/footer.html.php')
?>
