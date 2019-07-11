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
                      <p class="text-bold">$<?php echo $faker->randomFloat(3, 0, 999); ?></p>
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