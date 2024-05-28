<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>
<!--<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">-->

<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10 offset-md-1">
                <div class="card card-box">
                    <div class="card-header">
                        <div class="clearfix">
                            <div class="pull-left">
                                Ajouter une categorie
                            </div>
                            <div class="pull-right">
                                <a href="<?= route_to('admin.category') ?>" class="btn btn-default btn-sm p-0" role="button" id="add_category_btn">
                                    <i class="fa fa-list"></i> Liste des categorie
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php $validation = \Config\Services::validation(); ?>
                        <form action="<?= route_to('admin.category.handler') ?>" method="POST">
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


                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Nom de la categorie</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Ex. Nutrition..." name="category_name">
                                </div>
                            </div>
                            <?php if ($validation->getError('login_id')) : ?>
                                <div class="d-block text-danger" style="margin-top:15px;margin: bottom 15px;">
                                    <?= $validation->getError('login_id') ?>
                                </div>
                            <?php endif; ?>

                            <div class="col-12">

                                <button class="btn bsb-btn-xl btn-primary" type="submit">Ajouter</button>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>
    </div>
</div>-->
<?= $this->endSection() ?>