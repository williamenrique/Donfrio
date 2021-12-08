<?php 
head($data);
// getModal('modals',$data);

    // include 'parts/banner.php';
    // include 'parts/about.php';
    // include 'parts/services.php';
    // include 'parts/experts.php';
    // include 'parts/testimonials.php';
    // include 'parts/testimonials1.php';
    // include 'parts/blog.php';
    ?>

<!--header-->
<header class="site-header">
    <div class="container">
        <nav class="navegacion">
            <h1>
                <a class="" href="index.html">
                <i class="fas fa-tools mr-3" aria-hidden="true"></i><?= $data['page_titulo']?></a>
            </h1>
            <div class="link-menu">
                <a class="" href="<?= base_url()?>">Inicio <span class="sr-only">(current)</span></a>
                <a class="" href="<?= base_url()?>pages/about">Nosotros</a>
                <a class="" href="<?= base_url()?>pages/services">Servicios</a>
                <a class="" href="<?= base_url()?>pages/contact">Contactenos</a>
            </div>
        </nav>
    </div>
</header>
<!--//header-->
    <?php
footer($data) ?>