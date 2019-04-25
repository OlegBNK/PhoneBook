<div class="section-tabs">
	<ul class="nav nav-tabs pizzaro-nav-tabs" >
		<li class="nav-item">
			<a href="#h1-tab-products-1" data-toggle="tab">Wraps</a>
		</li>
		<li class="nav-item active">
			<a href="#h1-tab-products-2" class="active" data-toggle="tab">Pizza Sets</a>
		</li>
		<li class="nav-item">
			<a href="#h1-tab-products-3" data-toggle="tab">Burgers</a>
		</li>
	</ul>

	<div class="tab-content">
		<div class="tab-pane" id="h1-tab-products-1">
            <div class="section-products">
                <div class="woocommerce columns-3">
                    <?php require_once 'inc/components/shop-tab-1-product.php'; ?>
                </div>
            </div>
		</div>

		<div class="tab-pane active" id="h1-tab-products-2">
            <div class="section-products">
                <div class="woocommerce columns-3">
                    <?php require_once 'inc/components/shop-tab-2-product.php'; ?>
                </div>
            </div>
		</div>

		<div class="tab-pane" id="h1-tab-products-3">
            <div class="section-products">
                <div class="woocommerce columns-3">
                    <?php require_once 'inc/components/shop-tab-3-product.php'; ?>
                </div>
            </div>
		</div><!-- /.panel -->
	</div>
</div>
