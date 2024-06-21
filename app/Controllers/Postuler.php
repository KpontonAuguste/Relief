<?php

namespace App\Controllers;
use App\Models\PostulerModel;
class Postuler extends BaseController
{
     
   public function __construct()
   {

   }
       public function index(): string
      {    $postuler =new PostulerModel();
          
          $data['postulers']=$postuler->orderBy('id','ASC')->findAll();
          return view('postuler/add', $data);
           
      }
   public function add()
   {       
      
            return view('pages/postuler/add');
   }
   public function creerPostuler()
   {
      
      $postulerfile = $this->request->getVar('postuler_file');
      $nom = $this->request->getVar('nom');
      $prenom  = $this->request->getVar('prenom');
      $adresse = $this->request->getVar('adresse');
      $email = $this->request->getVar('email');
      $telephone = $this->request->getVar('telephone');
      $datenaisance = $this->request->getVar('date_naissance');
      $diplome = $this->request->getVar('diplome');
      $data = [
         'postuler_file' => $postulerfile,
         'nom' => $nom,
         'prenom' => $prenom,
         'email'=> $email,
         'adresse'=> $adresse,
         'telephone' => $telephone,
         'date_naissance' => $datenaisance,
         'diplome' => $diplome
      ];

      $postuler = new PostulerModel();
      $postuler->createP($data);
      //$postuler->save([ 'postuler_file'=>$postulerfile, 'nom'=>$nom, 'prenom'=>$prenom, 'adresse'=>$adresse, 'email'=>$email, 'telephone'=>$telephone, 'date_naissance'=>$datenaisance]);
      
      return redirect()->to(base_url('/'));
      
      //var_dump($data);
   }
} 