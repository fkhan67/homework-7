<?php

require_once '../app/vendor/autoload.php';
require_once "../app/core/Controller.php";
require_once "../app/models/User.php";
require_once "../app/models/Post.php";
require_once "../app/controllers/MainController.php";
require_once "../app/controllers/UserController.php";
require_once "../app/controllers/PostController.php";

use app\controllers\MainController;
use app\controllers\UserController;
use app\controllers\PostController;

$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case "/posts":
        $postController = new PostController();
        $postController->showPosts();
        break;
    case "/":
        $mainController = new MainController();
        $mainController->homepage();
        break;
    default:
        $mainController = new MainController();
        $mainController->notFound();
        break;
}
