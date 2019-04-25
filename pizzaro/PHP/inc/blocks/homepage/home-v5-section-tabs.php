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
                <?php
                	$products = array(
                		array(
                			'product_name' => 'Pepperoni Pizza',
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
                			'product_name' => 'Apricot Chicken',
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
                			'product_name' => 'Apricot Chicken',
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
                		),
                        array(
                			'product_name' => 'Apricot Chicken',
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
                		)
                	);
                    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
                    $column=5;
                ?>
                <div class="columns-<?php echo $column; ?>">
                    <ul class="products">
                		<?php foreach($products as $product):
                			shuffle($products);

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
            </div>
		</div>

		<div class="tab-pane active" id="h1-tab-products-2">
            <div class="section-products">
                <?php
                	$products = array(
                		array(
                			'product_name' => 'Pepperoni Pizza',
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
                			'product_name' => 'Apricot Chicken',
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
                		),
                        array(
                			'product_name' => 'Apricot Chicken',
                			'productImageURL' => 'assets/images/products/p7.jpg',
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
                			'product_name' => 'Apricot Chicken',
                			'productImageURL' => 'assets/images/products/p8.jpg',
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
                    $column=5;
                ?>
                <div class="columns-<?php echo $column; ?>">
                    <ul class="products">
                		<?php foreach($products as $product):
                			shuffle($products);

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
            </div>
		</div>

		<div class="tab-pane" id="h1-tab-products-3">
            <div class="section-products">
                <?php
                	$products = array(
                		array(
                			'product_name' => 'Pepperoni Pizza',
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
                			'product_name' => 'Apricot Chicken',
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
                			'product_name' => 'Apricot Chicken',
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
                		),
                        array(
                			'product_name' => 'Apricot Chicken',
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
                		)
                	);
                    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
                    $column=5;
                ?>
                <div class="columns-<?php echo $column; ?>">
                    <ul class="products">
                		<?php foreach($products as $product):
                			shuffle($products);

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
            </div>
		</div><!-- /.panel -->
	</div>
</div>
