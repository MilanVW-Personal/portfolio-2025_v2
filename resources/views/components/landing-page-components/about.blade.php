@php
    $geboortedatum = new DateTime("2005-11-16");
    $nu = new DateTime();
    $verschil = $nu->diff($geboortedatum);
    $dynamischeLeeftijd = $verschil->y;
@endphp 
 
 <section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Over Mij</h2>
        <p> Hallo! Mijn naam is Milan Van Winkel, student aan de Thomas More Hogeschool (Campus Lier). Dit is mijn persoonlijke website waarop ik mijn professionele en persoonlijke ontwikkeling toon.<br><br>
            Je vindt hier uitgebreide informatie over mijn vaardigheden, CV, ervaringen binnen schoolprojecten, stages en werk. Ik noem ook op wat mijn hobby's & interesses zijn, samen met welke soft-skills ik al bezit. Elk onderdeel is zorgvuldig opgebouwd om een volledig beeld te geven van wie ik ben – als persoon én als toekomstig professional.<br><br>
            Gebruik de navigatiebalk bovenaan om eenvoudig door mijn portfolio te bladeren. Heb je vragen of wil je contact opnemen? Dat kan via de contactpagina of de knop hieronder. Bedankt voor je bezoek!</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
            <img src="{{url("assets/imgs/me.jpeg")}}" class="img-fluid" alt="foto_van_mezelf">
            </div>
            <div class="col-lg-8 content">
            <h2>Developer</h2>
            <p class="fst-italic py-3">
                Ik heb een grote interesse voor alles wat met computers te maken heeft. Of het nu gaat om een applicatie, systeem of website, anderen blij kunnen maken met mijn skills en vaardigheden is mijn doel!
            </p>
            <div class="row">
                <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Geboortedatum:</strong> <span>16 november 2005</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.milanvanwinkel.be</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Telefoonnummer:</strong> <span>+32 471 01 31 47</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Woonplaats:</strong> <span>Berlaar, België</span></li>
                </ul>
                </div>
                <div class="col-lg-6">
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <strong>Leeftijd:</strong> <span>{{$dynamischeLeeftijd}}</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Diploma:</strong> <span>Graduaat</span></li>
                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>r0985432@student.thomasmore.be</span></li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
</section><!-- /About Section -->