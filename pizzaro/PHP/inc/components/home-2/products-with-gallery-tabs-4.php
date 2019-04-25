<?php
    $products = array(
        array(
            'product_name' => 'Pepperoni Pizza',
            'productImageURL' => 'assets/images/products/p1.png',
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
            'productImageURL' => 'assets/images/products/p5.png',
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
            'productImageURL' => 'assets/images/products/p4.png',
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
            'productImageURL' => 'assets/images/products/p3.png',
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
            'productImageURL' => 'assets/images/products/p2.png',
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
    $page = isset($_GET['page']) ? $_GET['page'] : 'home-v2';
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
                <div class="product-outer">
                    <div class="product-inner">
                        <div class="product-image-wrapper">
                    		<div class="thumbnails woocommerce-LoopProduct-link owl-carousel">
                                <img src="<?php echo $product['productImageURL'];?>" class="img-responsive" alt="">
                                <img alt="" width="600" height="600" src="assets/images/home-v2-gallery/2.jpg" class="attachment-shop_single size-shop_single">
                                <img alt="" width="600" height="600" src="assets/images/home-v2-gallery/3.jpg" class="attachment-shop_single size-shop_single">
                            </div>
                        </div>

                    	<div class="product-content-wrapper">
                            <a href="index.php?page=single-product-v1" class="woocommerce-LoopProduct-link">
                                <h3><?php echo $product['product_name'];?></h3>
                                <div itemprop="description"><p style="max-height: none;">Extra-virgin olive oil, garlic, mozzarella, mushrooms and olives.</p></div>
                                <div  class="yith_wapo_groups_container">
                                    <div  class="ywapo_group_container ywapo_group_container_radio form-row form-row-wide " data-requested="1" data-type="radio" data-id="1" data-condition="">
                                        <h3><span>Pick Size</span></h3>

                                        <?php foreach ($product['size_price'] as $key => $size_price_arr) : ?>
                                            <div class="ywapo_input_container ywapo_input_container_radio">

                                                <span class="ywapo_label_tag_position_after"><span class="ywapo_option_label ywapo_label_position_after"><?php echo $size_price_arr['size'];?></span></span>
                                                <span class="ywapo_label_price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo $size_price_arr['price'];?></span></span>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </a>
                            <div class="hover-area">
                                <a rel="nofollow" href="index.php?page=single-product-v1" data-quantity="1" data-product_id="51" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.product-outer -->
            </li><!-- /.products -->
        <?php endforeach;?>
    </ul>
</div>
