<?php include 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<!-- head -->
		<title>OWL Internet - Web Hosting</title>
		<!-- include Depedencies -->
    <?php include 'includes/common-header.php'; ?>
		<!-- /.include Depedencies and nav-->


		<!-- CONTENTS -->
    <div class="header shared-hosting-header">
      <video class="header-video-bg" src="assets/images/movies/coodiv-vid.mp4" loop autoplay poster="assets/images/movies/fallback.jpg"></video>
      <div class="video-overlay"></div>
      <?php include 'includes/nav.php'; ?>
      <div class="container" style="margin:2% auto;">
        <div class="col-md-6">
          <img class="img-responsive" src="assets/images/header/server-bg.png" alt="">
        </div>
        <div class="col-md-6">
          <h1><b>Powerful</b> Linux Hosting<br>
          from $1.67 a month</h1>
          <div class="call-to-action">
            <a class="ybtn ybtn-shadow ybtn-green" href="" id="get_support"></a>
            <a class="ybtn ybtn-shadow ybtn-white smooth-scroll" href="#shared-plans">Get Started</a>
          </div>
        </div>
      </div>
    </div>
    <div class="host-plans-container" id="shared-plans"><!-- pricing-section -->
        <div class="container pricing-section ht-prf">
            <div class="row-flex justify-content-center">
                <h5 class="host-plans-title-non-index">best plans for your websites <span>let's find your plan together</span></h5>
                <div class="col-md-3 col-sm-6 col-xs-12 price-card">
                    <div class="hosting-plan-details">
                        <img src="assets/images/icons/pricing/boat.svg" alt="" />
                        <h5>Boat <span>Great to start</span></h5>
                        <span class="pricing-amount"><b>$</b><?php echo $boat_m ?><i>/ Month</i></span>

                        <p><span>50gb</span> space</p>
                        <p><span>unlimited</span> bandwidth</p>
                        <p><span>free</span> domain</p>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>order now</span></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 price-card">
                    <div class="hosting-plan-details">
                        <img src="assets/images/icons/pricing/yacht.svg" alt="" />
                        <h5>Yacht<span>The valuepack</span></h5>
                        <span class="pricing-amount"><b>$</b><?php echo $yacht_m; ?><i>/ Month</i></span>

                        <p><span>50gb</span> space</p>
                        <p><span>unlimited</span> bandwidth</p>
                        <p><span>free</span> domain</p>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>order now</span></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 price-card">
                    <div class="hosting-plan-details">
                        <img src="assets/images/icons/pricing/cruise.svg" alt="" />
                        <h5>Cruise <span>Unlimited possibilities</span></h5>
                        <span class="pricing-amount"><b>$</b><?php echo $cruise_m; ?><i>/ Month</i></span>

                        <p><span>50gb</span> space</p>
                        <p><span>unlimited</span> bandwidth</p>
                        <p><span>free</span> domain</p>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>order now</span></a>
                    </div>
                </div>

            </div>
        </div>
        <div class="pricing-footer-section">
            <div class="container">
                <p><b>looking for Custom plans</b> ?<a href="#">Contact Us</a></p>
            </div>
        </div>
    </div><!-- /.pricing-section -->
    <div class="pertner-section"> <!-- START PERTNER SECTION -->
        <div class="container"> <!-- CONTAINER -->
            <div class="row-flex justify-content-center"> <!-- ROW -->
                <div class="col-md-8">
                    <a data-toggle="tooltip" data-placement="top" title="php" href="#"><img src="assets/images/icons/partner/php.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="MySQL" href="#"><img src="assets/images/icons/partner/MySQL.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="cPanel" href="#"><img src="assets/images/icons/partner/cpanel.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="dell" href="#"><img src="assets/images/icons/partner/dell.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="centOS" href="#"><img src="assets/images/icons/partner/centos.png" alt="png" /></a>
                    <a data-toggle="tooltip" data-placement="top" title="ibm" href="#"><img src="assets/images/icons/partner/ibm.png" alt="png" /></a>
                </div>
            </div> <!-- END ROW -->
        </div> <!-- END CONTAINER -->
    </div> <!-- END PERTNER SECTION -->
    <div class="host-plan-serc-none"><!-- feature-section -->
        <div class="container">
            <div class="row justify-content-center">
                <h5 class="host-plans-title-non-index">Why choose OWL Internet ?<span>Well that depends on you</span><br>we can just show you some features</h5>
                <div class="col-md-3">
                    <a>
                        <img src="assets/images/icons/gears.svg" alt="" />
                        <h5>Easy control panel</h5>
                        <p>Effortlessly manage your web hosting with a powerful and easy to use control panel by cPanel&reg;</p>
                    </a>
                    <a target="_blank" href="https://red.intersite.us:2083/login/?user=demo&pass=cPanelDM0852" class="ybtn ybtn-shadow ybtn-blue">Demo</a>
                </div>
                <div class="col-md-3">
                    <a>
                        <img src="assets/images/icons/security/ssl.svg" alt="" />
                        <h5>Free SSL certificates</h5>
                        <p>Get your websites secured with a Comodo&reg; SSL Certificates at free of cost with no expiry date.</p>
                    </a>
                    <a href="#" class="ybtn ybtn-shadow ybtn-blue">Know more</a>
                </div>
                <div class="col-md-3">
                    <a>
                        <img src="assets/images/icons/clock.svg" alt="" />
                        <h5>24x7 Live support</h5>
                        <p>Our 24x7 live support team is always available to help you with any kind of problems or enquiries.</p>
                    </a>
                    <a href="#" class="ybtn ybtn-shadow ybtn-blue">Get support</a>
                </div>
                <div class="col-md-3">
                    <a>
                        <img src="assets/images/icons/flash.svg" alt="" />
                        <h5>Pure SSD storage</h5>
                        <p>Samsung PRO enterprise SSD drives are being used on our server for more Raw power.</p>
                    </a>
                    <a href="#" class="ybtn ybtn-shadow ybtn-blue">Know more</a>
                </div>
            </div>
        </div>
    </div><!-- /. feature-section -->
    <div class="container">
      <div class="row-flex justify-content-center fhost-ftrue-non-ind">
          <div class="col-md-3">
              <img style="width:100%;" src="assets/images/icons/money-back.svg" alt="" />
          </div>
          <div class="col-md-9">
              <h5 class="xs-align-center">100% No-risk guarantee program</h5>
              <p>Our clients' satisfaction is our #1 priority! That's why each person who signs up with OWL Internet is completely protected by our 100% Risk-Free Guarantee Program. Simply sign up, try our product and if OWL Internet cheap web hosting services won't satisfy your needs - we'll provide you an instant refund. But we're pretty sure that you'll enjoy being part of OWL Internet community.</p>
          </div>
      </div>
    </div>
    <div class="contact-call-to-action">
      <div class="container">
          <h4>Need more information ?</h4><a href="#">Contact US</a>
      </div>
    </div>
		<!-- /.content -->
    <!-- include scripts -->
   	<?php include 'includes/common-footer.php'; ?>
		<!-- /.indlude scripts -->
  </body>
</html>
