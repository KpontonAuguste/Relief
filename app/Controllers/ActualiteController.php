<?php

namespace App\Controllers;

use App\Models\Post;
use App\Controllers\BaseController;

class ActualiteController extends BaseController
{
    public function index()
    {
        //$post = new Post();
        //$allPost = $post->getAll();

        //$data = ['allPost' => $allPost];

        return view('header') .
            view('actualite/index') .
            view('footer');
    }
}
