<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\NewsletterModel;
use App\Models\OffreModel;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'pageTitle' => 'Panneau Admin'
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
                'rules' => 'required|is_unique[categorypost.name]',
                'errors' => [
                    'required' => 'Veuillez renseigner le nom de la categorie',
                    'is_unique' => 'Ce nom de categorie existe deja'
                ]
            ]
        ]);

        if (!$isValid) {
            return view('backend/pages/category/add', [
                'pageTitle' => 'Ajouter une categorie',
                'validation' => $this->validator
            ]);
        } else {
            $category = new CategoryPost();
            $save = $category->save(['name' => $request->getVar('category_name')]);

            if (!$save) {
                return redirect()->route('admin.category.form')->with('fail', 'Mot de passe incorrect')->withInput();
            } else {
                return redirect()->route('admin.category');
            }
        }
    }

    public function categoryForm()
    {
        $data = [
            'pageTitle' => 'Ajouter une categorie',
            'validation' => null
        ];

        return view('backend/pages/category/add', $data);
    }

    public function listCategory()
    {
        $categorie = new CategoryPost();
        $allCategory = $categorie->findAll();

        $data = [
            'pageTitle' => 'Liste des categories',
            'allCategory' => $allCategory
        ];

        return view('backend/pages/category/list', $data);
    }

    public function postForm()
    {
        $category = new CategoryPost();
        $allCategory = $category->findAll();

        $data = [
            'pageTitle' => 'Ajouter une publication',
            'validation' => null,
            'allCategory' => $allCategory
        ];

        return view('backend/pages/post/add', $data);
    }

    public function formOffre()
    {
        return view('backend/pages/offre/add');
    }

    public function addPost()
    {
        $request = \Config\Services::request();

        $isValid = $this->validate([
            'title' => [
                'rules' => 'required|is_unique[post.title]',
                'errors' => [
                    'required' => 'Le champ titre est obligatoire',
                    'is_unique' => 'Ce titre existe deja'
                ]
            ],
            'content' => [
                'rules' => 'required|min_length[20]',
                'errors' => [
                    'required' => 'Le champ contenu est obligatoire',
                    'min_length' => 'Un minimum de 20 caracteres est requis pour le champ content'
                ]
            ],
            'category' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Veuillez selectionner la categorie de la publication'
                ]
            ],
            'featured_image' => [
                'rules' => 'uploaded[featured_image]|is_image[featured_image]|max_size[featured_image, 2048]',
                'errors' => [
                    'uploaded' => 'Uploader une image pour votre publication',
                    'is_image' => 'Selectionner une image',
                    'max_size' => 'Votre fichier doit etre inferieur ou egal a 2MB'
                ]
            ]
        ]);

        if (!$isValid) {
            // $errors = $validation->getErrors();
            $category = new CategoryPost();
            $allCategory = $category->findAll();
            $data = [
                'pageTitle' => 'Ajouter une publication',
                'validation' => $this->validator,
                'allCategory' => $allCategory
            ];

            return redirect()->route('admin.post.form', $data);
        } else {
            $userId = CIAuth::id();
            $path = 'images/posts/';
            $file = $request->getFile('featured_image');
            $filename = $file->getClientName();

            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }

            if ($file->move($path, $filename)) {
                \Config\Services::image()
                    ->withFile($path . $filename)
                    ->fit(150, 150, 'center')
                    ->save($path . 'thumb_' . $filename);

                \Config\Services::image()
                    ->withFile($path . $filename)
                    ->resize(450, 300, true, 'width')
                    ->save($path . 'resized_' . $filename);

                //Save the post
                $post = new Post();

                $data = array(
                    'author_id' => $userId,
                    'category_id' => $request->getVar('category'),
                    'title' => $request->getVar('title'),
                    'content' => $request->getVar('content'),
                    'featured_image' => $filename,
                );

                $save = $post->insert($data);
                $last_id = $post->getInsertID();

                if ($save) {
                    echo "tout est bon!!!";
                } else {
                    echo "Une erreur est survenue";
                }
            } else {
                echo "Error on uploading image";
            }
        }
    }

    public function listPost()
    {
        $data = [
            'pageTitle' => 'Liste des publications',
            'validation' => null
        ];

        return view('backend/pages/post/list', $data);
    }

    // Newsletter

    public function listNewsletter()
    {
        $newsletter = new NewsletterModel();
        $allNewsletter = $newsletter->findAll();


        $data = [
            'pageTitle' => 'Liste des emails inscrit a la Newsletter',
            'allNewsletter' => $allNewsletter
        ];

        return view('backend/pages/newsletter/list', $data);
    }

        // liste des Offres//

        public function listOffre()
    {
        $offre = new OffreModel();
        $allOffre = $offre->findAll();


        $data = [
        'offre_reference' => 'liste de reference',
         'description' => 'liste desciption',
        'offre_localisation' => 'liste de localisation',
        'offre_type' => 'liste de type',
        'offre_duration' => 'liste du temps',
        'offre_nb_poste' => 'liste de poste',
         'offre_status' => 'liste status',
        'offre_date_end' => 'liste de fin',
         'offre_file' => 'liste file',
         'allOffre' => $allOffre
        ];

        return view('backend/pages/offre/list', $data);
    }

    public function addOffre()
    {
        $request = \Config\Services::request();

        /*$isValid = $this->validate([
            'offre_reference' => [
                'rules' => 'required|is_unique[offre_reference]',
                'errors' => [
                    'required' => 'reference de offre',
                    'is_unique' => 'Ce offre existe '
                ]
                ],
            'description' => [
                'rules' => 'required|is_unique[description]',
                'errors' => [
                    'required' => 'description de offre',
                    'is_unique' => 'Ce offre existe '
                ]
                ],
                'offre_localisation' => [
                    'rules' => 'required|is_unique[offre_localisation]',
                    'errors' => [
                        'required' => 'localisation de offre',
                        'is_unique' => 'localisation '
                    ]
                    ],
                'offre_type' => [
                    'rules' => 'required|is_unique[offre_type]',
                    'errors' => [
                        'required' => 'type de offre',
                        'is_unique' => 'Ce type existe '
                        ]
                    ],
                    'offre_duration' => [
                        'rules' => 'required|is_unique[offre_duration]',
                        'errors' => [
                            'required' => 'dure de offre',
                            'is_unique' => 'la dure  '
                            ]
                        ],
                        'offre_nb_poste' => [
                            'rules' => 'required|is_unique[offre_nb_poste]',
                            'errors' => [
                                'required' => 'nombre de poste',
                                'is_unique' => 'poste xiste  '
                                ]
                            ],
                            'offre_status' => [
                                'rules' => 'required|is_unique[offre_status]',
                                'errors' => [
                                    'required' => 'status offre',
                                    'is_unique' => 'status existe '
                                    ]
                                ],
                                'offre_date_end' => [
                                    'rules' => 'required|is_unique[offre_date_end]',
                                    'errors' => [
                                        'required' => 'date de fin offre',
                                        'is_unique' => 'date de fin  '
                                        ]
                                    ],
                                    'offre_file' => [
                                        'rules' => 'required|is_unique[offre_file]',
                                        'errors' => [
                                            'required' => 'file offre',
                                            'is_unique' => 'existe  '
                                            ]
                                        ],

        ]);

        if (!$isValid) {
            return view('backend/pages/offre/add', [
                'pageTitle' => 'le nom de offre',
                'validation' => $this->validator
            ]);
        } else {
            
           /* $offre_reference = $request->getVar('offre_reference');
            $description = $request->getVar('description');
            $offre_localisation = $request->getVar('offre_localisation');
            $offre_type = $request->getVar('offre_type');
            $offre_duration = $request->getVar('offre_duration');
            $offre_nb_poste = $request->getVar('offre_nb_poste');
            $offre_status = $request->getVar('offre_status');
            $offre_date_end = $request->getVar('offre_date_end');
            $offre_file = $request->getVar('offre_file');
            $save = $offre->save([
                'offre_reference' => $offre_reference,
                'description' => $description,
                'offre_localisation' => $offre_localisation,
                'offre_type'=> $offre_type,
                'offre_duration' => $offre_duration,
                'offre_nb_poste' => $offre_nb_poste, 
                'offre_status'=> $offre_status, 
                'offre_date_end' => $offre_date_end,
                'offre_file'=> $offre_file,
                'user_id' => 1
            ]);*/

            $data = [
                'offre_reference' => $request->getVar('offre_reference'),
                'description' => $request->getVar('description'),
                'offre_localisation' => $request->getVar('offre_localisation'),
                'offre_type' => $request->getVar('offre_type'),
                'offre_duration' => $request->getVar('offre_duration'),
                'offre_nb_poste' => $request->getVar('offre_nb_poste'),
                'offre_status' => $request->getVar('offre_status'),
                'offre_date_end' => $request->getVar('offre_date_end'),
                'offre_file' => $request->getVar('offre_file'),
                'user_id' => 1
            ];
            $offre = new OffreModel();
            $save = $offre->insert($data);

            if (!$save) {
                return redirect('admin.offre');
            } else {
                return redirect('admin.offre');
            }
        
        
    }

}
