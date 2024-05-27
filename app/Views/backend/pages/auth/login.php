<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ARS</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-5/assets/css/login-5.css">


    <!-- =======================================================
  * Template Name: Mamba - v2.0.1
  * Template URL: https://bootstrapmade.com/mamba-one-page-bootstrap-template-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- Login 5 - Bootstrap Brain Component -->
    <section class="p-3 p-md-4 p-xl-5">
        <div class="container">
            <div class="card border-light-subtle shadow-sm">
                <div class="row g-0">
                    <div class="col-12 col-md-6 text-bg-primary">
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <div class="col-10 col-xl-8 py-3">
                                <!--<img class="img-fluid rounded mb-4" loading="lazy" src="./assets/img/bsb-logo-light.svg" width="245" height="80" alt="BootstrapBrain Logo">-->
                                <hr class="border-primary-subtle mb-4">
                                <h2 class="h1 mb-4">Bienvenue chez African Relief Service.</h2>
                                <p class="lead m-0">Veuillez vous connecter pour acceder a l'espace d'administration du site web.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body p-3 p-md-4 p-xl-5">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-5">
                                        <h3>Connectez-vous</h3>
                                    </div>
                                </div>
                            </div>
                            <?php $validation = \Config\Services::validation(); ?>
                            <form action="<?= route_to('admin.login.handler') ?>" method="POST">
                                <?= csrf_field(); ?>
                                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                                    <div class="alert alert-success">
                                        <?= session()->getFlashdata('success') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-label="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                                    <div class="alert alert-danger">
                                        <?= session()->getFlashdata('fail') ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-label="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <div class="row gy-3 gy-md-4 overflow-hidden">
                                    <div class="col-12">
                                        <label for="login_id" class="form-label">Email / Nom d'utilisateur <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="login_id" id="Login_id" placeholder="name@example.com" value="<?= set_value('login_id') ?>">
                                    </div>
                                    <?php if ($validation->getError('login_id')) : ?>
                                        <div class="d-block text-danger" style="margin-top:15px;margin: bottom 15px;">
                                            <?= $validation->getError('login_id') ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-12">
                                        <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                                        <input type="password" class="form-control" name="password" id="password" value="<?= set_value('password') ?>">
                                    </div>
                                    <?php if ($validation->getError('password')) : ?>
                                        <div class="d-block text-danger" style="margin-top:15px;margin: bottom 15px;">
                                            <?= $validation->getError('password') ?>
                                        </div>
                                    <?php endif; ?>
                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button class="btn bsb-btn-xl btn-primary" type="submit">Connexion</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-12">
                                    <hr class="mt-5 mb-4 border-secondary-subtle">
                                    <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                                        <a href="#!" class="link-secondary text-decoration-none">Revenir au site</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>