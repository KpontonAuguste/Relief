<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PostModel;
use App\Models\CategoryPost;



class Post extends BaseController
{
    public function index()
    {
        helper('text', 'url', 'form');

        $post = new PostModel();



        $allPost = $post->getAllWithPagination(1);


        $recentPost = $post->recentPost();

        $category = new CategoryPost();
        $allCategory = $category->findAll();

        $data = [
            'pageTitle' => 'ARS - Blog',
            'posts' => $allPost,
            'allCategory' => $allCategory,
            'recentPost' => $recentPost,
        ];

        return view('pages/post/index', $data);
    }

    public function read($id)
    {
        helper('text', 'url', 'form');

        $post = new PostModel();

        $recentPost = $post->recentPost();

        $category = new CategoryPost();
        $allCategory = $category->findAll();

        $posts = $post->where('id', $id)->first();

        $data = [
            'posts' => $posts,
            'allCategory' => $allCategory,
            'recentPost' => $recentPost,
        ];

        return view('pages/post/read', $data);
    }
}
