<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <x-header/>
    
        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="icon-fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- page-title -->
        <section class="page__title p_relative">
            <div class="bg-layer" style="background-image:url(assets/images/resource/page-title-bg.jpg)"></div>
            <div class="auto-container">
                <div class="content__box p_relative">
                    <ul class="bread__crumb">
                        <li><a href="index.html">Home </a></li>
                        <li> <span> -</span>Contact </li>
                    </ul>
                    <h1 class="title">Contact</h1>
                </div>
            </div>
        </section>
        <!-- page-title end-->

        <!-- contact-page -->
        <section class="contact__page p_relative see__pad">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-ms-12">
                        <div class="contact__left">
                            <figure>
                                <img src="assets/images/resource/contact.jpg" alt="">
                            </figure>
                            <h4>Contact Information</h4>
                            <div class="contact__info">
                                <div class="contact__block">
                                    <div class="icon">
                                        <i class="icon-19"></i>
                                    </div>
                                    <div class="contact__text">
                                        <a href="tell:3025550107">(302) 555-0107</a> <br>
                                        <a href="tell:3025550107">(207) 555-0119</a>
                                    </div>
                                </div>
                                <div class="contact__block">
                                    <div class="icon two">
                                        <i class="icon-20"></i>
                                    </div>
                                    <div class="contact__text">
                                        <a href="mailto:willie.jennings@example.com">willie.jennings@example.com</a> <br>
                                        <a href="mailto:tranthuy.nute@gmail.com">tranthuy.nute@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="contact__right">
                            <div class="form__title">
                                <div class="title__data">
                                    <div class="sub__title">
                                        <h4>Contact Us</h4>
                                    </div>
                                    <div class="title">
                                        <h2>Get a Free Quote</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inner">
                                <form method="post" action="contact.php" class="default-form"> 
                                    <div class="row clearfix">
                                        <div class="col-xl-6 form-group">
                                            <input type="name" name="name" placeholder="Your Name *" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 form-group">
                                            <input type="email" name="email" placeholder="Your Email *" required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 form-group">
                                            <input type="text" name="subject" placeholder="Your Subject " required="">
                                        </div>
                                        <div class="col-xl-6 col-lg-12 form-group">
                                            <input type="text" name="phone" placeholder="Your Phone " required="">
                                        </div>
                                        <div class="ccol-xl-6 col-lg-12 form-group">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="col-xl-12 form-group message-btn btn-box">
                                            <button class="theme-btn theme-btn-one" type="submit" name="submit-form">Send your Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-page end-->

        <!-- google-map -->
        <div class="google__map">
            <figure>
                <img src="assets/images/resource/map.jpg" alt="">
            </figure>
        </div>
        <!-- google-map -->
 <x-footer/>   
</body>
</html>