		<section class="bottom_section">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 about-us">
						<div class="row">
							<div class="section-head">
								<header class="col col-sm-12 centered">
									<h2>About KMI</h2>
									<hr>
								</header>
							</div>	
						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center">
									<h1><img src="<?php echo base_url('/assets/images/krypton_logo_white.png'); ?>" alt="" />&nbsp;KMI</h1>
								</div>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.It has survived not only
		 five centuries, but also the leap into... <a href="blog_classic_right_sidebar.html" title=""><i class="icon-right-4"></i></a></p>
								<ul class="list-inline social">
									<li><a class="icon-facebook" href="#"></a></li>
									<li><a class="icon-twitter" href="#"></a></li>
									<li><a class="icon-rss" href="#"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<footer>
			<section class="container footer-section">
				<div class="col-lg-5 col-xs-12">
					<p>&copy;2014 KMI All right reserved.</p>
				</div>
				<div class="col-lg-7 footer-menu">
					<ul class="nav nav-pills">
						<?php
							$nav_array = array('home' => 'Home', 'about' => 'About Us', 'contact' => 'Contact Us');
							foreach($nav_array as $key => $value):
						?>
						<li>
							<a href="<?php echo base_url($current_language.'/'.$key); ?>" title="<?php echo $value; ?>" <?php echo ($current_view == $key)? 'class="active"': ''; ?>><?php echo $value; ?></a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
			<section class="ss-style-doublediagonal" data-type="background" data-speed="10"></section>
		</footer>
		<div class="md-overlay"></div>
		<div class="jquery-media-detect"></div>
	</body>
</html>