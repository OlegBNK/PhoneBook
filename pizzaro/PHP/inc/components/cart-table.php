<form>
	<table class="shop_table shop_table_responsive cart">
		<thead>
			<tr>
				<th class="product-remove">&nbsp;</th>
				<th class="product-thumbnail">&nbsp;</th>
				<th class="product-name">Product</th>
				<th class="product-price">Price</th>
				<th class="product-quantity">Quantity</th>
				<th class="product-subtotal">Total</th>
			</tr>
		</thead>
		<tbody>

			<tr class="cart_item">

				<td class="product-remove">
					<a href="#" class="remove" >&times;</a>
				</td>

				<td class="product-thumbnail">
					<a href="index.php?page=single-product-v1">
						<img width="180" height="180" src="assets/images/products/1.png" alt=""/>
					</a>
				</td>

				<td class="product-name" data-title="Product">
					<a href="index.php?page=single-product-v1">Bacon Burger</a>
					<dl class="variation">
						<dt class="variation-Baseprice">Base price:</dt>
						<dd class="variation-Baseprice">
							<p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
						</dd>

						<dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
						</dt>

						<dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span"><p>29  cm</p></dd>
					</dl>
				</td>

				<td class="product-price" data-title="Price">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
				</td>

				<td class="product-quantity" data-title="Quantity">
					<div class="qty-btn">
						<label>Quantity</label>
						<div class="quantity">
							<input type="number" value="1" title="Qty" class="input-text qty text"/>
						</div>
					</div>
				</td>

				<td class="product-subtotal" data-title="Total">
						<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
				</td>
			</tr>

			<tr class="cart_item">

				<td class="product-remove">
					<a href="#" class="remove">&times;</a>
				</td>

				<td class="product-thumbnail">
					<a href="index.php?page=single-product-v1">
						<img width="180" height="180" src="assets/images/products/2.jpg" alt="" />
					</a>
				</td>

				<td class="product-name" data-title="Product">
					<a href="index.php?page=single-product-v1">Pepperoni Pizza</a>
					<dl class="variation">
						<dt class="variation-Baseprice">Base price:</dt>
						<dd class="variation-Baseprice">
							<p><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>0.00</span></p>
						</dd>
						<dt class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span">Pick Size ( <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#036;</span>25.90</span> ):
						</dt>
						<dd class="variation-PickSizespanclasswoocommerce-Price-amountamountspanclasswoocommerce-Price-currencySymbol36span2590span"><p>29  cm</p></dd>
					</dl>
				</td>

				<td class="product-price" data-title="Price">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
				</td>

				<td class="product-quantity" data-title="Quantity">
					<div class="qty-btn">
						<label>Quantity</label>
						<div class="quantity">
							<input type="number"  value="1" title="Qty" class="input-text qty text"/>
						</div>
					</div>
				</td>

				<td class="product-subtotal" data-title="Total">
					<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>25.90</span>
				</td>
			</tr>

			<tr>
				<td colspan="6" class="actions">
					<div class="coupon">
						<label for="coupon_code">Coupon:</label>
						<input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code" />
						<input type="submit" class="button" name="apply_coupon" value="Apply Coupon" />
					</div>
					<input type="submit" class="button" name="update_cart" value="Update Cart" />
					<div class="wc-proceed-to-checkout">
						<a href="index.php?page=checkout" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
					</div>
					<input type="hidden" id="_wpnonce" name="_wpnonce" value="21ca9d92f8" /><input type="hidden" name="_wp_http_referer" value="/pizzaro/cart/" />
				</td>
			</tr>

		</tbody>
	</table>
</form>
