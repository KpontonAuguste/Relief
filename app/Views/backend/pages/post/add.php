<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>


<div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
    <div class="container">
        <div class="row">
            <div class="offset-md-1 col-md-10 offset-md-1">
                <div class="card card-box">
                    <div class="card-header">
                        <div class="clearfix">
                            <div class="pull-left">
                                Ajouter une publication
                            </div>
                            <div class="pull-right">
                                <a href="<?= route_to('admin.category') ?>" class="btn btn-default btn-sm p-0" role="button" id="add_category_btn">
                                    <i class="fa fa-list"></i> Liste des publications
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php $validation = \Config\Services::validation(); ?>
                        <form action="<?= route_to('admin.post.handler') ?>" method="POST" enctype="multipart/form-data">
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
                                <label class="col-sm-12 col-md-2 col-form-label">titre</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" placeholder="Ex. Nutrition..." name="title" id="title">
                                </div>
                            </div>
                            <?php if ($validation->getError('title')) : ?>
                                <div class="d-block text-danger" style="margin-top:15px;margin: bottom 15px;">
                                    <?= $validation->getError('title') ?>
                                </div>
                            <?php endif; ?>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Categorie</label>
                                <div class="col-sm-12 col-md-10">
                                    <select class="custom-select col-12" name="category">
                                        <?php
                                        if ($allCategory) {
                                            foreach ($allCategory as $all) {

                                        ?>
                                                <option selected="" value="<?php echo $all['id']; ?>"><?php echo $all['name']; ?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="file" class="form-control-file form-control height-auto" name="featured_image" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" name="content" id="editor"></textarea>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn bsb-btn-xl btn-primary" type="submit">Ajouter</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
<?= $this->endSection() ?>