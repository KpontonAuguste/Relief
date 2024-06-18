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
                                Liste des offres
                            </div>
                            <div class="pull-right">
                                <a href="<?= route_to('admin.offre.form') ?>" class="btn btn-default btn-sm p-0" role="button" id="add_offre_btn">
                                    <i class="fa fa-plus-circle"></i> Nombres des offres
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-borderless table-hover table-striped">
                            <thead>
                                <tr>
                                 <td scope="col">#</td>
                                 <td scope="col">REFERENCE</td>
                                 <td scope="col">DESCRIPTION</td>
                                 <td scope="col">LOCALISATION</td>
                                 <td scope="col">DURATION</td>
                                   <td scope="col">STATUS</td>
                                 <td scope="col">DATE DE FIN</td>
                                  <td scope="col">Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($allOffre) {
                                    foreach ($allOffre as $all) {
                                ?>
                                        <tr>
                                         <td scope="row"><?php echo $all['id']; ?></td>
                                         <td><?php echo $all['offre_reference']; ?></td>
                                         <td><?php echo $all['description']; ?></td>
                                         <td><?php echo $all['offre_localisation']; ?></td>
                                         <td><?php echo $all ['offre_duration']; ?></td>
                                          <td><?php echo $all ['offre_status']; ?></td>
                                         <td><?php echo $all ['offre_date_end']; ?></td>
                                        <td><a class="btn btn-sm btn-primary" href="<?php echo $all['id'] ?>">Modifier</a>
                                          </td>
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