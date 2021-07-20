<section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <!-- <h2><span>03 </span>Clients</h2> -->
            <div class="row">
                <h3>Our <span>Clients</span></h3>
                <!-- <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p> -->
            </div>
        </div>

        <div class="row d-flex align-items-start flex-row">
            <?php
            $rowClient = getQueryClient("SELECT * FROM `client`");
            ?>
            <?php foreach ($rowClient as $rowsClient) : ?>
            <div class="client-box col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
                <img src="cms/client/img/<?= $rowsClient['gambar']; ?>" class="img-fluid" alt="<?= $rowsClient['nama']; ?>">
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>