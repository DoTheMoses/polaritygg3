<?php function get_header() { ?>

	<header class="header header-black">
		<div class="header-wrapper">
			<div class="container">
				<div class="col-sm-2 col-xs-12 navigation-header">
					<a href="#" class="logo">
						<img src="assets/img/ventcamp_logo.png" alt="VentCamp" width="119" height="17" class="retina-hide">
						<img src="assets/img/ventcamp_logo@2x.png" alt="VentCamp" width="119" height="17" class="retina-show">
					</a>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-controls="navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="col-sm-10 col-xs-12 navigation-container">
					<div id="navigation" class="navbar-collapse collapse">
						<ul class="navigation-list pull-left light-text">
							<li class="navigation-item"><a href="#speakers" class="navigation-link">Speakers</a></li>
							<li class="navigation-item"><a href="#schedule" class="navigation-link">Schedule</a></li>
							<li class="navigation-item"><a href="#prices" class="navigation-link">Prices</a></li>
							<li class="navigation-item"><a href="#gallery" class="navigation-link">Gallery</a></li>
							<li class="navigation-item"><a href="#sponsors" class="navigation-link">Sponsors</a></li>
							<li class="navigation-item"><a href="#contacts" class="navigation-link">Contacts</a></li>
								<li class="navigation-item dropdown">
									<a class="navigation-link dropdown-toggle" data-toggle="dropdown">Elements</a>
									<ul class="dropdown-menu">
										<li class="navigation-item"><a href="elements/contacts.html" class="navigation-link">Advanced Maps</a></li>
										<li class="navigation-item"><a href="elements/buttons.html" class="navigation-link">Buttons</a></li>
										<li class="navigation-item"><a href="elements/content.html" class="navigation-link">Content</a></li>
										<li class="navigation-item"><a href="elements/counters.html" class="navigation-link">Counters</a></li>
										<li class="navigation-item"><a href="elements/countdown.html" class="navigation-link">Countdown</a></li>
										<li class="navigation-item"><a href="elements/call_to_action.html" class="navigation-link">Call to action</a></li>
										<li class="navigation-item"><a href="elements/gallery.html" class="navigation-link">Gallery</a></li>
										<li class="navigation-item"><a href="elements/navigations.html" class="navigation-link">Navigation</a></li>
										<li class="navigation-item"><a href="elements/pricing.html" class="navigation-link">Prices</a></li>
										<li class="navigation-item"><a href="elements/schedule.html" class="navigation-link">Schedule</a></li>
										<li class="navigation-item"><a href="elements/speakers.html" class="navigation-link">Speakers</a></li>
										<li class="navigation-item"><a href="elements/tabs.html" class="navigation-link">Tabs</a></li>
										<li class="navigation-item"><a href="elements/tables.html" class="navigation-link">Tables</a></li>
										<li class="navigation-item"><a href="elements/testimonials.html" class="navigation-link">Testimonials</a></li>
										<li class="navigation-item"><a href="elements/typography.html" class="navigation-link">Typography</a></li>
										<li class="navigation-item"><a href="elements/sponsors.html" class="navigation-link">Sponsors</a></li>
									</ul>
								</li>
						</ul>

						<a href="#" class="pull-right buy-btn">Buy Tickets</a>
					</div>
				</div>
			</div>
		</div>
	</header>

<?php }
