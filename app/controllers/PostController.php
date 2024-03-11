<?php

namespace app\controllers;
use app\core\Controller;
use app\models\Post;
class PostController extends Controller
{
    public function showPosts()
    {
        $posts = Post::getAllPosts();
        $template = $this->twig->load('posts/show.twig');
        echo $template->render(['posts' => $posts]);
    }
}
