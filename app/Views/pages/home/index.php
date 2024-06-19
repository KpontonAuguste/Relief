<?= $this->extend('layout/page-layout') ?>
<?= $this->section('content') ?>



<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('/img/slide/slide1.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animated fadeInDown">Bienvenue sur le site de <span>ARS</span></h2>
                            <p class="animated fadeInUp">ARS est une ONG Nationale créée en 2014 par des anciens salariés Humanitaire en travaille en Centrafrique. A cette époque le contexte centrafricain était très difficile et plusieurs zones entières restaient inaccessibles aux ONG internationales vue leur principe de sécurité.
                                ARS intervient dans plusieurs domaines à l’instar de la santé, la nutrition, le WASH, l’éducation, etc…
                            </p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Lire plus...</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('/img/slide/slide2.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animated fadeInDown">Projet IRCap</h2>
                            <p class="animated fadeInUp">Sur base de l’autodiagnostic et du plan d’action établi, un renforcement des capacités d’ARS est mis en œuvre principalement dans la gestion finance et la résilience de l’organisation mais aussi dans la gestion logistique/RH/administrative sur base d’un diagnostic réalisé à distance par une consultante experte en ces domaines, confirmé dans les premiers jours de son intervention en présentiel et validé par ARS.</p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Lire plus...</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url('/img/slide/slide3.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animated fadeInDown">Intervention Humanitaire dans trois (3) aires de santé du District sanitaire de Bégoua.</h2>
                            <p class="animated fadeInUp">L’intervention humanitaire dans le DS de Bégoua a débuté par des formations notamment :</p>
                            <a href="#about" class="btn-get-started animated fadeInUp scrollto">Lire Plus...</a>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Ils nous font confiance</h2>
        </div>
        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="/img/client/logo_CHF.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="/img/client/logo_UNICEF.png" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="/img/client/logo_Ministere.jpg" class="img-fluid" alt=""></div>
                <div class="swiper-slide"><img src="/img/client/logo_BIOFORCE.png" class="img-fluid" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>
</section><!-- End Clients Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg">
    <div class="container">

        <div class="section-title">
            <h2>Nos interventions</h2>
            <p>Nous intervenons dans differents secteurs d'activites, notamment la Sante, La Nutrition et l'Hygiene. Voici des articles sur nos realisations</p>
        </div>

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-img">
                        <img src="/img/service1.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">REAMENAGEMENT D’UN FORAGE (soufflage et insertion d’une pompe VERGNET) </a></h5>
                        <p class="card-text">Réhabilitations et constructions effectuées dans la mise en œuvre du projet IRCap</p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lire Plus... </a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-img">
                        <img src="/img/service2.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Activités de Nutrition dans la sous-préfecture d’AMADA GAZA et Berberati</a></h5>
                        <p class="card-text">Cette activité connaissait la participation des membres de la communauté, en particulier les femmes enceintes et allaitantes, et les thématiques portaient sur comment manger varié et équilibré (cinq étoiles) à partir des aliments localement rencontrés. </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lire Plus... </a></div>
                    </div>
                </div>

            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-img">
                        <img src="/img/service3.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">Formation des agents de santé sur la PECIMA (GAMBOULA)</a></h5>
                        <p class="card-text">Cette formation s’est faite en collaboration avec l’équipe cadre de la région sanitaire n°2 (Membéré Kadéi) ainsi que celle du district sanitaire de Gamboula.
                            Cette formation a été plus pratique que théorique avec des échanges d’expérience.
                        </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lire Plus... </a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-img">
                        <img src="/img/service4.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="">QUELQUES CHALLENGES</a></h5>
                        <p class="card-text">Deux grands challenges restent à souligner dans la sous-préfecture à savoir l’insécurité Quasi permanant sur les axes et le mauvais état des routes.
                            Les grands défis dans la mise en œuvre des projets en République Centrafricaine sont l’insécurité sur certains axes ainsi que l’état des routes très dégradées sur des axes à besoins humanitaires accrus.
                        </p>
                        <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Lire Plus... </a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Services Section -->

<!-- ======= Contact Us Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Contactez-nous</h2>
        </div>

        <div class="row">

            <div class="col-lg-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="info-box">
                    <i class="bx bx-map"></i>
                    <h3>Notre adresse</h3>
                    <p>A108 Adam Street, New York, NY 535022</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                <div class="info-box">
                    <i class="bx bx-envelope"></i>
                    <h3>Nos emails</h3>
                    <p>info@example.com<br>contact@example.com</p>
                </div>
            </div>

            <div class="col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <div class="info-box ">
                    <i class="bx bx-phone-call"></i>
                    <h3>Nos contacts</h3>
                    <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
            </div>

            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <form action="#" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-lg-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Votre Message"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Us Section -->

<?= $this->endSection() ?>