<?php

require_once './functions.php';


require_once  './party/header.php';


$page = $_GET['page'] ?? 'home';

switch($page){
    case 'home';
        require_once './pages/home.php';
        break;
    case 'articles';
        require_once './pages/articles/articles.php';
        break;
    case 'articles2';
        require_once './pages/articles/articles2.php';
        break;
    case 'articles3';
        require_once './pages/articles/articles3.php';
        break;
    case 'articlesX';
        require_once './pages/articles/articlesX.php';
        break;
    case 'chat';
        require_once './pages/chat.php';
        break;
    case 'aboutus';
        require_once './pages/aboutus.php';
        break;
    case 'register';
        require_once './pages/register.php';
        break;
    case 'login';
        require_once './pages/login.php';
        break;
    case 'secret';
        require_once './pages/secret.php';
        break;
    case 'logout';
        session_destroy();
        header('Location: index.php?page=home');
        exit;
        break;
    default:
        require_once './pages/404.php';
        break;
}


require_once  './party/footer.php';

