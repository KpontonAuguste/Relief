<?php

namespace App\Controllers;
use App\Models\ContactModel;
class Contact extends BaseController
{
     
   public function __construct()
   {

   }
       public function index(): string
      {    $contact =new ContactModel();
          
          $data['contacts']=$postuler->orderBy('id_contact','ASC')->findAll();
          return view('contact/create', $data);
           
      }
   public function create()
   {       
      
            return view('pages/contact/create');
   }
   public function creerContact()
   {
      
      $nom = $this->request->getVar('nom');
      $prenom  = $this->request->getVar('prenom');
      $email = $this->request->getVar('email');
      $telephone = $this->request->getVar('telephone');
      $message = $this->request->getVar('message');

      $data = [
         
         'nom' => $nom,
         'prenom' => $prenom,
         'email'=> $email,
         'telephone' => $telephone,
         'message' => $message,
      ];

      $contact = new ContactModel();
      $contact->createC($data);
      //$postuler->save([ 'postuler_file'=>$postulerfile, 'nom'=>$nom, 'prenom'=>$prenom, 'adresse'=>$adresse, 'email'=>$email, 'telephone'=>$telephone, 'date_naissance'=>$datenaisance]);
      
      return redirect()->to(base_url('/'));
      
      //var_dump($data);
   }
} 