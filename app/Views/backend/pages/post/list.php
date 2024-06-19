<?= $this->extend('backend/layout/pages-layout') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col-md-12 mb-4">
        <div class="card card-box">
            <div class="card-header">
                <div class="clearfix">
                    <div class="pull-left">
                        Toutes les publications
                    </div>
                    <div class="pull-right">
                        kjdslkjd
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="data-table table stripe hover nowrap dataTable no-footer dtr-inline collapsed" id="posts-table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Categorie</th>
                            <th scope="col">Visibilite</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <?php if ($allPost) {
                        foreach ($allPost as $post) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $post['id'] ?></td>
                                    <td><img src="/images/posts/thumb_<?php echo $post['featured_image'] ?>" class="img-thumbnail" style="max-width: 70px;" /></td>
                                    <td><?php echo $post['title'] ?></td>
                                    <td><?php echo $post['name'] ?></td>
                                    <td><?php if ($post['visibility'] == 1) {
                                            echo "Active";
                                        } else {
                                            echo "Desactive";
                                        } ?></td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-link">Voir</a>
                                        <a href="" class="btn btn-sm btn-link">Modifier</a>
                                        <a href="" class="btn btn-sm btn-link">Supprimer</a>
                                    </td>
                                </tr>
                            </tbody>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>