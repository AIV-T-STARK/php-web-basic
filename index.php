<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Bài 3 | Nguyễn Gia Hào</title>
	<link rel="shortcut icon" href="./assets/image/favicon.ico" type="image/x-icon">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<link rel="stylesheet" href="./assets/css/app.css">

</head>

<body>
	<div class="header">
		<div class="top-header bg-black">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<ul class="top-header-menu">
							<li><a href="#">My Account</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="#">My Cart</a></li>
							<li><a href="#">Checkout</a></li>
							<li><a href="#">Login</a></li>
						</ul>
					</div>
					<div class="col-12">
						<div class="row big-gutters">
							<div class="col-lg-left">
								<a href="index.html" class="logo">
									<img src="./assets/image/logo.png" alt="logo" class="image-responsive">
								</a>
							</div>
							<div class="col-lg-right">
								<div class="col-left-left">
									<!--Không biết đặt tên là gì?-->
									<div class="seach-wp">
										<div class="seach">
											<input type="text" placeholder="Search here...">
											<button><i class="fas fa-search"></i></button>
										</div>
									</div>
									<div class="cart">
										<div class="cart-icon">
											<a href="#"><i class="fas fa-shopping-cart"></i></a>
										</div>
										<div class="cart-desc">
											<p class="total">TOTAL</p>
											<p class="text-bold">$600.00</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-header bg-red">
			<div class="container">
				<nav class="bottom-header-navbar">
					<button class="title"><i class="fas fa-list-ul"></i>Categoryal</button>
					<button class="click-menu"><i class="fas fa-th"></i></button>
					<ul class="">
						<li><a href="#">Clothing</a></li>
						<li><a href="#">Electronics hot</a></li>
						<li><a href="#">Health & Beauty</a></li>
						<li><a href="#">Watches</a></li>
						<li><a href="#">Jewellery</a></li>
						<li><a href="#">Shoes</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="main">
		<div class="container">
			<div class="row big-gutters mb-7" id="top-header-wrapper">
				<div class="col-lg-left d-lg-block">
					<div class="category bg-white box-shadow">
						<div class="category-content">
							<ul id="menu-category">
								<li><a href="#"><i class="far fa-play-circle"></i>Clothing</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Electronics</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Shoes</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Watches</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Jewellery</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Health and Beauty</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Health and Beauty</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Electronics</a></li>
								<li><a href="#"><i class="far fa-play-circle"></i>Health and Beauty</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-right">
					<div class="hero-banner">
						<div class="banner-wrapper">
							<div class="banner-top" style="background: url(./assets/image/banner1.png);">
								<div class="banner-top-content text-white">
									<h1 class="display-2 text-blue">COLLECTION 2016</h1>
									<h1 class="display-1">SAVE 50% FOR</h1>
									<h1 class="display-3">FIRST PURCHASE</h1>
									<a href="#" class="btn btn-outline">SHOP NOW</a>
								</div>
							</div>
						</div>
					</div>
					<!--

						<a class="left" onclick="btnSlideLeft()">&#10094;</a>
						<a class="right" onclick="btnSlideRight()">&#10095;</a>

						-->
					<div class="banner-bottom text-white text-center bg-red">
						<div class="row no-gutters">
							<div class="banner-desc col-4">
								<a href="#">
									<p class="title">money back</p>
									<p class="desc">30 Days Money Back Guarantee </p>
								</a>
							</div>
							<div class="banner-desc col-4">
								<a href="#">
									<p class="title">free shipping</p>
									<p class="desc">Shipping on orders over $99</p>
								</a>
							</div>
							<div class="banner-desc col-4">
								<a href="#">
									<p class="title">Special Sale</p>
									<p class="desc">Extra $5 off on all items</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row big-gutters mb-7">
				<div class="col-lg-left deals">
					<div class="row">
						<div class="col-12 col-sm-6 col-lg-12 mb-7" id="hot-deals">
							<div class="card" id="slide-product-1">
								<div class="card-body">
									<div class="card-header">
										<p class="card-title">
											Hot deal
										</p>

										<div class="dots">
											<div class=" dot dot-left"><i class="fas fa-caret-left"></i></div>
											<div class=" dot dot-right"><i class="fas fa-caret-right"></i></div>
										</div>

									</div>
									<div class="card-products">
										<div class="product active">
											<a href="#">
												<div class="card-img">
													<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
												</div>
												<div class="card-desc">
													<p>Lorem, ipsum dolorrrrrrr.</p>
													<p><span class="price-die">$188.8</span><span class="price">$99.9</span></p>
													<p>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="far fa-star"></i>
													</p>
												</div>
											</a>
										</div>
										<div class="product">
											<a href="#">
												<div class="card-img">
													<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
												</div>
												<div class="card-desc">
													<p>Lorem, ipsum dolor.</p>
													<p><span class="price-die">$199.9</span><span class="price">$99.9</span></p>
													<p>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="far fa-star"></i>
													</p>
												</div>
											</a>
										</div>
										<div class="product">
											<a href="#">
												<div class="card-img">
													<img src="./assets/image/product4.png" alt="product1" class="img-responsive">
												</div>
												<div class="card-desc">
													<p>On the other handOn the</p>
													<p><span class="price-die">$199.9</span><span class="price">$99.9</span></p>
													<p>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="far fa-star"></i>
													</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-lg-12 mb-7" id="special-deal">
							<div class="card" id="slide-product-2">
								<div class="card-body">
									<div class="card-header">
										<p class="card-title">
											Special Deal
										</p>
										<div class="dots">
											<div class=" dot dot-left"><i class="fas fa-caret-left"></i></div>
											<div class=" dot dot-right"><i class="fas fa-caret-right"></i></div>
										</div>
									</div>
									<div class="card-products">
										<div class="product active">
											<a href="#">
												<div class="card-img">
													<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
												</div>
												<div class="card-desc">
													<p>Lorem, ipsum dgggolor.</p>
													<p><span class="price-die">$199.9</span><span class="price">$99.9</span></p>
													<p>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="far fa-star"></i>
													</p>
												</div>
											</a>
										</div>
										<div class="product">
											<a href="#">
												<div class="card-img">
													<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
												</div>
												<div class="card-desc">
													<p>Lorem, ipsumvvvv dolor.</p>
													<p><span class="price-die">$1399.9</span><span class="price">$99666.9</span></p>
													<p>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="far fa-star"></i>
														<i class="far fa-star"></i>
													</p>
												</div>
											</a>
										</div>
										<div class="product">
											<a href="#">
												<div class="card-img">
													<img src="./assets/image/product3.png" alt="product1" class="img-responsive">
												</div>
												<div class="card-desc">
													<p>Lorem, ipsum dorrrrlor.</p>
													<p><span class="price-die">$1995.9</span><span class="price">$993.9</span></p>
													<p>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="fas fa-star"></i>
														<i class="far fa-star"></i>
													</p>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-lg-12 mb-7" id="news-letters">
							<div class="card">
								<div class="card-body">
									<div class="card-header">
										<p class="card-title">
											Newsletters
										</p>
									</div>
									<div class="card-desc">
										<form action="#">
											<label for="newsleters">Sign Up for Our Newsletter!</label>
											<input type="text" class="form-control" id="newsleters" name="newsleters">
											<button type="submit" class="btn btn-primary">SUBSCRIBE</button>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="d-none d-lg-block col-lg-12">
							<div class="box-shadow">
								<img src="./assets/image/ad.png" alt="ad" class="img-responsive width-100">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-right product">
					<div class="row">
						<div class="col-12 mb-7" id="new-products">
							<div class="card" id="slide-product-3">
								<div class="card-body">
									<div class="card-header">
										<p class="card-title">
											New products
										</p>
										<ul class="card-menu show">
											<li><a href="#">all</a></li>
											<li><a href="#">Clothing</a></li>
											<li><a href="#">Electronics</a></li>
											<li><a href="#">Copy</a></li>
											<li><a href="#">MoMo</a></li>
										</ul>
										<div class="dots">
											<div class=" dot dot-left"><i class="fas fa-caret-left"></i></div>
											<div class=" dot dot-right"><i class="fas fa-caret-right"></i></div>
										</div>
									</div>
									<div class="card-products">
										<div class="row">
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolorrrrrr.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolooooor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product4.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ippppsum dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dddddolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product3.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsummm dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsuuum dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mb-7" id="banner-sale">
							<div class="row big-gutters">
								<div class="col-12 col-md-6 banner-sale">
									<div class="row no-gutters box-shadow">
										<div class="col-7 banner-sale-img" style="background-image:url(./assets/image/category1.png)">
											<div class="banner-sale-imgg"></div>
										</div>
										<div class="col-5 bg-white ">
											<div class="banner-sale-desc">
												<h1 class="display-2 text-gray-3">
													201<span style="font-size: 44px;">6</span>
												</h1>
												<h2>Fashion sale</h2>

												<a href="#">BUY NOW</a>
												<p class="text-gray-3">Lorem ipsum dolor sit.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 col-md-6  banner-sale">
									<div class="row no-gutters box-shadow">
										<div class="col-7 banner-sale-img" style="background-image:url(./assets/image/category2.png)">
											<div class="banner-sale-imgg"></div>
										</div>
										<div class="col-5 bg-white">
											<div class="banner-sale-desc">
												<h1 class="display-2 text-gray-3">
													201<span style="font-size: 44px;">6</span>
												</h1>
												<h2>Fashion sale</h2>

												<a href="#">BUY NOW</a>
												<p class="text-gray-3">Lorem ipsum dolor sit.</p>
											</div>

										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mb-7" id="latest-products">
							<div class="card" id="slide-product-4">
								<div class="card-body">
									<div class="card-header">
										<p class="card-title">
											Latest products
										</p>
										<ul class="card-menu">
											<li><a href="#">all</a></li>
											<li><a href="#">Clothing</a></li>
											<li><a href="#">Electronics</a></li>
											<li><a href="#">Copy</a></li>
										</ul>
										<div class="dots">
											<div class=" dot dot-left"><i class="fas fa-caret-left"></i></div>
											<div class=" dot dot-right"><i class="fas fa-caret-right"></i></div>
										</div>
									</div>
									<div class="card-products">
										<div class="row">
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$939.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product3.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dogflor.</p>
														<p><span class="price-die">$199.9</span><span class="price">$993.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ips dolor.</p>
														<p><span class="price-die">$1939.9</span><span class="price">$996.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product active">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$1989.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product4.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$1969.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$1499.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$1929.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$199.39</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
											<div class="col-12 col-sm-6 col-lg-3 product">
												<a href="#">
													<div class="card-img">
														<img src="./assets/image/product4.png" alt="product1" class="img-responsive">
													</div>
													<div class="card-desc">
														<p>Lorem, ipsum dolor.</p>
														<p><span class="price-die">$1994.9</span><span class="price">$99.9</span>
														</p>
														<p><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
															<i class="fas fa-star"></i> <i class="far fa-star"></i></p>
													</div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mb-7 mid-banner">
							<div class="row no-gutters bg-white box-shadow py-2">
								<div class="col-12 col-md-7">
									<img src="./assets/image/banner2.png" alt="banner2" class="img-responsive">
								</div>
								<div class="col-12 col-md-5">
									<div class="mid-banner-content">
										<h1 class="display-24px">Beautiful Laptop</h1>
										<h1 class="display-24px text-blue">Retina Display 18” Ready !</h1>
										<a href="#" class="btn btn-primary">Shop now</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 mb-7" id="featured-products">
							<div class="card" id="slide-product-5">
								<div class="card-body">
									<div class="card-header">
										<p class="card-title">
											Featured products
										</p>
										<div class="dots">
											<div class=" dot dot-left"><i class="fas fa-caret-left"></i></div>
											<div class=" dot dot-right"><i class="fas fa-caret-right"></i></div>
										</div>
									</div>
									<div class="card-products">
										<div class="row small-gutters">
											<div class="col-12 col-md-4 product active">
												<div class="row">
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-4 product active">
												<div class="row">
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-4 product active">
												<div class="row">
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-4 product">
												<div class="row">
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-4 product">
												<div class="row">
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product2.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
													<div class="col-12 col-sm-6 col-md-12">
														<a href="#">
															<div class="row no-gutters">
																<div class="col-5">
																	<div class="card-img">
																		<img src="./assets/image/product1.png" alt="product1" class="img-responsive">
																	</div>
																</div>
																<div class="col-7">
																	<div class="card-desc">
																		<p>Lorem, ipsum dolor.</p>
																		<p><span class="price-die">$199.9</span><span class="price">$99.9</span>
																		</p>
																		<p>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="fas fa-star"></i>
																			<i class="far fa-star"></i>
																		</p>
																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<div class="footer">
		<div class="top-footer bg-red">
			<div class="container">
				<div class="row top-footer-content">
					<div class="col-4 col-sm-2">
						<div class="d-flex align-items-center">
							<a href="#">
								<img src="./assets/image/icon1.png" alt="icon" class="img-responsive">
							</a>
						</div>

					</div>
					<div class="col-4 col-sm-2">
						<div class="d-flex align-items-center">
							<a href="#">
								<img src="./assets/image/icon2.png" alt="icon" class="img-responsive">
							</a>
						</div>

					</div>
					<div class="col-4 col-sm-2">
						<div class="d-flex align-items-center">
							<a href="#">
								<img src="./assets/image/icon3.png" alt="icon" class="img-responsive">
							</a>
						</div>

					</div>
					<div class="col-4 col-sm-2">
						<div class="d-flex align-items-center">
							<a href="#">
								<img src="./assets/image/icon4.png" alt="icon" class="img-responsive">
							</a>
						</div>

					</div>
					<div class="col-4 col-sm-2">
						<div class="d-flex align-items-center">
							<a href="#">
								<img src="./assets/image/icon3.png" alt="icon" class="img-responsive">
							</a>
						</div>

					</div>
					<div class="col-4 col-sm-2">
						<div class="d-flex align-items-center">
							<a href="#">
								<img src="./assets/image/icon1.png" alt="icon" class="img-responsive">
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="mid-footer text-gray-3">
			<div class="container">
				<div class="row mid-footer-content big-gutters">
					<div class="col-12 col-sm-6 col-md-6 col-lg-3">
						<a href="#" class="logo">
							<img src="./assets/image/logo.png" alt="logo" class="img-responsive">
						</a>
						<br>
						<p class="desc-logo">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh velit it’s a cold world out
							there.</p>
						<br>
						<ul>
							<li><i class="fas fa-map-marker-alt"></i>0123 Main Road, Your City, NY 123456</li>
							<li><i class="fas fa-phone"></i>(000) 2345 - 6789</li>
							<li><i class="fas fa-envelope"></i>info@psdfreebies.com</li>
						</ul>
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-3 mid-footer-item">
						<h1 class="title">Information</h1>
						<br>
						<ul>
							<li><a href="#">Our Story</a></li>
							<li><a href="#">Privacy & Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
							<li><a href="#">Shipping & Delivery</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">FAQs</a></li>
						</ul>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mid-footer-item">
						<h1 class="title">Our Social</h1>
						<br>
						<div class="row small-gutters">
							<div class="col-6">
								<ul>
									<li><a href="#"><i class="fab fa-google-plus-g"></i>Google+</a></li>
									<li><a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a></li>
									<li><a href="#"><i class="fab fa-vimeo-v"></i>Vimeo</a></li>
									<li><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
								</ul>
							</div>
							<div class="col-6">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
									<li><a href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
									<li><a href="#"><i class="fas fa-rss"></i>RSS</a></li>
									<li><a href="#"><i class="fab fa-youtube"></i>YouTube</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-3 mid-footer-item">
						<div class="row">
							<div class="col-12">
								<h1 class="title">Opening Time</h1>
								<br>
								<ul>
									<li>
										<i class="far fa-clock"></i>
										Monday - Friday: 08:30 am - 09:30 pm
								</ul>
							</div>
							<div class="col-12 mt-6">
								<h1 class="title">Payment Option</h1>
								<br>
								<div class="row cc">
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-mastercard"></i>
										</a>
									</div>
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-discover"></i>
										</a>
									</div>
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-amex"></i>
										</a>
									</div>
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-visa"></i>
										</a>
									</div>
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-stripe"></i>
										</a>
									</div>
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-diners-club"></i>
										</a>
									</div>
									<div class="col-3">
										<a href="#">
											<i class="fab fa-cc-jcb"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-footer bg-black">
			<div class="container">
				<ul>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Searchs</a></li>
					<li><a href="#">Searchs</a></li>
					<li><a href="#">Sitemap</a></li>
					<li><a href="#">Advance</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
				<p class="coryright">© 2016 PSDFreebies.com <span>|</span> All Rights Reserved.</p>
			</div>
		</div>
	</div>

	<script src="./assets/js/app.js"></script>
</body>

</html>