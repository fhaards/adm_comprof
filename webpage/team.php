<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <!-- <h2><span>04 </span>The Team</h2> -->
            <div class="row">
                <h3>Meet the <span>Team</span></h3>
                <p>People who are Very Qualified, Great and Hardworking so that this company is always growing and successful.</p>
            </div>
        </div>

        <div class="row">
            <?php
            $rowTeam = getQueryTeam("SELECT * FROM `team` WHERE jabatan IN ('Kepala Divisi','Direktur')");
            $rowTeamMore = getQueryTeam("SELECT * FROM `team` WHERE jabatan NOT IN ('Kepala Divisi','Direktur')");
            ?>
            <?php foreach ($rowTeam as $rowsTeam) : ?>
                <div class="col-lg-3 col-md-3 col-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="cms/team/img/<?= $rowsTeam['gambar']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?= $rowsTeam['nama']; ?></h4>
                            <span><?= $rowsTeam['jabatan']; ?></span>
                            <?php if ($rowsTeam['difisi'] == '') : ?>
                            <?php else : ?>
                                <p><?= $rowsTeam['difisi']; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
        <div id="team-more" class="row">
            <?php foreach ($rowTeamMore as $rowsTeamMore) : ?>
                <div class="col-lg-3 col-md-3 col-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="member-img">
                            <img src="cms/team/img/<?= $rowsTeamMore['gambar']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4><?= $rowsTeamMore['nama']; ?></h4>
                            <span><?= $rowsTeamMore['jabatan']; ?></span>
                            <p><?= $rowsTeamMore['difisi']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>



    <div class="d-flex w-100 align-items-center justify-content-center mt-5">
        <a class="show-more-btn" href="javascript:void(0)" id="team-more-toggle">
            Show More Our Team <i class='bx bx-down-arrow-alt'></i>
        </a>
    </div>

    </div>
</section>