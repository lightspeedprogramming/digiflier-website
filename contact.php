<?php
    $title = "Contact Us || Xyz";
?>

<?php
    include("header.php");
?>

    <!-- Banner -->
    <section>
        <div class="main-slider swiper-container" style="max-height: 400px;">
            <div class="swiper-wrapper">
                <!-- Single slide -->
                <div class="swiper-slide position-relative">
                    <img src="img/contact-us.jpg" alt="" class="img-responsive img-fluid" width="100%">
                    <div class="slide-content container" >
                        <div class="row align-items-center" style="height: 427px;">
                            <div class="col-xl-12 col-lg-12" style="text-align: center">
                                <div class="slide-content-inner pb-120">
                                    <h2 style="color: #ff007f">FAST & EASY</h2>
                                    <h3 style="color:#76d621; font-weight: 300px;">Don’t Suffer The Buffer Speeds Up to 1 Gbps with Unlimited Data</h3>
                                    <!--<a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>-->
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

    <!-- Contacts -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-contacts-widget-wrapper light-bg d-flex align-items-center" data-animate="fadeInUp" data-delay=".1">
                        <!-- Contact Info -->
                        <div class="page-contacts-widget">
                            <h3 class="h4">Contact Us</h3>
                            <div class="contact-widget-content">
                                
                                <ul class="list-unstyled">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <a href="tel:+1234567890">(+x) xxx-xxxx-xxx</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <a href="mailto:serviney.demo@fakemail.com">contact@domain.com</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>xyz/x xyz Bazar, xyz, xyz-0000, NY</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- Contact Form -->
                    <div class="contact-form parsley-validate-wrap mt-60" data-animate="fadeInUp" data-delay=".4">
                        <h3 class="bordered-title">Get In Touch</h3>
                        <div class="form-response"></div>
                        <form method="post" action="http://themelooks.net/demo/serviney/html/preview/sendmail.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="name" class="theme-input-style" placeholder="Your Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="email" name="email" class="theme-input-style" placeholder="E-mail address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="phone" class="theme-input-style" placeholder="Telephone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-field">
                                        <input type="text" name="subject" class="theme-input-style" placeholder="Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-field">
                                <textarea name="message" class="theme-input-style" placeholder="Write your message" required></textarea>
                            </div>
                            <button type="submit" class="btn">Send Message</button>
                        </form>
                    </div>
                    <!-- End of Contact Form -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of Contacts -->
<?php
    include 'footer.php';
?>