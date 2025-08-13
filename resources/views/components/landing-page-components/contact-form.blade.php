<section id="contact" class="contact section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Heb je een vraag over een bepaald onderdeel of wil je me gewoonweg kunnen bereiken, dan kan dat via onderstaand formulier.</p>
    </div>  

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
            <div class="info-wrap">
                <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Adres</h3>
                        <p>Pastorijstraat 30, 2590 Berlaar</p>
                    </div>
                    </div>  

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Telefoonnummer</h3>
                        <p>+32 (0) 471 01 31 47</p>
                    </div>
                    </div>  

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>E-mailadres</h3>
                        <p>vanwinkelmilan@gmail.com</p>
                    </div>
                    </div>  

                    <iframe class="border-0 w-full h-[270px]" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3424.023857091493!2d4.662168812934142!3d51.11899537160969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c157d068d0d229%3A0x564aad978dd7432e!2sPastorijstraat%2030%2C%202590%20Berlaar!5e1!3m2!1sen!2sbe!4v1748185346926!5m2!1sen!2sbe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form action="{{url("assets/scripts/email-script.php")}}" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <label for="name-field" class="pb-2">Naam</label>
                            <input type="text" name="name" id="name-field" class="form-control" required="">
                        </div>

                        <div class="col-md-6">
                            <label for="email-field" class="pb-2">E-mailadres</label>
                            <input type="email" class="form-control" name="email" id="email-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="subject-field" class="pb-2">Onderwerp</label>
                            <input type="text" class="form-control" name="subject" id="subject-field" required="">
                        </div>

                        <div class="col-md-12">
                            <label for="message-field" class="pb-2">Bericht</label>
                            <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Aan het verzenden...</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Je bericht is succesvol verzonden!</div>

                            <button type="submit">Verzenden</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>