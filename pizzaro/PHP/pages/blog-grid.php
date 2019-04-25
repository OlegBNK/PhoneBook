<div id="content" class="site-content" tabindex="-1" >
	<div class="col-full">

		<div class="pizzaro-breadcrumb">
			<nav class="woocommerce-breadcrumb" >
				<a href="index.php?page=blog-single">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>Page 1</nav>
		</div>
		<!-- .woocommerce-breadcrumb -->

		<div id="primary" class="content-area">
			<main id="main" class="site-main" >

				<div class="posts">
					<?php require_once 'inc/blocks/blog-post.php'; ?>
				</div>
				<!-- /.posts -->
				<?php require_once 'inc/components/blog-pagination.php'; ?>
			</main><!-- #main -->
		</div><!-- #primary -->


		<div id="secondary" class="widget-area" role="complementary">
			<?php require_once 'inc/components/sidebar/about-widget-2.php'; ?>
			<?php require_once 'inc/components/sidebar/search-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/recent-post-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/tag-widget.php'; ?>
			<?php require_once 'inc/components/sidebar/sidebar-product.php'; ?>
		</div><!-- #secondary -->

	</div><!-- .col-full -->
</div><!-- #content -->