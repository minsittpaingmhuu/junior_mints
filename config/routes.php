<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


switch($uri){
	case '/':
		require 'controllers/index.php';
		break;
	case '/about':
		require 'controllers/about.php';
		break;
	case '/about-me':
		header('Location : /about');
		break;
	case '/admin':
		require 'controllers/admin.php';
		break;
	
	case '/admin/ticket':
		require 'controllers/admin.ticket.php';
		break;
	case '/admin/contact':
		require 'controllers/admin.contact.php';
		break;
	case '/admin/user':
		require 'controllers/admin.user.php';
		break;
	case '/admin/shop':
		require 'controllers/admin.shop.php';
		break;
	case '/admin/blog':
		require 'controllers/admin.blog.php';
		break;
	case '/contact';
		require 'controllers/contact.php';
		break;
	case '/changepass';
		require 'controllers/changepass.php';
		break;
	case '/login';
		require 'controllers/login.php';
		break;
	case '/logout';
		require 'controllers/logout.php';
		break;
	case '/signup';
		require 'controllers/signup.php';
		break;
	case '/profile';
		require 'controllers/profile.php';
		break;
	case '/shop';
		require 'controllers/shop.php';
		break;
	case '/getticket';
		require 'controllers/getticket.php';
		break;
	case '/forgotpass';
		require 'controllers/forgotpass.php';
		break;
	case '/forbidden';
		require 'controllers/403.php';
		break;
	case '/entertoken';
		require 'controllers/entertoken.php';
		break;
	default:
		require 'controllers/404.php';
		break;
	break;
}