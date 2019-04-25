<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	if($page=='home-v2') {
		$column=4;
		$item=4;
	} else {
		$column=3;
		$item=6;
	}
?>

<?php
	$products = array(
		array(
			'product_name' => 'Wireless Audio System Multiroom 360',
			'productImageURL' => 'assets/images/products/p1.jpg',
            'size_price' => array(
                array(
                    'size' => '22 cm',
                    'price' => '19'
                ),
                array(
                    'size' => '29 cm',
                    'price' => '25'
                )
            ),
		),
		array(
			'product_name' => 'Tablet Red EliteBook  Revolve 810 G2',
			'productImageURL' => 'assets/images/products/p2.jpg',
            'size_price' => array(
                array(
                    'size' => '22 cm',
                    'price' => '19'
                ),
                array(
                    'size' => '29 cm',
                    'price' => '25'
                )
            ),
		),
		array(
			'product_name' => 'White Solo 2 Wireless',
			'productImageURL' => 'assets/images/products/p3.jpg',
            'size_price' => array(
                array(
                    'size' => '22 cm',
                    'price' => '19'
                ),
                array(
                    'size' => '29 cm',
                    'price' => '25'
                )
            ),
		),
		array(
			'product_name' => 'Smartphone 6S 32GB LTE',
			'product_category' => 'Smartphones',
			'productImageURL' => 'assets/images/products/p4.jpg',
            'size_price' => array(
                array(
                    'size' => '22 cm',
                    'price' => '19'
                ),
                array(
                    'size' => '29 cm',
                    'price' => '25'
                )
            ),
		),
		array(
			'product_name' => 'Purple NX Mini F1 aparat  SMART NX',
			'productImageURL' => 'assets/images/products/p5.jpg',
            'size_price' => array(
                array(
                    'size' => '22 cm',
                    'price' => '19'
                ),
                array(
                    'size' => '29 cm',
                    'price' => '25'
                )
            ),
		),
		array(
			'product_name' => 'Full Color LaserJet Pro  M452dn',
			'productImageURL' => 'assets/images/products/p6.jpg',
            'size_price' => array(
                array(
                    'size' => '22 cm',
                    'price' => '19'
                ),
                array(
                    'size' => '29 cm',
                    'price' => '25'
                )
            ),
		)
	);
?>

<div class="columns-<?php echo $column; ?>">
    <ul class="products">
		<?php foreach($products as $product):
			shuffle($products);
		?>

		<?php
			if ( empty( $loop ) ) {
				$loop = 0;
			}
			$loop++;
			$classes = '';
			if ( 0 === ( $loop - 1 ) % $column || 1 === $column ) {
				$classes = 'first';
			}
			if ( 0 === $loop % $column ) {
				$classes = 'last';
			}
		?>

		<li class="product <?php echo $classes; ?>">
			<?php display_product($product) ; ?>
		</li><!-- /.products -->
		<?php endforeach;?>
	</ul>
</div>
