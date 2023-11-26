<div class="row">

  <?php
  foreach ($sp_new as $sp) {
    extract($sp);

    $image = $img_path . $img;
    echo '
            
                    <div class="col-sm-6 col-lg-3"  >
    <!--== Start Product Item ==-->
    <div class="product-item">
      <div class="inner-content" >
              
                <div class="product-thumb">
                  <a href="single-product.html">
                    <img src="' . $image . '" width="270" height="274" alt="Image-HasTech">
                  </a>
                  <div class="product-flag">
                    <ul>
                      <li class="discount">-10%</li>
                    </ul>
                  </div>
                  <div class="product-action">
                    <a class="btn-product-wishlist" href="shop-wishlist.html"><i class="fa fa-heart"></i></a>
                    <a class="btn-product-cart" href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                    <button type="button" class="btn-product-quick-view-open">
                      <i class="fa fa-arrows"></i>
                    </button>
                    <a class="btn-product-compare" href="shop-compare.html"><i class="fa fa-random"></i></a>
                  </div>
                  <a class="banner-link-overlay" href="shop.html"></a>
                </div>
                <div class="product-info">
                
                  <h4 class="title"><a href="single-product.html">' . $name_sp . '</a></h4>
                  <div class="prices">
                   
                    <span class="price">' . $price . '</span>
                  </div>
                </div>
             </div>
    </div>
    <!--== End prPduct Item ==-->
  </div>
          
            ';
  }
  ?>

</div>
</section>
<!--== End Product Area Wrapper ==-->

<!--== Start Divider Area Wrapper ==-->

<!--== End Divider Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->

<!--== End Product Area Wrapper ==-->

<!--== Start Divider Area Wrapper ==-->
<section>
  <div class="container pt--0 pb--0">
    <div class="row flex-md-row-reverse justify-content-between divider-wrap divider-style2">
      <div class="col-lg-6">
        <div class="divider-thumb-content">
          <div class="thumb">
            <a href="shop.html">
              <img src="assets/img/shop/banner/1.webp" width="570" height="350" alt="Image-HasTech">
            </a>
          </div>
          <div class="content">
            <h2 class="title">Sports Shoes</h2>
            <p class="desc">Up To 30% Off All Shoes & Products</p>
            <a class="btn-theme" href="shop.html">Shop Now</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="divider-thumb-content">
          <div class="thumb">
            <a href="shop.html">
              <img src="assets/img/shop/banner/2.webp" width="570" height="700" alt="Image-HasTech">
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--== End Divider Area Wrapper ==-->

<!--== Start Blog Area Wrapper ==-->
<section class="blog-area blog-default-area">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title text-center">
          <h3 class="title">Latest Blog</h3>
          <div class="desc">
            <p>There are many variations of passages of Lorem Ipsum available</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <!--== Start Blog Item ==-->
        <div class="post-item">
          <div class="inner-content">
            <div class="thumb">
              <a href="blog-details.html"><img src="assets/img/blog/1.webp" width="370" height="260" alt="Image-HasTech"></a>
            </div>
            <div class="content">
              <div class="meta-post">
                <ul>
                  <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                  <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                </ul>
              </div>
              <h4 class="title"><a href="blog-details.html">Lorem ipsum dolor ametcons adipisicing elit sed</a></h4>
              <a class="post-btn" href="blog.html">Read More</a>
            </div>
          </div>
        </div>
        <!--== End Blog Item ==-->
      </div>
      <div class="col-md-6 col-lg-4">
        <!--== Start Blog Item ==-->
        <div class="post-item">
          <div class="inner-content">
            <div class="thumb">
              <a href="blog-details.html"><img src="assets/img/blog/2.webp" width="370" height="260" alt="Image-HasTech"></a>
            </div>
            <div class="content">
              <div class="meta-post">
                <ul>
                  <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                  <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                </ul>
              </div>
              <h4 class="title"><a href="blog-details.html">Celebrity Daughter Opens About Upto Having Her Eye</a></h4>
              <a class="post-btn" href="blog.html">Read More</a>
            </div>
          </div>
        </div>
        <!--== End Blog Item ==-->
      </div>
      <div class="col-md-6 col-lg-4">
        <!--== Start Blog Item ==-->
        <div class="post-item">
          <div class="inner-content">
            <div class="thumb">
              <a href="blog-details.html"><img src="assets/img/blog/3.webp" width="370" height="260" alt="Image-HasTech"></a>
            </div>
            <div class="content">
              <div class="meta-post">
                <ul>
                  <li class="post-date"><i class="fa fa-calendar"></i><a href="blog.html">27,Jun 2030</a></li>
                  <li class="author-info"><i class="fa fa-user"></i><a href="blog.html">Oaklee Odom</a></li>
                </ul>
              </div>
              <h4 class="title"><a href="blog-details.html">Romantic Love Stories Of Hollywood Popular Celebrities</a></h4>
              <a class="post-btn" href="blog.html">Read More</a>
            </div>
          </div>
        </div>
        <!--== End Blog Item ==-->
      </div>
    </div>
  </div>
</section>
<!--== End Blog Area Wrapper ==-->
</main>
</div>
</div>