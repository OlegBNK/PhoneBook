<div class="section-products-4-1">
    <div class="products-4-1">
        <?php
        	$products = array(
                array(
        			'product_name' => 'Trio Cheese',
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
        			'product_name' => 'Trio Cheese',
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
        		)
        	);
            $page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
            $column=2;
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

        <div class="woocommerce columns-1">
            <ul class="products">
                <li class="product">
                    <div class="product-outer">
                        <div class="product-inner">
                            <div class="product-image-wrapper">
                                <div id="products-4-1-carousel-2">
                                    <div class="thumbnails">
                                        <div class="owl-carousel owl-inner-nav owl-ui-sm">
                                            <img alt="" width="600" height="600" src="assets/images/home-v2-gallery/4.jpg" class="attachment-shop_single size-shop_single">
                                            <img alt="" width="600" height="600" src="assets/images/products/p6.jpg" class="attachment-shop_single size-shop_single">
                                            <img alt="" width="600" height="600" src="assets/images/home-v2-gallery/5.jpg" class="attachment-shop_single size-shop_single">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-content-wrapper">
                                <a href="index.php?page=single-product-v1" class="woocommerce-LoopProduct-link">
                                    <h3>Double Beef Burger</h3><span class="food-type-icon"><i class="fa fa-fire"></i><i class="po po-veggie-icon"></i></span>
                                    <div itemprop="description">
                                        <p style="max-height: none;">A mighty meaty double helping of all the reasons you love our burger.</p>
                                    </div>
                                    <div  class="yith_wapo_groups_container">
                                        <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                            <h3><span>Pick Size</span></h3>
                                            <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">22  cm</span></span>
                                                <span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>19.90</span></span>
                                            </div>
                                            <div class="ywapo_input_container ywapo_input_container_radio"><span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after">29  cm</span></span><span class="ywapo_label_price"> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>25.90</span></span></div>
                                        </div>
                                    </div>
                                </a>
                                <div class="hover-area"><a rel="nofollow" href="index.php?page=single-product-v1" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a></div>
                            </div>
                        </div><!-- /.product-inner -->
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
