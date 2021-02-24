// add the header to the nav element
const nav = document.getElementById("nav");
const headerTemplate = `
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Offer Zone Top Deals & Discounts
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						<li class="text-center border-right text-white">
							<a class="play-icon popup-with-zoom-anim text-white" href="#">
								<i class="fas fa-map-marker mr-2"></i>Select Location</a>
						</li>
						<li class="text-center border-right text-white">
							<a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
								<i class="fas fa-truck mr-2"></i>Track Order</a>
						</li>
							<li class="text-center border-right text-white">
								<a href="log.html" target="blank" data-target="#exampleModal" class="text-white">
									<i class="fas fa-sign-in-alt mr-2"></i> Log In </a>
							</li>
							<li class="text-center text-white">
								<a href="sign.html" target="blank" data-target="#exampleModal2" class="text-white">
									<i class="fas fa-sign-out-alt mr-2"></i>Register </a>
							</li>
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>


	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Cyber Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Search"
									aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="btn w3view-cart" type="submit" name="submit" value="">
										<i class="fas fa-cart-arrow-down"></i>
									</button>
								</form>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.html">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="mobile.html">Mobile Phones</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="laptop.html">Laptops</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.html">About Us</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="payment.html">Payment</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->`;
nav.innerHTML = headerTemplate;

// add the header to the nav element
const fot = document.getElementById("fot");
const footerTemplate = `
			<!-- footer third section -->
			<div class="w3l-middlefooter-sec">
				<div class="container py-md-5 py-sm-4 py-3">
					<div class="row footer-info w3-agileits-info">
						<!-- footer categories -->
						<div class="col-md-3 col-sm-6 footer-grids">
							<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="mobile.html">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="laptop.html">Work Pc's</a>
							</li>
							<li class="mb-3">
								<a href="laptop.html">Gaming Pc's</a>
							</li>
							<li class="mb-3">
								<a href="mobile.html">Smartphones</a>
							</li>
						</ul>
						</div>
						<!-- //footer categories -->
						<!-- quick links -->
						<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
							<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
							<ul>
								<li class="mb-3">
									<a href="about.html">About Us</a>
								</li>
								<li class="mb-3">
									<a href="contact.html">Contact Us</a>
								</li>
								<li class="mb-3">
									<a href="help.html">Help</a>
								</li>
								<li class="mb-3">
									<a href="faqs.html">Faqs</a>
								</li>
								<li class="mb-3">
									<a href="terms.html">Terms of use</a>
								</li>
								<li>
									<a href="privacy.html">Privacy Policy</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
							<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
							<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> Colombo 6, Sri lanka.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> +0000 0000 000 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +0000 0000 000 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:cyberstore@mail.com"> cyberstore@gmail.com</a>
							</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
							<!-- newsletter -->
							<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
							<p class="mb-3">Free Delivery on your first order!</p>
							<form action="#" method="post">
								<div class="form-group">
									<input type="email" class="form-control" placeholder="Email" name="email"
										required="">
									<input type="submit" value="Go">
								</div>
							</form>
							<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="https://www.facebook.com/"target="blank">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="https://twitter.com/"target="blank">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="www.google.com"target="blank">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
						</div>
					</div>
					<!-- //quick links -->
				</div>
			</div>
			<!-- //footer third section -->
		</footer>
		<!-- //footer -->`;
fot.innerHTML = footerTemplate;