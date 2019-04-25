<?php
	$products = array(
        array(
			'product_name' => 'Trio Cheese',
			'productImageURL' => 'assets/images/products/p9.jpg',
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
			'product_name' => 'Trio Cheese',
			'productImageURL' => 'assets/images/products/p10.jpg',
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
			'product_name' => 'Trio Cheese',
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
			'product_name' => 'Trio Cheese',
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
			'product_name' => 'Trio Cheese',
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
			'product_name' => 'Trio Cheese',
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
		)
	);
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column=6;
?>
<div class="columns-<?php echo $column; ?>">
    <ul class="products">
		<?php foreach($products as $product):
			shuffle($products);

			if ( empty( $loop ) ) {
				$loop = 0;
			}
			$classes = '';
			if ( 0 === ( $loop - 3 ) % $column || 3 === $column ) {
				$classes = 'first';
			}
			if ( 0 === $loop % $column ) {
				$classes = 'last';
			}
            $loop++;
    		?>

    		<li class="product <?php echo $classes; ?>">
    			<?php display_product($product) ; ?>
    		</li><!-- /.products -->
		<?php endforeach;?>
	</ul>
</div>
