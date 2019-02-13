<?php include 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<!-- head -->
		<title>OWL Internet - Reseller Hosting</title>
		<!-- include Depedencies -->
    <?php include 'includes/common-header.php'; ?>
		<!-- /.include Depedencies and nav-->


		<!-- CONTENTS -->
    <div class="header shared-hosting-header">
      <video class="header-video-bg" src="assets/images/movies/coodiv-vid.mp4" loop autoplay poster="assets/images/movies/fallback.jpg"></video>
      <div class="video-overlay"></div>
      <?php include 'includes/nav.php'; ?>
      <div class="container" style="margin: 0px auto">
        <div class="col-md-6">
          <img class="img-responsive" src="assets/images/header/map-servers.png" alt="">
        </div>
        <div class="col-md-6">
          <h1><b>Premium</b> SSD Reseller Hosting<br>
          from $4.99 a month</h1>
          <div class="call-to-action">
            <a class="ybtn ybtn-shadow ybtn-green" href="" id="get_support"></a>
            <a class="ybtn ybtn-shadow ybtn-white smooth-scroll" href="#reseller-plans">Get Started</a>
          </div>
        </div>
      </div>
    </div>
    <div class="host-plans-container" id="reseller-plans"><!-- pricing-section -->
        <div class="container pricing-section ht-prf">
            <div class="row-flex justify-content-center">
                <h5 class="host-plans-title-non-index">best plans for your own hosting company <span>let's find your plan together</span></h5>
                <div class="col-md-3 col-sm-6 col-xs-12 price-card">
                    <div class="hosting-plan-details">
                        <img src="assets/images/icons/pricing/mercury.svg" alt="" />
                        <h5>Mercury <span>Great to start</span></h5>
                        <span class="pricing-amount"><b>$</b><?php echo $boat_m ?><i>/ Month</i></span>

                        <p><span>50gb</span> space</p>
                        <p><span>unlimited</span> bandwidth</p>
                        <p><span>free</span> domain</p>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>order now</span></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 price-card">
                    <div class="hosting-plan-details">
                        <img src="assets/images/icons/pricing/earth.svg" alt="" />
                        <h5>Earth<span>The valuepack</span></h5>
                        <span class="pricing-amount"><b>$</b><?php echo $yacht_m; ?><i>/ Month</i></span>

                        <p><span>50gb</span> space</p>
                        <p><span>unlimited</span> bandwidth</p>
                        <p><span>free</span> domain</p>
                        <a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i> <span>order now</span></a>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 price-card">
                    <div class="hosting-plan-details">
                        <img src="assets/images/icons/pricing/jupiter.svg" alt="" />
                        <h5>Jupiter <span>Unlimited possibilities</span></h5>
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
  <div class="our-services nowservicenonindex">
            <div class="container">
              <h5 style="padding-bottom:80px;" class="host-plans-title-non-index">
                what are we offering ?
                <span>Here's a Short List of Features</span>
              </h5>
                <div class="row-flex justify-content-center">
                  <div class="col-md-3">
                      <div class="box-service orng-box-icon">
                          <i class="fas fa-cogs"></i>
                          <h6>cPanel&reg;/WHM&reg;</h6>
                          <p>Easy to use control panel to manage your clients (WHM) and websites (cPanel)</p>
                      </div>
                  </div>
                  <div class="col-md-3">
                      <div class="box-service orgwani-box-icon">
                          <i class="fas fa-infinity"></i>
                          <h6>Unlimited accounts</h6>
                          <p>Create and host unlimited cPanel accounts / websites under your reseller. </p>
                      </div>
                  </div>
                    <div class="col-md-3">
                        <div class="box-service lmn-box-icon">
                            <i class="fas fa-lock"></i>
                            <h6>Free SSL certificates</h6>
                            <p>Free Comodo SSL certificates for all accounts. Isued and renewed autometically.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-service sbt-box-icon">
                            <i class="far fa-clock"></i>
                            <h6>24x7 Live support</h6>
                            <p>Our 24x7 live support team is always ready to help you with any kind of issues.</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="box-service orgwani-box-icon">
                            <i class="fas fa-bolt"></i>
                            <h6>Gigabit uplink</h6>
                            <p>All servers has 1 GBPS dedicated ports and uplinks making servers blazing fast.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-service sbt-box-icon">
                            <i class="fas fa-hdd"></i>
                            <h6>SSD storage</h6>
                            <p>Samsung PRO enterprise SSD's powered server gives you the raw performence you need</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box-service lgt-box-icon">
                            <i class="fas fa-undo-alt"></i>
                            <h6>Daily Backups</h6>
                            <p>All account's data get daily backed up. So you dont loose your data ever again</p>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="box-service lmn-box-icon">
                            <i class="fas fa-archive"></i>
                            <h6>Softaculous</h6>
                            <p>tnstall 300+ applications (WordPress, Joomla, Magento etc.) with one click.</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
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
