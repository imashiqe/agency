      @extends('frontend.master')
      @section('content')
      
      
      <!-- main-area -->
      <main>
        <!-- slider-area -->
        {{-- <section class="slider-area s-slider-bg" data-background="{{asset('frontend/img/slider/slider_bg02.jpg') }}">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="slider-content s-slider-content text-center mb-45">
                            <h2 class="wow fadeInUp" data-wow-delay="0.2s"><span>Let's Start.</span> Marketplace for Digital Themes & Plugins</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.4s">New Products on the Marketplace.Your dream site download!</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="s-slider-search-form wow fadeInUp" data-wow-delay="0.6s">
                            <form action="#">
                                <input type="text" placeholder="Search what your need...">
                                <button><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
   



        <div class="container-fluid p-0">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('frontend/img/slider/1380-x-780-slider-1.jpg') }}" class="img-fluid w-100 d-block" alt="Slide 1">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/img/slider/1380-x-780-slider-delr.jpg') }}" class="img-fluid w-100 d-block" alt="Slide 2">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/img/slider/slider.jpg') }}" class="img-fluid w-100 d-block" alt="Slide 3">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('frontend/img/slider/slider_bg03.jpg') }}" class="img-fluid w-100 d-block" alt="Slide 4">
                </div>
              </div>
              
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          
  
        {{-- <!-- slider-area-end --> --}}
        <div class="area-bg-wrap">
            <!-- features-items -->
            {{-- <section class="features-items-area pt-115">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8">
                            <div class="section-title text-center mb-55">
                                <h2>Featured Tranding of the week</h2>
                                <p>Market or marketplace is location where people regularly purchase and provisins.</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-thumb-wrap">
                        <div class="row text-center justify-content-center">
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb02.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb03.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb04.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb05.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb06.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb07.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb08.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb09.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb10.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb11.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb12.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb13.jpg') }}" alt="img"></a>
                            </div>
                            <div class="single-product-thumb">
                                <a href="#"><img src="{{asset('frontend/img/thumb/product_thumb14.jpg') }}" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- features-items-end -->
            <!-- product-area -->
            <section class="product-area product-bg pt-85 pb-120">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9">
                            <div class="section-title text-center mb-30">
                                <h2>Let's Check Out Newest Product Your Home & Office</h2>
                                <h4>تفصيل جميع انواع المفروشات حسب الطلب
                                    تنجيد كنب وكراسي باجود الاقمشة.
                                    بيع كراسي سجاد ورق جدران
                                    تفصيل وتركيب ستائر.
                                    تركيب باركيه ارضيات.</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 text-center">
                            <div class="product-menu s-product-menu mb-60">
                                <button class="active" data-filter="*">All Items</button>
                                <button class="" data-filter=".cat-one">Home Decor</button>
                                <button class="" data-filter=".cat-two">Living Room</button>
                                <button class="" data-filter=".cat-three">Dining Room</button>
                                <button class="" data-filter=".cat-four">Bed Room</button>
                                <button class="" data-filter=".cat-five">Office</button>
                            </div>
                        </div>
                    </div>
                    <div class="row product-active">
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-three cat-five">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img01.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-three">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img02.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-one cat-five">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img03.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-two cat-four">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img04.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-one cat-four">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img05.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-two cat-three">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img06.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-one cat-five">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img01.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 grid-item cat-two cat-four">
                            <div class="single-product s-single-product mb-30">
                                <div class="product-img">
                                    <a href="#"><img src="{{asset('frontend/img/product/t_product_img02.jpg') }}" alt="img"></a>
                                </div>
                                <div class="product-action">
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Buy Now</a>
                                    <a href="#" class="btn"><i class="far fa-eye"></i>Demo</a>
                                </div>
                                <div class="product-overlay">
                                    <h5><a href="#">Beyond - Theme</a></h5>
                                    <span>$49</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="product-btn text-center mt-30">
                                <a href="#" class="btn">More Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-area-end -->
        </div>
        <!-- customize-area -->
        <section class="customize-area position-relative pt-115 pb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-55">
                            <h2>Customize Home & Office</h2>
                            <p>Market or marketplace is location where people regularly purchase and provisins.</p>
                        </div>
                    </div>
                </div>
                <div class="container my-5">
                    <div class="row mb-">
                      <!-- Image Column -->
                      <div class="col-md-6 ">
                        <img src="frontend/img/product/t_product_img04.jpg" alt="Description" class="img-fluid">
                      </div>
                      <!-- Description Column -->
                      <div class="col-md-6 mt-4">
                        <h2>Exclusive Carpet Sale - Transform Your Home Today!</h2>
                        <p>
                            Looking to add a touch of elegance and comfort to your living space? Don’t miss out on our limited-time Carpet Sale! With a wide range of high-quality carpets available in various styles, sizes, and colors, you're sure to find the perfect match for your home.

                            Premium Quality: Soft, durable, and built to last.
                            
                            Variety of Styles: From traditional to modern, we have something for every taste.
                            
                            Affordable Prices: Enjoy unbeatable discounts and amazing offers.
                            
                            Easy Installation: Our carpets are designed for quick and hassle-free installation.
                            
                            Whether you're looking to update a room or completely transform your home, now is the perfect time to shop. Hurry, these deals won't last forever!
                            
                            
                        </p>
                      </div>
                    </div>

                    {{-- 2 --}}
                    <div class="row">
                       
                        <!-- Description Column -->
                        <div class="col-md-6 mt-4">
                          <h2> Sofa Sale - Comfort and Style Sofa for Your Home!</h2>
                          <p>
                           

                            Upgrade your living space with our Sofa Sale! Offering a stunning collection of sofas that blend style, comfort, and affordability, this is the perfect opportunity to bring your dream living room to life.
                            
                            Exceptional Comfort: Sink into the soft cushions and experience ultimate relaxation.
                            
                            Variety of Designs: From contemporary to classic, find the perfect fit for your home décor.
                            
                            Durable and High-Quality: Crafted with premium materials to ensure long-lasting use.
                            
                            Affordable Prices: Enjoy amazing discounts on top-quality sofas.
                            
                            Customization Options: Choose from a range of fabrics and colors to suit your style.
                            
                            Don’t miss out on these incredible savings! Whether you need a cozy corner sofa or a spacious sectional, we have it all. Shop now and make your living room a haven of comfort and style!
                              
                              
                          </p>
                        </div>
                         <!-- Image Column -->
                         <div class="col-md-6">
                            <img src="frontend/img/product/t_product_img05.jpg" alt="Description" class="img-fluid">
                          </div>
                      </div>
                      {{-- 3 --}}
                      <div class="row pt-4">
                        <!-- Image Column -->
                        <div class="col-md-6">
                          <img src="frontend/img/product/t_product_img03.jpg" alt="Description" class="img-fluid">
                        </div>
                        <!-- Description Column -->
                        <div class="col-md-6">
                          <h2>Exclusive Dining Table - Transform Your Home Today!</h2>
                          <p>
                              Looking to add a touch of elegance and comfort to your living space? Don’t miss out on our limited-time Carpet Sale! With a wide range of high-quality carpets available in various styles, sizes, and colors, you're sure to find the perfect match for your home.
  
                              Premium Quality: Soft, durable, and built to last.
                              
                              Variety of Styles: From traditional to modern, we have something for every taste.
                              
                              Affordable Prices: Enjoy unbeatable discounts and amazing offers.
                              
                              Easy Installation: Our carpets are designed for quick and hassle-free installation.
                              
                              Whether you're looking to update a room or completely transform your home, now is the perfect time to shop. Hurry, these deals won't last forever!
                              
                              
                          </p>
                        </div>
                      </div>
                      {{-- 4 --}}
                      <div class="row mt-4">
                      
                        <!-- Description Column -->
                        <div class="col-md-6">
                          <h2>Exclusive Window Screen - Transform Your Home Today!</h2>
                          <p>
                              Looking to add a touch of elegance and comfort to your living space? Don’t miss out on our limited-time Carpet Sale! With a wide range of high-quality carpets available in various styles, sizes, and colors, you're sure to find the perfect match for your home.
  
                              Premium Quality: Soft, durable, and built to last.
                              
                              Variety of Styles: From traditional to modern, we have something for every taste.
                              
                              Affordable Prices: Enjoy unbeatable discounts and amazing offers.
                              
                              Easy Installation: Our carpets are designed for quick and hassle-free installation.
                              
                              Whether you're looking to update a room or completely transform your home, now is the perfect time to shop. Hurry, these deals won't last forever!
                              
                              
                          </p>
                        </div>
                          <!-- Image Column -->
                          <div class="col-md-6">
                            <img src="frontend/img/product/productporda.jpg" alt="Description" class="img-fluid">
                          </div>
                      </div>


                      <div class="row mt-4">
                       <!-- Image Column -->
                       <div class="col-md-6">
                        <img src="frontend/img/product/banner401.jpg" alt="Description" class="img-fluid">
                      </div>
                        <!-- Description Column -->
                        <div class="col-md-6">
                          <h2>Window Screen - Transform Your Home Today!</h2>
                          <p>
                              Looking to add a touch of elegance and comfort to your living space? Don’t miss out on our limited-time Carpet Sale! With a wide range of high-quality carpets available in various styles, sizes, and colors, you're sure to find the perfect match for your home.
  
                              Premium Quality: Soft, durable, and built to last.
                              
                              Variety of Styles: From traditional to modern, we have something for every taste.
                              
                              Affordable Prices: Enjoy unbeatable discounts and amazing offers.
                              
                              Easy Installation: Our carpets are designed for quick and hassle-free installation.
                              
                              Whether you're looking to update a room or completely transform your home, now is the perfect time to shop. Hurry, these deals won't last forever!
                              
                              
                          </p>
                        </div>
                         
                      </div>
                  </div>
            </div>
            <div class="customize-shape"><img src="{{asset('frontend/img/shape/customize_shape.png') }}" alt=""></div>
        </section>
        <!-- customize-area-end -->
        <!-- services-area -->
        {{-- <section class="services-area services-bg pt-115 pb-70" data-background="img/bg/services_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title white-title text-center mb-55">
                            <h2>Customer service, whatever Your Needs</h2>
                            <p>Customer review is a review of a product or service made</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="single-services mb-50">
                            <div class="services-icon mb-30">
                                <img src="{{asset('frontend/img/icon/services_icon01.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <h4>Customer Support</h4>
                                <p>Market marketplace that location where people regular purchase and provisins. written or spoken</p>
                                <a href="#" class="btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.4s">
                        <div class="single-services mb-50">
                            <div class="services-icon mb-30">
                                <img src="{{asset('frontend/img/icon/services_icon02.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <h4>eCommerce Support</h4>
                                <p>Market marketplace that location where people regular purchase and provisins. written or spoken</p>
                                <a href="#" class="btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.6s">
                        <div class="single-services mb-50">
                            <div class="services-icon mb-30">
                                <img src="{{asset('frontend/img/icon/services_icon03.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <h4>Reduce your search time</h4>
                                <p>Market marketplace that location where people regular purchase and provisins. written or spoken</p>
                                <a href="#" class="btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInLeft" data-wow-delay="0.8s">
                        <div class="single-services mb-50">
                            <div class="services-icon mb-30">
                                <img src="{{asset('frontend/img/icon/services_icon04.png') }}" alt="img">
                            </div>
                            <div class="services-content">
                                <h4>Sell your digital products</h4>
                                <p>Market marketplace that location where people regular purchase and provisins. written or spoken</p>
                                <a href="#" class="btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- services-area-end -->
        <!-- pricing-area -->
        {{-- <section class="pricing-area pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-55">
                            <h2>Strategy Subscribe Plans</h2>
                            <p>Market or marketplace is location where people regularly purchase</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-wrap pl-80 pr-80">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing text-center mb-30">
                                <div class="pricing-head mb-30">
                                    <div class="pricing-icon mb-15">
                                        <img src="{{asset('frontend/img/icon/pricing_icon01.png') }}" alt="img">
                                    </div>
                                    <h5>Basic Limited</h5>
                                    <span>Free plan</span>
                                    <p>Subscribe Best Plans</p>
                                    <div class="price-count">
                                        <h4>Free License</h4>
                                    </div>
                                </div>
                                <div class="pricing-list mb-30">
                                    <ul>
                                        <li>Choose any single theme</li>
                                        <li>5 WordPress Theme</li>
                                        <li>1 year to support & updates</li>
                                        <li>20% Future Purchases</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Buy Now<i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing active text-center mb-30">
                                <div class="pricing-head mb-30">
                                    <div class="pricing-icon mb-15">
                                        <img src="{{asset('frontend/img/icon/pricing_icon02.png') }}" alt="img">
                                    </div>
                                    <h5>Business Limited</h5>
                                    <span>monthly</span>
                                    <p>Subscribe Best Plans</p>
                                    <div class="price-count">
                                        <h4>Yearly License <span>- $119</span></h4>
                                    </div>
                                </div>
                                <div class="pricing-list mb-30">
                                    <ul>
                                        <li>Choose any single theme</li>
                                        <li>5 WordPress Theme</li>
                                        <li>1 year to support & updates</li>
                                        <li>20% Future Purchases</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Buy Now<i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing text-center mb-30">
                                <div class="pricing-head mb-30">
                                    <div class="pricing-icon mb-15">
                                        <img src="{{asset('frontend/img/icon/pricing_icon03.png') }}" alt="img">
                                    </div>
                                    <h5>Basic Limited</h5>
                                    <span>Yearly plan</span>
                                    <p>Subscribe Best Plans</p>
                                    <div class="price-count">
                                        <h4>Yearly License <span>- $219</span></h4>
                                    </div>
                                </div>
                                <div class="pricing-list mb-30">
                                    <ul>
                                        <li>Choose any single theme</li>
                                        <li>5 WordPress Theme</li>
                                        <li>1 year to support & updates</li>
                                        <li>20% Future Purchases</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Buy Now<i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- pricing-area-end -->
        <!-- testimonial-area -->
        {{-- <section class="testimonial gray-bg pt-115 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-55">
                            <h2>Feedback From Customers</h2>
                            <p>Customer review is a review of a product or service made by a customer who has purchased</p>
                        </div>
                    </div>
                </div>
                <div class="s-testimonial-wrap">
                    <div class="row testimonial-active">
                        <div class="col-xl-4">
                            <div class="single-testimonial s-single-testimonial mb-50 text-center">
                                <div class="t-avatar-img">
                                    <img src="{{asset('frontend/img/images/s_testi_avatar01.png') }}" alt="img">
                                </div>
                                <div class="testi-content">
                                    <p>“Orem Ipsum is simply dummy text the printing and typesetting industry sum has been the industry”</p>
                                    <div class="t-avatar-info">
                                        <h4>Palleam Alexander</h4>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-testimonial s-single-testimonial mb-50 text-center">
                                <div class="t-avatar-img">
                                    <img src="{{asset('frontend/img/images/s_testi_avatar02.png') }}" alt="img">
                                </div>
                                <div class="testi-content">
                                    <p>“Orem Ipsum is simply dummy text the printing and typesetting industry sum has been the industry”</p>
                                    <div class="t-avatar-info">
                                        <h4>Emaley Mcculloch</h4>
                                        <span>Public Relations</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-testimonial s-single-testimonial mb-50 text-center">
                                <div class="t-avatar-img">
                                    <img src="{{asset('frontend/img/images/s_testi_avatar03.png') }}" alt="img">
                                </div>
                                <div class="testi-content">
                                    <p>“Orem Ipsum is simply dummy text the printing and typesetting industry sum has been the industry”</p>
                                    <div class="t-avatar-info">
                                        <h4>Annaly Satson</h4>
                                        <span>CEO Sweep</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-testimonial s-single-testimonial mb-50 text-center">
                                <div class="t-avatar-img">
                                    <img src="{{asset('frontend/img/images/s_testi_avatar02.png') }}" alt="img">
                                </div>
                                <div class="testi-content">
                                    <p>“Orem Ipsum is simply dummy text the printing and typesetting industry sum has been the industry”</p>
                                    <div class="t-avatar-info">
                                        <h4>Palleam Alexander</h4>
                                        <span>UI Designer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- testimonial-area-end -->
        <!-- blog-area -->
        {{-- <section class="blog-area blog-bg pt-115 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-55">
                            <h2>Latest News</h2>
                            <p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                            since</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog_thumb01.jpg') }}" alt="img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="bc-top-wrap fix mb-25">
                                    <div class="b-post-date">
                                        <h6>19</h6>
                                        <span>Aug, 2019</span>
                                    </div>
                                    <div class="b-top-content fix">
                                        <h5><a href="#">Global Marketplace Market</a></h5>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="far fa-user"></i>Admin</a></li>
                                                <li><i class="far fa-comments"></i>19</li>
                                                <li><i class="far fa-heart"></i>457</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>Simply dummy textht the prihntig and tyesetting industry. Lorem Ipsum has been.</p>
                                <a href="#">Read More <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog_thumb02.jpg') }}" alt="img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="bc-top-wrap fix mb-25">
                                    <div class="b-post-date">
                                        <h6>19</h6>
                                        <span>Aug, 2019</span>
                                    </div>
                                    <div class="b-top-content fix">
                                        <h5><a href="#">Global Marketplace Market</a></h5>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="far fa-user"></i>Admin</a></li>
                                                <li><i class="far fa-comments"></i>19</li>
                                                <li><i class="far fa-heart"></i>457</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>Simply dummy textht the prihntig and tyesetting industry. Lorem Ipsum has been.</p>
                                <a href="#">Read More <span>+</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-blog-post mb-30">
                            <div class="blog-thumb">
                                <a href="#"><img src="{{asset('frontend/img/blog/blog_thumb03.jpg') }}" alt="img"></a>
                            </div>
                            <div class="blog-content">
                                <div class="bc-top-wrap fix mb-25">
                                    <div class="b-post-date">
                                        <h6>19</h6>
                                        <span>Aug, 2019</span>
                                    </div>
                                    <div class="b-top-content fix">
                                        <h5><a href="#">Global Marketplace Market</a></h5>
                                        <div class="blog-meta">
                                            <ul>
                                                <li><a href="#"><i class="far fa-user"></i>Admin</a></li>
                                                <li><i class="far fa-comments"></i>19</li>
                                                <li><i class="far fa-heart"></i>457</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <p>Simply dummy textht the prihntig and tyesetting industry. Lorem Ipsum has been.</p>
                                <a href="#">Read More <span>+</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- blog-area-end -->
    </main>
    <!-- main-area-end -->

    @endsection