<?php
/** Inner-page banner + breadcrumb. Set $pageHeading before including. */
$pageHeading = $pageHeading ?? ($seo['title'] ?? $site['name']);
?>
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/shapes/page-header-bg.png);"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-10 col-xl-9">
                    <div class="page-header__content">
                        <h1 class="page-header__title" data-aos="fade-up" data-aos-duration="900"><?= e($pageHeading) ?></h1>
                        <nav aria-label="breadcrumb">
                            <ul class="findox-breadcrumb list-unstyled" data-aos="fade-up" data-aos-duration="900" data-aos-delay="100">
                                <li>
                                    <a href="index.php"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <?php if (!empty($breadcrumbParent)): ?>
                                    <li class="findox-breadcrumb__sep" aria-hidden="true">
                                        <i class="fas fa-chevron-right"></i>
                                    </li>
                                    <li>
                                        <a href="<?= e($breadcrumbParent['url']) ?>"><?= e($breadcrumbParent['title']) ?></a>
                                    </li>
                                <?php endif; ?>
                                <li class="findox-breadcrumb__sep" aria-hidden="true">
                                    <i class="fas fa-chevron-right"></i>
                                </li>
                                <li class="active" aria-current="page">
                                    <span><?= e($pageHeading) ?></span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <img src="assets/images/shapes/page-header-shape-1-1.png" alt="" class="page-header__shape" aria-hidden="true">
    </section>
