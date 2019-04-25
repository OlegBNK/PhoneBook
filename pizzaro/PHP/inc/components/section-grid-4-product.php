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
		)
	);
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
    $column=4;
	$loop = 0;
?>
<div class="columns-<?php echo $column; ?>">
    <ul class="products">
		<?php foreach($products as $product):
			shuffle($products);

			$classes = '';
			if ( $loop === 0 || $loop % $column === 0 ) {
				$classes = 'first';
			}
			if ( ( $loop + 1 ) % $column === 0 ) {
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
