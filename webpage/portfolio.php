<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <!-- <h2><span>01 </span>ABOUT US</h2> -->
            <div class="row">
                <h3>Our <span>Portfolio</span></h3>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <?php
                    $rowPortCat = getRowPortofolioCategory("SELECT nama_port_cat FROM portofolio_category")
                    ?>
                    <?php foreach ($rowPortCat as $rPc) : ?>
                        <li data-filter=".<?= $rPc['nama_port_cat']; ?>"><?= $rPc['nama_port_cat']; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <?php
            $rowPort = getRowPortofolio("SELECT * FROM `portofolio`")
            ?>
            <?php foreach ($rowPort as $rPort) : ?>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item <?= $rPort['nama_port_cat']; ?>">
                    <img src="cms/portofolio/img/<?= $rPort['gambar']; ?>" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <div class="d-flex flex-row left">
                            <div class="d-flex flex-column">
                                <h4><?= $rPort['judul']; ?></h4>
                                <p><?= $rPort['keterangan']; ?></p>
                            </div>

                            <div>
                                <a href="cms/portofolio/img/<?= $rPort['gambar']; ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $rPort['judul']; ?>">
                                    <i class='bx bxs-plus-circle'></i>
                                </a>
                            </div>
                        </div>
                        <!-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </div>
</section>