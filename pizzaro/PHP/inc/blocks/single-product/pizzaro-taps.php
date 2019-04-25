<div class="woocommerce-tabs wc-tabs-wrapper">
	<ul class="nav nav-tabs pizzaro-nav-tabs tabs wc-tabs" >
	
		<li class="nav-item description_tab active">
			<a href="#tab-description" class="active" data-toggle="tab">Description</a>
		</li>
		<li class="nav-item additional_information_tab">
			<a href="#tab-additional_information" data-toggle="tab">Additional Information</a>
		</li>
		<li class="nav-item nutrition_tab">
			<a href="#tab-nutrition" data-toggle="tab">Nutritions</a>
		</li>
		<li class="nav-item reviews_tab">
			<a href="#tab-reviews" data-toggle="tab">Reviews</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane panel active entry-content wc-tab" id="tab-description">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/tab-description.php'; ?>	
		</div>

		<div class="tab-pane in panel entry-content wc-tab" id="tab-additional_information">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/tab-additional_information.php'; ?>	
		</div>

		<div class="tab-pane panel entry-content wc-tab" id="tab-nutrition">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/tab-nutrition.php'; ?>
		</div><!-- /.panel -->

		<div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
			<?php require_once 'inc/blocks/single-product/woocommerce-tabs/tab-reviews.php'; ?>
		</div><!-- /.panel -->
	</div>

</div>