<!--
author: Cybershore
Date: 2020|01|13 7:40pm
-->
<?php
require('php/includes.php');
require('inc/header.html.php');
?>
<!-- banner-2 -->
<div class="page-head_agile_info_w3l page-head_agile_info_w3l-2">

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
				<li>Laptops</li>
			</ul>
		</div>
	</div>
</div>
<!-- //page -->

<!-- top Products -->
<div class="ads-grid  py-sm-5 py-4">
	<div class="container py-xl-4 py-lg-2">
		<!-- tittle heading -->
		<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
			<span>L</span>aptops</h3>
		<!-- //tittle heading -->
		<div class="row">
			<!-- product left -->
			<div class="agileinfo-ads-display col-lg-9">
				<div class="wrapper">
					<!-- first section -->
					<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mt-4">
						<div class="row">
							<?php get_products_laptop(); ?>
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
									<input type="checkbox" class="checked">
									<span class="span">Lenovo</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Dell</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">MSI</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Asus</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">HP</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Razer</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Acer</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span">Huawei</span>
								</li>
								<li>
									<input type="checkbox" class="checked">
									<span class="span"> MacBook</span>
								</li>
							</ul>
						</div>
					</div>
					<!-- reviews -->
					<div class="customer-rev border-bottom left-side py-2">
						<h3 class="agileits-sear-head mb-3">Customer Review</h3>
						<ul>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<span>5.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>4.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.5</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>3.0</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star" aria-hidden="true"></i>
									<i class="fa fa-star-half-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<i class="fa fa-star-o" aria-hidden="true"></i>
									<span>2.5</span>
								</a>
							</li>
						</ul>
					</div>
					<!-- //reviews -->
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
				</div>
			</div>
			<!-- //product right -->
		</div>
	</div>
</div>
<!-- //top products -->

<div id="fot">

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
	<!-- footer -->
	<?php
	require('inc/footer.html.php')
	?>