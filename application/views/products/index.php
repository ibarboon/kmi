<div class="contact_page">
	<section class="subpage-banner shop-detail-fullwidth-banner">
		<div class="container">
			<div class="row header-group">
				<div class="col-sm-8 col-sm-12">
					<h1><?php echo $product_type_name; ?></h1>
				</div>
				<div class="col-xs-4 hidden-xs"></div>		
			</div>
		</div>	
	</section>	
</div>
<div class="dt-shop-widgets">
	<div class="container">
		<?php foreach($product_type_list as $product_type) { ?>
			<div class="section-head row no-description">
				<header class="col col-sm-12 centered">
					<section>
						<h2><?php echo $product_type['product_type_name_th']; ?></h2>
					</section>
					<hr>
				</header>
			</div>
			<div class="row">
				<?php foreach($product_type['product_list'] as $product) { ?>
					<div class="col-md-3 col-sm-6">
						<div class="list-item">
							<div class="row">
								<div class="col-xs-5">
									<a href="shop_detail_product_fullwidth.html"><img alt="" src="<?php echo base_url('/assets/images/products/'.$product['product_image']); ?>" class="img-responsive"></a>
								</div>
								<div class="col-xs-7">
									<div class="product-title"><a href="<?php echo site_url($current_lang.'/product-detail/'.$product['row_id']); ?>"><?php echo $product['product_name']	; ?></a></div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		<?php } ?>
	</div>
</div>