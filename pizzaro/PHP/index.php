<?php
	define( 'PIZZARO_ROOT', dirname(__FILE__) );
	require_once PIZZARO_ROOT . '/inc/components/product.php';

	// Define the root folder and base URL for the application
	function baseURL(){
		return sprintf(
			"%s://%s%s",
			isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
			$_SERVER['SERVER_NAME'],
			dirname($_SERVER['REQUEST_URI'])
		);
	}

	define('BASE_URL', baseURL());
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';
	$color = 'red';
	$bodyClass = 'page home page-template-default';

	switch( $page ) {

		case 'about':
			$bodyClass = 'about full-width page-template-template-aboutpage';
		break;
		case 'home-v1':
			$bodyClass = 'page-template-template-homepage-v1 home-v1';
		break;
		case 'home-v2':
			$bodyClass = 'home-v2 page-template-template-homepage-v2 html-change woocommerce-active';
		break;
		case 'home-v3':
			$bodyClass = 'home-v3 page-template-template-homepage-v3 woocommerce-active';
		break;
		case 'home-v4':
			$bodyClass = 'home-v4 page-template-template-homepage-v4 woocommerce-active';
		break;
		case 'home-v5':
			$bodyClass = 'home-v5 page-template-template-homepage-v5 woocommerce-active';
		break;
		case 'home-v6':
			$bodyClass = 'home-v6 page-template-template-homepage-v6 woocommerce-active';
		break;
		case 'home-v7':
			$color = 'green';
			$bodyClass = 'home-v7 page-template-template-homepage-v7 woocommerce-active';
		break;
		case 'blog':
			$bodyClass = 'blog right-sidebar';
		break;
		case 'blog-single':
			$bodyClass = 'blog right-sidebar single single-post';
		break;
		case 'blog-full-width-grid':
			$bodyClass = 'blog full-width blog-grid';
		break;
		case 'blog-full-width':
			$bodyClass = 'blog full-width';
		break;
		case 'blog-grid':
			$bodyClass = 'blog blog-grid right-sidebar';
		break;
		case 'single-product-v1':
			$bodyClass = 'single-product style-1 woocommerce';
		break;
		case 'single-product-v2':
			$bodyClass = 'single-product style-2';
		break;
		case 'single-product-v3':
			$bodyClass = 'single-product style-3 woocommerce';
		break;
		case 'contact':
			$bodyClass = 'page-template-template-contactpage';
		break;
		case 'terms-and-conditions':
			$bodyClass = 'terms-conditions';
		break;
		case 'faq-v1':
		case 'faq-v2':
			$bodyClass = 'faq';
		break;
		case 'shop-grid-3-column':
			$bodyClass = 'full-width grid-view columns-3 archive woocommerce-page';
		break;
		case 'shop-grid-4-column':
			$bodyClass = 'full-width grid-view columns-4 archive woocommerce-page';
		break;
		case 'shop-grid-6-column':
			$bodyClass = 'full-width grid-view columns-6 archive woocommerce-page';
		break;
		case 'shop-listing':
			$bodyClass = 'full-width list-view columns-1 archive woocommerce-page';
		break;
		case 'shop-list-2-column':
			$bodyClass = 'full-width list-view columns-2 archive woocommerce-page html-change';
		break;
		case 'shop-list-no-images':
			$bodyClass = 'full-width list-no-image-view columns-1 archive woocommerce-page';
		break;
		case 'shop-list-no-images-parallax':
			$bodyClass = 'list-no-image-cat-view no-margin-header';
		break;
		case 'shop-sidebar-grid-3-column':
			$bodyClass = 'left-sidebar grid-view columns-3 archive woocommerce-page lite';
		break;
		case 'shop-sidebar-listing':
			$bodyClass = 'left-sidebar list-view columns-1 archive woocommerce-page lite';
		break;
		case 'shop-sidebar-list-2-column':
			$bodyClass = 'left-sidebar list-view columns-2 archive woocommerce-page lite';
		break;
		case 'shop-dark-grid-3-column':
			$bodyClass = 'full-width grid-view columns-3 archive woocommerce-page dark';
		break;
		case 'shop-dark_list':
			$bodyClass = 'full-width list-view columns-1 archive woocommerce-page dark';
		break;
		case 'shop-dark_list-2-column':
			$bodyClass = 'full-width list-view columns-2 archive woocommerce-page dark html-change';
		break;
		case 'shop-dark-list-no-images':
			$bodyClass = 'full-width list-no-image-view columns-1 archive woocommerce-page dark';
		break;
		case 'login-and-register':
			$bodyClass = 'woocommerce-account';
		break;
		case '404':
			$bodyClass = 'error404 group-blog full-width woocommerce-active';
		break;
		case 'cart':
			$bodyClass = 'woocommerce-cart';
		break;
		case 'checkout':
			$bodyClass = 'woocommerce-checkout';
		break;
		case 'store-locator':
			$bodyClass = 'store-locator-page';
		break;
		case 'order-received':
			$bodyClass = 'woocommerce-page woocommerce-order-received woocommerce-checkout';
		break;
	}
?>

<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Pizzaro</title>

		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
        <link rel="stylesheet" type="text/css" href="assets/css/font-pizzaro.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/css/colors/<?php echo $color; ?>.css" media="all" />
		<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css" media="all" />

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">

		<link rel="shortcut icon" href="assets/images/fav-icon.png">

	</head>

	<body class="<?php echo $bodyClass;?>">
		<div id="page" class="hfeed site">
			<?php require_once PIZZARO_ROOT.'/inc/header/header.php'; ?>
			<?php require_once PIZZARO_ROOT.'/pages/'.$page.'.php'; ?>
			<?php require_once PIZZARO_ROOT.'/inc/footer/footer.php'; ?>
		</div>

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/tether.min.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="assets/js/social.share.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
		<script type="text/javascript" src="assets/js/scripts.min.js"></script>

	</body>
</html>
