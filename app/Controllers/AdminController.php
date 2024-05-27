<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Models\CategoryPost;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Panneu Admin'
        ];

        return view('backend/pages/home', $data);
    }

    public function logoutHandler()
    {
        CIAuth::forget();
        return redirect()->route('admin.login.form')->with('fail', 'Vous etes deconnecte');
    }


    public function addCategory()
    {
        $request = \Config\Services::request();

        $isValid = $this->validate([
            'category_name' => [
                'rules' => 'required|is_unique[categories.name]',
                'errors' => [
                    'required' => 'Veuillez renseigner le nom de la categorie',
                    'is_unique' => 'Ce nom de categorie existe deja'
                ]
            ]
        ]);

        if (!$isValid) {
            return view('backend/pages/catgory/add', [
                'pageTitle' => 'Ajouter une categorie',
                'validation' => $this->validator
            ]);
        } else {
            $category = new CategoryPost();
            $save = $category->save(['name' => $request->getVar('category_name')]);

            if ($save) {
                return redirect()->route('admin.login.form')->with('fail', 'Mot de passe incorrect')->withInput();
            } else {
            }
        }
    }
}
