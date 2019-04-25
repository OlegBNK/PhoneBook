<?php
	$page = isset($_GET['page']) ? $_GET['page'] : 'home-v1';

	switch($page){
        case 'home-v1':
            require_once PIZZARO_ROOT. '/inc/footer/footer-v1.php';
        break;
        case 'home-v2':
         	require_once PIZZARO_ROOT. '/inc/footer/footer-v2.php';
        break;
        case 'home-v3':
         	require_once PIZZARO_ROOT. '/inc/footer/footer-v3.php';
        break;
        case 'home-v4':
         	require_once PIZZARO_ROOT. '/inc/footer/footer-v3.php';
        break;
		case 'home-v5':
         	require_once PIZZARO_ROOT. '/inc/footer/footer-v4.php';
        break;
		case 'home-v6':
         	require_once PIZZARO_ROOT. '/inc/footer/footer-v5.php';
        break;
		case 'home-v7':
         	require_once PIZZARO_ROOT. '/inc/footer/footer-v4.php';
        break;
        default:
        	require_once PIZZARO_ROOT. '/inc/footer/footer-v1.php';
    }
?>
