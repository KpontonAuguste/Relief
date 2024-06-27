<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CategoryPost;

class Post extends BaseController
{
    public function index()
    {
        helper('text');

        $post = new PostModel();
        $allPost = $post->getAll();
        $recentPost = $post->recentPost();

        $category = new CategoryPost();
        $allCategory = $category->findAll();

        $data = [
            'pageTitle' => 'ARS - Blog',
            'allPost' => $allPost,
            'allCategory' => $allCategory,
            'recentPost' => $recentPost
        ];

        return view('pages/post/index', $data);
    }
}
