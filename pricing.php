

<?php
    $title=" Pricing || Xyz ";
    include("header.php");
?>

     <!-- Banner -->
    <section>
        <div class="main-slider swiper-container" style="max-height: 400px;">
            <div class="swiper-wrapper">
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="img/pricing-banner.jpg" data-rjs="2" alt="" class="img-responsive">
                    <div class="slide-content container" >
                        <div class="row align-items-center" style="height: 427px;">
                            <div class="col-xl-12 col-lg-12" style="text-align: center">
                                <div class="slide-content-inner">
                                    <h2>PRICING TABLES</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Single slide -->
            </div>
            <!-- Banner Pagination -->
            <!--<div class="swiper-pagination main-slider-pagination"></div>-->
        </div>
    </section>
    <!-- End of Banner -->

    <!-- Packages Wrap -->
    <section class="pt-120 pb-55">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center">
                        <h2><font style="font-weight: 100;">SEO</font> <strong>PRICING PACKAGES</strong></h2>
                    </div>
                </div>
            </div>
            
            <!-- Packages -->
            <div class="row pb-90">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-package text-center">
                        <h4>Basic</h4>
                        <span style="font-size: 23px;color: green;">$450.00/MO</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>15 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>01 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>12.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <!--
                <div class="col-lg-3 col-sm-6">
                    <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                        <span class="pupular-pack">Most popular package</span>
                        <h4>Family Pack</h4>
                        <span>for family user</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>25 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>02 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>24.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>-->
                <div class="col-lg-4 col-sm-6">
                    <div class="single-package text-center">
                        <h4>Standard</h4>
                        <span style="font-size: 23px;color: green;">$850.00/MO</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>30 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>03 year</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>49.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-package text-center">
                        <h4>Professional</h4>
                        <span style="font-size: 23px;color: green;">$1499.00/MO</span>
                        <hr>
                        <ul class="list-unstyled">
                            <li>Free installation</li>
                            <li>Up to <span>39 Mpbs</span> download speed</li>
                            <li>Unlimited data usages</li>
                            <li><span>Unlimited</span> pricing lock guarantee</li>
                            <li>Unlimited bandwidth</li>
                        </ul>
                        <p><sup>$</sup>79.50 <span>/Monthly</span></p>
                        <a href="#" class="btn">Order This Plan</a>
                    </div>
                </div>
            </div>
            <!-- End of Packages -->

            <!-- Packages Includes -->
            <!--<div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                        <h2>All Plans Included</h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                        <div class="single-feature-img">
                            <img src="img/icons/ftp.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Own FTP Server</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".2">
                        <div class="single-feature-img">
                            <img src="img/icons/upgrade.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Upgrade or Downgrade</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".35">
                        <div class="single-feature-img">
                            <img src="img/icons/data.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Hard Data Limit</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".5">
                        <div class="single-feature-img">
                            <img src="img/icons/lock.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Lock in Low Rates</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".65">
                        <div class="single-feature-img">
                            <img src="img/icons/cloud.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>No Video Streaming</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".8">
                        <div class="single-feature-img">
                            <img src="img/icons/access.svg" alt="" class="svg">
                        </div>
                        <div class="single-feature-content">
                            <h4>Access to All Website</h4>
                            <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                        </div>
                    </div>
                </div>
            </div>-->
            <!-- End of Packages Includes -->
        </div>
    </section>
    <!-- End of Packages Wrap -->

    <!--  Pricing Table  -->
    <section class="pt-30 pb-90">
        <div class="container text-center">

            <div class="row">
                <div class="col-md-12 text-left">
                    <h2 class="section-title"><font style="font-weight: 100;">SEO</font> <strong>PRICING TABLES</strong></h2>
                    <p>
                        Listed below are our Standard SEO prices and service packages. One of these options may suit your business goals and budget and offer you a great return on your marketing investment. However, we do offer custom online marketing campaigns and requests. If you believe none of these plans fit the needs of your organization, please contact us now for a personalized marketing solution that fits your needs.
                    </p>
                </div>
            </div>
            <div class="row header mt-50" style="background-color: #77da55;">
                <div class="col-md-3">
                    <h4 class="">Features</h4>
                </div>
                <div class="col-md-3">
                    <h4>Basic</h4>
                </div>
                <div class="col-md-3">
                    <h4>Standard</h4>
                </div>
                <div class="col-md-3">
                    <h4>
                        Proffessional
                    </h4>
                </div>
            </div>

            <div class="row header" style="background-color: #77da55;">
                <div class="col-md-3">
                    <h4 class="">Price</h4>
                </div>
                <div class="col-md-3">
                    <h4>$400/mo</h4>
                </div>
                <div class="col-md-3">
                    <h4>$800/mo</h4>
                </div>
                <div class="col-md-3">
                    <h4>
                        $1300/mo
                    </h4>
                </div>
            </div>

            <div class="row price-font col-padding row-padding">
                <div class="col-md-3">
                    <h4>Keywords Optimized</h4>
                </div>
                <div class="col-md-3">
                    <h6>5</h6>
                </div>
                <div class="col-md-3">
                    <h6>10</h6>
                </div>
                <div class="col-md-3">
                    <h6>20</h6>
                </div>
            </div>

          <div class="row price-font color-icon row-padding row-light-grey">
                <div class="col-md-3">
                    <h4>Comprehensive On-site Analysis</h4>
                </div>
                <div class="col-md-3">
                    <i  class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="row price-font color-icon row-padding">
                <div class="col-md-3">
                    <h4>HTML Optimization</h4>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="row price-font color-icon row-padding row-light-grey">
                <div class="col-md-3">
                    <h4>Robots.txt Creation</h4>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="row price-font color-icon row-padding">
                <div class="col-md-3">
                    <h4>Sitemap.xml Creation</h4>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="row price-font color-icon row-padding row-light-grey">
                <div class="col-md-3">
                    <h4>Internal Links Optimization</h4>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
                <div class="col-md-3">
                    <i class="fas fa-check"></i>
                </div>
            </div>

            <div class="row price-font color-icon row-padding ">
                <div class="col-md-3">
                    <h4>Call us for more info :</h4>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-sm magicmore">BUY</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-sm magicmore">BUY</a>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn btn-sm magicmore">BUY</a>
                </div>
            </div>
        </div>
    </section>
    <!--  # Pricing Table  -->

<?php
    include("footer.php");
?>