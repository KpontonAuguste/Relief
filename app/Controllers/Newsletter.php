<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\NewsletterModel;

class Newsletter extends BaseController
{
    public function formHandler()
    {
        $request = \Config\Services::request();

        $isValid = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'Veuillez renseigner le votre email',
                    'valid_email' => 'Veuillez saisir un email valid'
                ]
            ]
        ]);

        if (!$isValid) {
            $data = [
                'validation' => $this->validator
            ];
            return view('header') .
                view('home/index', $data) .
                view('footer');
        } else {
            $newsletter = new NewsletterModel();
            $save = $newsletter->save(['email' => $request->getVar('email')]);

            if (!$save) {
                return redirect()->route('home.index')->with('fail', 'Probleme lors de l\'enregistrement de votre email')->withInput();
            } else {
                return redirect()->route('home.index');
            }
        }
    }
}
