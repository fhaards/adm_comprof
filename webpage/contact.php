<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
        <?php 
            $address = $query_company['comp_address'];
            $email = $query_company['comp_email'];
            $phone1 = $query_company['comp_phone'];
            $phone2 = $query_company['comp_phone2'];
        ?>
        <div class="section-title">
            <!-- <h2><span>04 </span>Contact</h2> -->
            <div class="row">
                <h3>Get in touch <span>With Us</span></h3>
                <p>Want to get in touch ? We'd love to hear from you. Here's how you can reach us ... </p>
            </div>
        </div>

        <div class="row mb-3 d-flex align-items-start flex-row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4 d-flex flex-column">
                <div class="col-lg-12 info-box d-flex p-3 border-r-10" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <i class="bx bx-map"></i>
                    </div>
                    <div class="info-box-text">
                        <h3>Address</h3>
                        <p> <?php echo $address;?></p>
                    </div>
                </div>
                <div class="col-lg-12 info-box d-flex  p-3 border-r-10" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="info-box-text">
                        <h3>Email</h3>
                        <p><?php echo $email;?></p>
                    </div>
                </div>
                <div class="col-lg-12 info-box d-flex p-3 border-r-10" data-aos="fade-up" data-aos-delay="200">
                    <div>
                        <i class="bx bx-phone-call"></i>
                    </div>
                    <div class="info-box-text">
                        <h3>Phone</h3>
                        <p><?php echo $phone1;?> <br> <?php echo $phone2;?><br></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 d-flex">
                <form action="send_mail.php" method="post" role="form" class="php-email-form border-r-10 w-100">
                    <p>Give us a Message</p>
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><br><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 border-r-10">
                <iframe class="mb-4 mb-lg-0 border-r-10" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
            </div>

        </div>

    </div>
</section>