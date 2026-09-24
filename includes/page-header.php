<?php
/** Inner-page banner + breadcrumb. Set $pageHeading before including. */
$pageHeading = $pageHeading ?? ($seo['title'] ?? $site['name']);
?>
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/shapes/page-header-bg.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-10 col-xl-9 page-header__col">
                    <div class="page-header__content">
                        <h1 class="page-header__title" data-aos="fade-left" data-aos-anchor-placement="top-bottom" data-aos-duration="1300"><?= e($pageHeading) ?></h1>
                        <ul class="findox-breadcrumb list-unstyled" data-aos="fade-right" data-aos-anchor-placement="top-bottom" data-aos-duration="1300" data-aos-delay="100">
                            <li><a href="index.php">Home</a></li>
                            <li><span><?= e($pageHeading) ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header__image">
            <div class="page-header__image__main" style="background-image: url(assets/images/resources/page-header-1-1.jpg);"></div>
        </div>
        <img src="assets/images/shapes/page-header-shape-1-1.png" alt="" class="page-header__shape">
    </section>
