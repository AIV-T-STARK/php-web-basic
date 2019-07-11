<?php 
  require 'vendor/autoload.php';

  $faker = Faker\Factory::create('vi_VN');
 ?>

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

  <?php include 'header.php' ?>

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
                          <img src="<?php echo $faker->imageUrl(200,200); ?>" alt="product1" class="img-responsive">
                        </div>
                        <div class="card-desc">
                          <p> <?php echo $faker->realText(35, 1); ?></p>
                          <p><span class="price-die">$<?php echo $faker->randomFloat(2, 0, 999); ?></span><span class="price">$<?php echo $faker->randomFloat(2, 0, 999); ?></span></p> 
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
                    <div class="product">
                      <a href="#">
                        <div class="card-img">
                          <img src="<?php echo $faker->imageUrl(200,200); ?>" alt="product1" class="img-responsive">
                        </div>
                        <div class="card-desc">
                          <p> <?php echo $faker->realText(35, 1); ?></p>
                          <p><span class="price-die">$<?php echo $faker->numberBetween(100, 999); ?></span><span class="price">$<?php echo $faker->numberBetween(100, 999); ?></span></p> 
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
                      <?php 
                        for ($i=0; $i < 4; $i++) { 
                          echo '
                            <div class="col-12 col-sm-6 col-lg-3 product">
                              <a href="#">
                                <div class="card-img">
                                  <img src="' . $faker->imageUrl(200,200) .'" alt="product1" class="img-responsive">
                                </div>
                                <div class="card-desc">
                                  <p>' . $faker->realText(35, 1) . '</p>
                                <p><span class="price-die">$' . $faker->numberBetween(100, 999). '</span><span class="price">$' . $faker->numberBetween(100, 999) . '</span></p>  
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
                          ';
                        }
                       ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 mb-7" id="banner-sale">
              <div class="row big-gutters">
                <div class="col-12 col-md-6 banner-sale">
                  <div class="row no-gutters box-shadow">
                    <div class="col-7 banner-sale-img" style="background-image:url(<?php echo $faker->imageUrl(234, 255, 'cats') ; ?>)">
                      <div class="banner-sale-imgg"></div>
                    </div>
                    <div class="col-5 bg-white ">
                      <div class="banner-sale-desc">
                        <h1 class="display-2 text-gray-3">
                          201<span style="font-size: 44px;"><?php echo $faker->randomDigit; ?></span>
                        </h1>
                        <h2>Fashion sale</h2>

                        <a href="#">BUY NOW</a>
                        <p class="text-gray-3"><?php echo $faker->realText(35, 1); ?></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6  banner-sale">
                  <div class="row no-gutters box-shadow">
                    <div class="col-7 banner-sale-img" style="background-image:url(<?php echo $faker->imageUrl(234, 255) ; ?>)">
                      <div class="banner-sale-imgg"></div>
                    </div>
                    <div class="col-5 bg-white">
                      <div class="banner-sale-desc">
                        <h1 class="display-2 text-gray-3">
                          201<span style="font-size: 44px;"><?php echo $faker->randomDigit; ?></span>
                        </h1>
                        <h2>Fashion sale</h2>

                        <a href="#">BUY NOW</a>
                        <p class="text-gray-3"><?php echo $faker->realText(35, 1); ?></p>
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
                      <?php 
                        for ($i=0; $i < 4; $i++) { 
                          echo '
                            <div class="col-12 col-sm-6 col-lg-3 product">
                              <a href="#">
                                <div class="card-img">
                                  <img src="' . $faker->imageUrl(200,200) .'" alt="product1" class="img-responsive">
                                </div>
                                <div class="card-desc">
                                  <p>' . $faker->realText(35, 1) . '</p>
                                <p><span class="price-die">$' . $faker->numberBetween(100, 999). '</span><span class="price">$' . $faker->numberBetween(100, 999) . '</span></p>  
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
                          ';
                        }
                       ?>
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
                      <?php 
                        for ($i=0; $i < 3; $i++) { 
                          echo '
                            <div class="col-12 col-md-4 product">
                              <div class="row">
                          ';
                          for ($j=0; $j < 2; $j++) { 
                            echo '
                              <div class="col-12 col-sm-6 col-md-12">
                                <a href="#">
                                  <div class="row no-gutters">
                                    <div class="col-5">
                                      <div class="card-img">
                                        <img src="' . $faker->imageUrl(200,200) .'" alt="product1" class="img-responsive">
                                      </div>
                                    </div>
                                    <div class="col-7">
                                      <div class="card-desc">
                                        <p>' . $faker->realText(35, 1) . '</p>
                              <p><span class="price-die">$' . $faker->numberBetween(100, 999) . '</span><span class="price">$' . $faker->numberBetween(100, 999) . '</span></p> 
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
                            ';
                          }
                          echo '
                              </div>
                            </div>
                          ';
                        }
                       ?>
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

  <?php include 'footer.php' ?>

  <script src="./assets/js/app.js"></script>
</body>

</html>