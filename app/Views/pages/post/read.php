<?= $this->extend('layout/page-layout') ?>
<?= $this->section('content') ?>

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container">

        <div class="row">

            <div class="col-lg-8 entries">
                <?php


                ?>
                <article class="entry entry-single" data-aos="fade-up">

                    <div class="entry-img">
                        <img src="/images/posts/resized_<?php echo $posts['featured_image'] ?>" alt="" class="img-fluid">
                    </div>

                    <h2 class="entry-title">
                        <a href="blog-single.html"><?php echo $posts['title'] ?></a>
                    </h2>

                    <div class="entry-meta">
                        <ul>
                            <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">Admin</a></li>
                            <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php echo $posts['created_at'] ?></time></a></li>
                        </ul>
                    </div>

                    <div class="entry-content">
                        <?php echo $posts['content'] ?>
                    </div>

                    <div class="entry-footer clearfix">
                        <div class="float-left">
                            <i class="icofont-user"></i>
                            <ul class="cats">
                                <li><a href="#">Admin</a></li>
                            </ul>
                        </div>

                        <div class="float-right share">
                            <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                            <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                        </div>

                    </div>

                </article><!-- End blog entry -->
                <?php

                ?>
            </div>

            <div class="col-lg-4">

                <div class="sidebar">

                    <h3 class="sidebar-title">Recherche</h3>
                    <div class="sidebar-item search-form">
                        <form action="">
                            <input type="text">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div><!-- End sidebar search formn-->

                    <h3 class="sidebar-title">Categories</h3>
                    <div class="sidebar-item categories">
                        <?php
                        if ($allCategory) {
                            foreach ($allCategory as $all) {
                        ?>
                                <ul>
                                    <li><a href="#"><?php echo $all['name']; ?></a></li>
                                </ul>
                        <?php
                            }
                        }
                        ?>
                    </div><!-- End sidebar categories-->

                    <h3 class="sidebar-title">Publication recente</h3>
                    <div class="sidebar-item recent-posts">
                        <?php
                        if ($recentPost) {
                            foreach ($recentPost as $recent) {
                        ?>
                                <div class="post-item clearfix">

                                    <img src="/images/posts/thumb_<?php echo $recent['featured_image']; ?>" alt="">
                                    <h4><a href="blog-single.html"><?php echo ellipsize($recent['title'], 10); ?></a></h4>
                                    <time datetime="2020-01-01"><?php echo $recent['created_at']; ?></time>

                                </div>
                        <?php
                            }
                        }
                        ?>


                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>


                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>
    </div>
</section>

<?= $this->endSection() ?>