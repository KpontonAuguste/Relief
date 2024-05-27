<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Hash;
use App\Libraries\CIAuth;
use App\Models\User;

class AuthController extends BaseController
{
    protected $helpers = ['url', 'form'];

    public function loginForm()
    {
        $data = [
            'pageTitle' => 'login',
            'validation' => null
        ];

        return view('backend/pages/auth/login', $data);
    }

    public function loginHandler()
    {
        $fieldType = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|valid_email|is_not_unique[users.email]',
                    'errors' => [
                        'required' => 'Votre email est requis',
                        'valid_email' => 'Verifiez le champs email. Un email valide est requis',
                        'is_not_unique' => 'Votre email ne correspond pas a un email de notre systeme',
                    ],
                ],
                'password' => [
                    'rules' => 'required|min_length[5]|max_length[45]',
                    'errors' => [
                        'required' => 'Votre mot de passe est requis',
                        'min_length' => 'Le mot de passe doit avoir minimum 5 caracteres',
                        'max_length' => 'Le mot de passe doit avoir maximum 45 caracteres',
                    ]
                ],
            ]);
        } else {
            $isValid = $this->validate([
                'login_id' => [
                    'rules' => 'required|is_not_unique[users.username]',
                    'errors' => [
                        'required' => 'Votre username est requis',
                        'is_not_unique' => 'Votre username ne correspond pas a un email de notre systeme',
                    ],
                ],
                'password' => [
                    'rules' => 'required|min_length[5]|max_length[45]',
                    'errors' => [
                        'required' => 'Votre mot de passe est requis',
                        'min_length' => 'Le mot de passe doit avoir minimum 5 caracteres',
                        'max_length' => 'Le mot de passe doit avoir maximum 45 caracteres',
                    ]
                ],
            ]);
        }

        if (!$isValid) {
            return view('backend/pages/auth/login', [
                'pageTitle' => 'Login',
                'validation' => $this->validator
            ]);
        } else {
            $user = new User();
            $userInfo = $user->where($fieldType, $this->request->getVar('login_id'))->first();
            $checkPassword = Hash::check($this->request->getVar('password'), $userInfo['password']);

            if (!$checkPassword) {
                return redirect()->route('admin.login.form')->with('fail', 'Mot de passe incorrect')->withInput();
            } else {
                CIAuth::setCIAuth($userInfo);
                return redirect()->route('admin.home');
            }
        }
    }
}
