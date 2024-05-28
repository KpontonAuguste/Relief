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
                                Liste des categories
                            </div>
                            <div class="pull-right">
                                <a href="<?= route_to('admin.category.form') ?>" class="btn btn-default btn-sm p-0" role="button" id="add_category_btn">
                                    <i class="fa fa-plus-circle"></i> Ajouter une categorie
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless table-hover table-striped">
                            <thead>
                                <tr>
                                    <td scope="col">#</td>
                                    <td scope="col">Categorie</td>
                                    <td scope="col">Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($allCategory) {
                                    foreach ($allCategory as $all) {

                                ?>
                                        <tr>
                                            <td scope="row"><?php echo $all['id']; ?></td>
                                            <td><?php echo $all['name']; ?></td>
                                            <td>------</td>
                                        </tr>
                                <?php
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
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