<?= $this->extend('layout/page-layout') ?>
<?= $this->section('content') ?>


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            <ol>
                <li><a href="<?php route_to('home.index') ?>">Accueil</a></li>
                <li>Blog</li>
            </ol>
        </div>

    </div>
</section><!-- End Breadcrumbs -->


<!-- ======= Blog Section ======= -->
<section id="blog" class="blog">
    <div class="container" data-aos="fade-up">

        <div class="row">

            <div class="col-lg-8 entries">

                <?php
                if ($allPost) {
                    foreach ($allPost as $all) {

                ?>
                        <article class="entry">

                            <div class="entry-img">
                                <img src="/images/posts/resized_<?php echo $all['featured_image'] ?>" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <a href="blog-single.html"><?php echo $all['title'] ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01"><?php echo $all['created_at'] ?></time></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?php echo ellipsize($all['content'], 10) ?>
                                </p>
                                <div class="read-more">
                                    <a href="blog-single.html">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->
                <?php
                    }
                }
                ?>


                <div class="blog-pagination">
                    <ul class="justify-content-center">
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>

            </div><!-- End blog entries list -->

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
                                    <h4><a href="blog-single.html"><?php echo $recent['title']; ?></a></h4>
                                    <time datetime="2020-01-01"><?php echo $recent['created_at']; ?></time>

                                </div>
                        <?php
                            }
                        }
                        ?>


                    </div><!-- End sidebar recent posts-->

                    <h3 class="sidebar-title">Tags</h3>
                    <div class="sidebar-item tags">
                        <ul>
                            <li><a href="#">App</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Mac</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Studio</a></li>
                            <li><a href="#">Smart</a></li>
                            <li><a href="#">Tips</a></li>
                            <li><a href="#">Marketing</a></li>
                        </ul>
                    </div><!-- End sidebar tags-->

                </div><!-- End sidebar -->

            </div><!-- End blog sidebar -->

        </div>

    </div>
</section><!-- End Blog Section -->

<?= $this->endSection() ?>