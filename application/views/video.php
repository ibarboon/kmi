<div class="blog-masonry-container blog_classic">
	<section class="subpage-banner blog-classic-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-8 col-sm-12">
					<h1>Our Blog</h1>
					<p>3 Columns Masonry Blog</p>
				</div>
				<div class="col-sm-4 hidden-xs"></div>		
			</div>
		</div>	
	</section>	
	<section class="blog-masonry col-md-12">
		<div class="row">
			<div class="container">
				<div id="blog-masonry" class="col-3">
					<?php for($i = 1; $i <= 9; $i += 1){ ?>
					<div>
						<div class="masonry-item">
							<figure>
								<div class="top-image">
									<img src="<?php echo base_url('/assets/images/latest_01.jpg'); ?>" alt="how to create break fast food delicious"/>
								</div>
								<div class="thumb-image">
									<img src="<?php echo base_url('/assets/images/team_1.jpg'); ?>" alt="thumb image"/>
								</div>
								<figcaption>
									<div class="description">
										<a href="<?php echo site_url('/video/detail/video-name'); ?>" class="post-title">HOW TO CREATE BREAK</a>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, modi libero possimus quos recusandae quibusdam adipisci autem fuga accusantium iste nam culpa expedita nisi inventore.</p>
									</div>
								</figcaption>
							</figure>
							<div class="mini-panel">
								<div class="col-sm-4 col-md-4 col-xs-4"><i class="icon-clock-8"></i>27 Jun</div>
								<div class="col-sm-4 col-md-4 col-xs-4"><i class="icon-chat-inv"></i>13</div>
								<div class="col-sm-4 col-md-4 col-xs-4"><i class="icon-heart-3"></i>16</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
				<!--hr/>
				<div class="row">
					<div class="paging-nav col-xs-12">
						<span class="float-left">
							<span class="paging-inline">
								<a href="#" class="btn-arrow">
									<i class="icon-left-open-big"></i>
								</a> 
							</span>
							<span class="paging-text paging-inline">
								<a href="#">Older Post</a>
							</span>
						</span>
						<span class="float-right paging-disabled">
							<span class="paging-text paging-inline">Newer Post</span> 
							<span class="btn-arrow paging-inline">
								<i class="icon-right-open-big"></i>
							</span>
						</span>
					</div>
				</div-->	
			</div>
		</div>
	</section>
</div>