<?php require 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
		<!-- head -->
		<title>OWL Internet - 500 Internal Server Error</title>
		<!-- include Depedencies -->
    <?php require 'includes/common-header.php'; ?>
		<!-- # include Depedencies and nav-->
		<!-- CONTENTS -->
    <div class="header fourofour-header">
      <video class="header-video-bg" src="assets/images/movies/coodiv-vid.mp4" loop autoplay poster="assets/images/movies/fallback.jpg"></video>
      <?php include 'includes/nav.php'; ?>
      <div class="container fourofour-container">
        <div class="row justify-content"> <!-- ROW -->
            <div class="col-12 pagnon-titl-g-host">
                <h5 class="tittle-non-index">this page is <span>not working</span></h5>
                <p class="tittle-non-index-sub">Oh no! Another broken page</p>
                <span class="not-fond-text">500</span>
            </div>
        </div>
      </div>
      <section class="non-index-section"><!-- START SECTION  -->
        <div class="container fourofour-container"><!-- CONTAINER  -->
          <div class="not-found-links">
            <a href="#" onclick="window.history.go(-1);">Go Back</a> | <a href="home">Home</a>
          </div>
        </div><!-- END CONTAINER  -->
      </section>
    </div>
		<!-- # content -->
    <!-- include scripts -->
   	<?php require 'includes/common-footer.php'; ?>
		<!-- # indlude scripts -->
