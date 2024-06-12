<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'pageTitle' => 'ARS - Page d\'accueil'
        ];

        return view('pages/home/index', $data);
    }
}
