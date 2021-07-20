<section id="about" class="about">
    <div class="container ">

        <div class="section-title">
            <!-- <h2><span>01 </span>ABOUT US</h2> -->
            <div class="row">
                <h3>Who <span>We Are</span></h3>

            </div>
        </div>

        <div id="about-full" class="row d-flex justify-content-center align-items-center">
            <div class="row col-lg-12 d-flex justify-content-center align-items-center">
                <div class="col-lg-6 p-5 d-flex justify-content-center align-items-center" data-aos="fade-down" data-aos-delay="100">
                    <img src="cms/company/img/<?= $getRowQueryCompany['comp_logo2']; ?>" class="img-fluid" lt="">
                </div>
                <div class="about-stories-1 row d-flex align-items-center justify-content-center mb-5" data-aos="fade-up" data-aos-delay="200">
                    <p class="about-stories-paragraph col-lg-8">
                        <span>PT. Adidaya Duta Mitrakom</span> merupakan perusahaan yang ditujukan untuk mencakup berbagai bidang usaha yang secara
                        prospektif dapat menjadikan unggulan atau kompetensi sehingga dapat melayani kebutuhan customer secara lebih komprehensif
                        Sebagai upaya untuk mendapatkan tingkat pelayanan
                        (services) yang memadai dan dapat diandalkan (reliable),
                        <span>PT. Adidaya Duta Mitrakom</span> berupaya untuk memenuhi
                        permintaan sesuai dengan persyaratan yang ditetapkan
                        oleh customer.
                    </p>
                </div>
                <div class="about-more">
                    <div class="about-stories-2 row d-flex align-items-center justify-content-center mb-5">
                        <div class="col-lg-5  about-stories-text">
                            <p class="about-stories-paragraph"><span>PT. Adidaya Duta Mitrakom</span> berupaya untuk dapat
                                memberikan kontribusi posistif terhadap main business
                                customer, sehingga dapat turut serta dalam membangun
                                citra customer. Untuk hal tersebut, maka <span>PT. Adidaya Duta Mitrakom</span> selalu berusaha dekat dengan customer.
                            </p>
                        </div>
                        <div class="col-lg-2"></div>
                        <div class="col-lg-5 image-stories">
                            <img src="assets/img/img_about1.jpg" class="img-fluid  d-flex">
                        </div>
                    </div>
                    <div class="about-stories-3 d-flex row align-items-center justify-content-center flex-row-reverse  mb-5">
                        <div class="col-lg-6 about-stories-text">
                            <p class="about-stories-paragraph"><span>PT. Adidaya Duta Mitrakom</span> memiliki Team Work
                                dan Tenaga Ahli yang professional yand didukung dengan
                                Personal Experience yang Qualified di bidangnya masingmasing sehingga mampu untuk saling mendukung dalam
                                mewujudkan kepuasan konsumen.
                            </p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 image-stories">
                            <img src="assets/img/img_about2.jpg" class="img-fluid d-flex">
                        </div>
                    </div>
                    <div class="about-stories-4 row d-flex align-items-center justify-content-center mb-5">
                        <div class="col-lg-6 about-stories-text">
                            <p class="about-stories-paragraph"><span>PT. Adidaya Duta Mitrakom</span> selalu bertanggung jawab
                                dan berusaha memberikan pelayanan yang terbaik kepada
                                partner kerja dalam memberikan solusi-solusi di bidang
                                IT, public safety, trading, mechanical electrical, general
                                contractor, dan penyediaan manpower di dalam sektor
                                bisnis perusahaan swasta dan sektor pemerintahan. <br>
                                Menjadi suatu perusahaan yang dapat Go international
                                dengan bekerjasama para pihak - pihak perusahaan lain
                                baik dari dalam negeri ataupun luar negeri.
                            </p>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 image-stories">
                            <img src="assets/img/img_about3.jpg" class="img-fluid hidden-xs hidden-md">
                        </div>
                    </div>

                    <div class="row d-flex align-items-center justify-content-center about-visi-misi">
                        <div class="accordion-list col-lg-6">
                            <ul>
                                <li class="border-r-10">
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>VISI</span><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <hr>
                                        <?= htmlspecialchars_decode($getRowQueryCompanyAbout['comp_visi']); ?>
                                    </div>
                                </li>
                                <li class="border-r-10 accordion-list2">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed">
                                        <span>MISI</span>
                                        <i class="bx bx-chevron-down icon-show"></i>
                                        <i class="bx bx-chevron-up icon-close"></i>
                                    </a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <hr>
                                        <ul>
                                            <li>
                                                <?= htmlspecialchars_decode($getRowQueryCompanyAbout['comp_misi']); ?>
                                            </li>

                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="row d-flex flex-row justify-content-center align-items-center end-about">
                        <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                            <img src="cms/company/img/<?= $getRowQueryCompany['comp_logo2']; ?>"  class="img-fluid mb-5" lt="">
                            <h1>
                                INTERIOR | CIVIL | ME | OFFICE FURNITURE | QUALITY NETWORK SERVICE | SECURITY SYSTEM | SOFTWARE DEVELOPMENT | HARDWARE
                                | TRADING | MANPOWER OUTSOURCING
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex align-items-center justify-content-center mt-5">
            <div class="col-lg-10 d-flex align-items-center justify-content-center">
                <a class="show-more-btn" href="javascript:void(0)" id="about-more-toggle">
                    Show More <i class='bx bx-down-arrow-alt'></i>
                </a>
            </div>
        </div>

        <!-- <div id="about-full" class="row mb-5 about-header d-flex border-r-10 justify-content-center align-items-center">
            <div class="col-lg-6 p-5 d-flex justify-content-center align-items-center">
                <img src="assets/img/brand/Based_Logo_longtext_subtitle.png" class="img-fluid" lt="">
            </div>
            <div class="row justify-content-center align-items-center mb-5">
                <div class="col-lg-12 about-text" data-aos="fade-up" data-aos-delay="200">
                    <p class="about-stories">
                        PT. Adidaya Duta Mitrakom merupakan perusahaan yang ditujukan untuk mencakup berbagai bidang usaha yang secara
                        prospektif dapat menjadikan unggulan atau kompetensi sehingga dapat melayani kebutuhan customer secara lebih komprehensif
                    </p>
                    <p class="about-stories"> Sebagai upaya untuk mendapatkan tingkat pelayanan
                        (services) yang memadai dan dapat diandalkan (reliable),
                        PT. Adidaya Duta Mitrakom berupaya untuk memenuhi
                        permintaan sesuai dengan persyaratan yang ditetapkan
                        oleh customer.
                    </p>
                    <div id="about-more" data-aos="fade-up">
                        <div class="mb-5">
                            <p class="about-stories">PT. Adidaya Duta Mitrakom berupaya untuk dapat
                                memberikan kontribusi posistif terhadap main business
                                customer, sehingga dapat turut serta dalam membangun
                                citra customer. Untuk hal tersebut, maka PT ADIDAYA DUTA
                                MITRAKOM selalu berusaha dekat dengan customer.
                            </p>
                            <p class="about-stories"> PT. Adidaya Duta Mitrakom memiliki Team Work
                                dan Tenaga Ahli yang professional yand didukung dengan
                                Personal Experience yang Qualified di bidangnya masingmasing sehingga mampu untuk saling mendukung dalam
                                mewujudkan kepuasan konsumen.
                            </p>
                            <p class="about-stories">PT. Adidaya Duta Mitrakom selalu bertanggung jawab
                                dan berusaha memberikan pelayanan yang terbaik kepada
                                partner kerja dalam memberikan solusi-solusi di bidang
                                IT, public safety, trading, mechanical electrical, general
                                contractor, dan penyediaan manpower di dalam sektor
                                bisnis perusahaan swasta dan sektor pemerintahan dan
                                menjadi suatu perusahaan yang dapat Go international
                                dengan bekerjasama para pihak - pihak perusahaan lain
                                baik dari dalam negeri ataupun luar negeri.
                            </p>
                        </div>
                        <div class="accordion-list">
                            <ul>
                                <li class="border-r-10">
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>VISI</span><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p class="text-justify">
                                            Dalam era efisiensi dan efektifitas saat ini, <strong>PT. Adidaya Duta Mitrakom</strong> mencanangkan tujuan perusahaan untuk dapat
                                            menjadikan solusi bagi customer dalam memenuhi kebutuhan
                                            dan permintaan, sesuai dengan persyaratan Kualitas, Harga
                                            dan Waktu sehingga customer dapat lebih fokus terhadap main
                                            business-nya.
                                            Secara lebih progresif, <strong>PT. Adidaya Duta Mitrakom</strong> dapat
                                            menjadi mitra terpercaya dan solusi dalam Bidang-Bidang
                                            Keahlian yang diperlukan konsumen
                                        </p>
                                    </div>
                                </li>
                                <li class="border-r-10">
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>MISI</span><i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <ul>
                                            <li></li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Membentuk SDM yang bekerja keras, serius, terukur, jujur dan bertanggung-jawab dalam melaksanakan tugas.</p>
                                            </li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Menjalin dan menjaga hubungan yang harmonis serta kekompakan SDM / Team Work.</p>
                                            </li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Melaksanakan pekerjaan dengan penuh tanggung-jawab, tepat waktu dan dengan hasil yang baik dan benar sesuai spesifikasi teknis pekerjaan.</p>
                                            </li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Berpikir dan bertindak positif, komunikatif dan inovatif serta kreatif dalam menghadapi setiap kendala pekerjaan internal maupun external.</p>
                                            </li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Memperhatikan dan meningkatkan kemampuan manajemen dan teknis SDM secara berkesinambungan dari waktu ke waktu.</p>
                                            </li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Penyusunan Program yang terencana dengan baik (well organized) untuk ukuran kesuksesan melalui kepuasan konsumen.</p>
                                            </li>
                                            <li class="p-1 d-flex flex-row">
                                                <span class="misi-icon">+</span>
                                                <p>Mendapatkan citra baik dalam pelayanan jasa saat ini dan di masa mendatang.</p>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="d-flex w-100 align-items-center justify-content-center mt-5">
                        <a class="show-more-btn" href="javascript:void(0)" id="about-more-toggle">
                            Show More <i class='bx bx-down-arrow-alt'></i>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->



</section>