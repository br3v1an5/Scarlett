<!-- nav -->
<nav class="navbar navbar-default" role="navigation">
	<div class="pre-nav">
			<div class="container">
						<div class="row">
							<a class="email-link" href="mailto:#"><i class="fas fa-envelope"></i><span class="hide-small">contact@domain.com</span></a>
							<div class="pull-right">
									<!--select class="select-language" data-width="fit" data-live-search="false">
									    <option data-tokens="English" data-content='<span class="flag-icon flag-icon-us"></span> EN' value="EN">English</option>
											<option data-tokens="Espanol Español Spanish" data-content='<span class="flag-icon flag-icon-mx"></span> ES' value="ES">Español</option>
											<option data-tokens="hindi" data-content='<span class="flag-icon flag-icon-in"></span> HI' value="HI">हिन्दी</option>
											<option data-tokens="Bengali" data-content='<span class="flag-icon flag-icon-bd"></span> BN' value="BN">বাংলা</option>
									</select>
									<select class="select-currency" data-width="fit" data-live-search="false">
									    <option data-tokens="USD" data-content='USD' value="USD">USD</option>
											<option data-tokens="INR" data-content='INR' value="INR">INR</option>
									</select-->
									<a class="email-link hide-small" href="support"><i class="fas fa-question"></i><span>Support</span></a>
									<a class="email-link" href="javascript:void(Tawk_API.toggle())"><i class="fas fa-comments"></i><span>Live Chat</span></a>
									<a class="email-link hide-small" href="#"><i class="fas fa-user"></i><span>Account</span></a>
						</div>
						</div>
			</div>
	</div>
	<div data-spy="affix" data-offset-top="55"><!-- affix-header -->
		<div class="container container-main-nav">
			<div class="navbar-header"><!-- navbar-header -->
				<a class="navbar-brand affix-logo" href="home"><img src="<?php echo $logo; ?>" alt="LOGO"></a>
				<a class="navbar-brand non-affix-logo" href="home"><img src="<?php echo $logo_white; ?>" alt="LOGO"></a>
				<button type="button" class="navbar-toggle x collapsed offcanvas-toggle" data-toggle="offcanvas" data-target="#nav-colpse" aria-expanded="false">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div><!-- # navbar-header -->
			<div class="navbar-offcanvas navbar-offcanvas-touch" id="nav-colpse"><!-- offcanvas-menu -->
						<li class="mobile-header hidden"><h1>Menu</h1></li>
				<div class="nav navbar-center">
					<div class="container">
						<!--li class="dropdown"><a href="home">Home</a></li-->
						<li class="dropdown hosting">
							<a href="#" type="button" class="dropdown-toggle">Hosting <span class="drop-indi drop-tos fas fa-chevron-down" aria-hidden="true"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="web-hosting">
										<img src="assets/images/icons/servers/cloud.svg" alt="shared">
										<h1>Web hosting</h1>
									</a>
								</li>
								<li>
									<a href="wordpress-hosting">
										<img src="assets/images/icons/servers/wordpress.svg" alt="shared">
										<h1>Wordpress hosting</h1>
										</a>
								</li>
								<li>
									<a href="reseller-hosting">
										<img src="assets/images/icons/servers/reseller.svg" alt="shared">
										<h1>Reseller hosting</h1>
										</a>
									</li>
									<li>
										<a href="vps-hosting">
											<img src="assets/images/icons/servers/vps.svg" alt="shared">
											<h1>VPS hosting</h1>
											</a>
										</li>
										<li>
											<a href="dedicated-hostings">
												<img src="assets/images/icons/servers/dedicated.svg" alt="shared">
												<h1>Dedicated hosting</h1>
												</a>
											</li>
							</ul>
						</li>
						<li class="dropdown domains"><a href="#">Domains</a></li>
						<li class="dropdown websites"><a href="#">Hosting Support</a></li>
						<li class="dropdown security">
							<a href="#" type="button" class="dropdown-toggle">Security <span class="drop-indi drop-security fas fa-chevron-down" aria-hidden="true"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="ssl-certificates">
										<img src="assets/images/icons/security/ssl.svg" alt="SSL">
										<h1>SSL Certificates</h1>
									</a>
								</li>
							</ul>
						</li>
						<li class="tos dropdown">
							<a href="#" type="button" class="dropdown-toggle">
							Privacy <span class="drop-indi drop-tos fas fa-chevron-down" aria-hidden="true"></span>
							</a>
							<ul class="dropdown-menu" role="menu">
								<li>
									<a href="terms-of-service">
										<img src="assets/images/icons/legal/tos.svg" alt="shared">
										<h1>Terms of service</h1>
									</a>
								</li>
								<li>
									<a href="privacy-policy">
										<img src="assets/images/icons/legal/privacy.svg" alt="shared">
									<h1>Privacy policy</h1>
									</a>
								</li>
								<li>
									<a href="about">
										<img src="assets/images/icons/legal/about.svg" alt="shared">
									<h1>About us</h1>
									</a>
								</li>
							</ul>
						</li>
						<li class="menu-promo"><a href="offers">Offers <img src="<?php echo $current_promo; ?>" alt="Promo"></a></li>
					</div>
				</div>
				<div class="hidden menu-support-footer">
						<div class="row">
							<div class="col-xs-4">
								<a href="mailto:#"><i class="fas fa-envelope"></i></a>
							</div>
							<div class="col-xs-4">
								<a href="#"><i class="fas fa-user"></i></a>
							</div>
							<div class="col-xs-4">
								<a href="support"><i class="fas fa-question"></i></a>
							</div>
						</div>
				</div> <!-- /.support-bottom -->
			</div><!-- /.navbar-offcanvas -->
		</div><!-- /.container-fluid -->

	</div><!-- # affix -->
</nav><!-- # nav -->
