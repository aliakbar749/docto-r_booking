@extends('layouts.master')
@section('home_content')
        <!-- Content -->
        <div class="page-content">
            <!--Banner-->
            <div class="aon-page-benner-area">
              <div class="aon-page-banner-row">
                <div class="aon-page-benner-overlay"></div>
                <div class="sf-banner-heading-wrap">
                  <div class="sf-banner-heading-area">
                    <div class="sf-banner-heading-large">Contact us</div>
                    <div class="sf-banner-breadcrumbs-nav">
                      <ul class="list-inline">
                        <li><a href="https://aonetheme.com/latest-service-finder/"> Home </a></li>
                        <li><a href="https://aonetheme.com/latest-service-finder/providers-category/packers-and-movers/">Contact</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>            
            <!--Banner-->

            <!-- Contact Us-->
            <div class="aon-contact2-area p-t80 p-b50">
              <div class="container">

                <div class="section-content">
                      
                    <div class="row">
                        <!--Left Section-->
                        <div class="col-lg-6 aon-contact-media">
                        
                            <div class="aon-contact-1-pic">
                                <img src="images/contact-pic1.png" alt="">
                            </div>
                            <div class="aon-contact-1-bg">
                                <span class="star-two animte-pluse2">+</span>
                                <span class="star-three animte-pluse2">+</span>
                                <span class="star-four animte-pluse">+</span>
                            </div>
                            
                        </div>
                        <!--Right Section-->
                        <div class="col-lg-6">
                            <div class="aon-contact-1-info-wrap">

                                <div class="sf-contact-1-info-box">
                                    <div class="sf-contact-1-icon">
                                        <span><img src="images/contact-us/1.png" alt=""></span>
                                    </div>
                                    <div class="sf-contact-1-info">
                                        <h4 class="sf-title">Mailing Address</h4>
                                        <p>121 King Street, Melbourne Victoria 3000 Australia</p>
                                    </div>
                                </div>

                                <div class="sf-contact-1-info-box">
                                    <div class="sf-contact-1-icon">
                                        <span><img src="images/contact-us/2.png" alt=""></span>
                                    </div>
                                    <div class="sf-contact-1-info">
                                        <h4 class="sf-title">Email Info</h4>
                                        <p>info@brandcoin.com</p><p>support@brandcoin.com</p>
                                    </div>
                                </div>

                                <div class="sf-contact-1-info-box">
                                    <div class="sf-contact-1-icon">
                                        <span><img src="images/contact-us/3.png" alt=""></span>
                                    </div>
                                    <div class="sf-contact-1-info">
                                        <h4 class="sf-title">Phone Number</h4>
                                        <p>0800-123456 (24/7 Support Line)</p>
                                        <p>0800-123654</p>
                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>    
                             
                </div>
        
              </div>
            </div>
              
            <!-- Contact Us-->
            <div class="section-full p-t150">
                <div class="container">
                  
                    <div class="sf-contact-form2-wrap">
                        <div class="sf-con-form-title text-center">
                            <h2 class="m-b30">Contact Information</h2>
                        </div>
                        <!--Contact Form-->  
                        <div class="sf-contact-form2 shadow">
                            <form class="contact-form" method="post">
                                <div class="row">
                                    
                                    <!-- COLUMNS 1 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="fullname" placeholder="Name" class="form-control" required="">
                                        </div>
                                    </div>
                                    
                                    <!-- COLUMNS 2 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="email" placeholder="Email" class="form-control" required="">
                                        </div>
                                    </div>
                                    <!-- COLUMNS 3 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" class="form-control">
                                        </div>
                                    </div>
                                    <!-- COLUMNS 4 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" class="form-control" required="">
                                        </div>
                                    </div>
    
                                    <!-- COLUMNS 5 -->
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Message" class="form-control" rows="4" required=""></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">

                                        <div class="g-recaptcha" data-sitekey="6LfcCr0eAAAAAN2P-3cJJC1StgxbUWvwELbMVjnp"></div>
    
                                    </div>
    
                                </div>
                                <div class="sf-contact-submit-btn text-center">
                                    <button class="site-button" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!--Contact Form End-->
                    </div>  
          
                </div>
                <div class="sf-map-wrap grayscle-area">
                    <iframe src="https://maps.google.com/maps?width=100%25&height=600&hl=en&q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&t=&z=14&ie=UTF8&iwloc=B&output=embed"></iframe>
                </div>
              </div>
                
            </div>
        <!-- Content END-->
        @endsection