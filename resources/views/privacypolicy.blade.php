@include('partials.header')
@php
    function changeDateLanguage($month) {
        switch ((int)$month) {  // cast to int to handle leading zeros
            case 1:
                return 'Januari';
            case 2:
                return 'Februari';
            case 3:
                return 'Maart';
            case 5:
                return 'Mei';
            case 6:
                return 'Juni';
            case 7:
                return 'Juli';
            case 8:
                return 'Augustus';
            case 10:
                return 'Oktober';
            default:
                return '';
        }
    }

    // Usage example:
    $monthName = changeDateLanguage(date("m"));
    $fullDate = date('d') . ' ' . $monthName . ' ' . date('Y');
@endphp

<section id="privacy" class="resume section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Privacybeleid</h2>
        <p>Hier lees je hoe ik omga met uw persoonsgegevens wanneer je mijn portfolio bezoekt.</p>
    </div>

    <div class="container">
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12">
                <div class="resume-item pb-0 mb-4">
                    <h4>Laatst bijgewerkt: {{ $fullDate }}</h4>
                    <p>Welkom op mijn portfolio website {{ $_SERVER['HTTP_HOST'] }}. Ik hecht veel waarde aan de privacy
                        van bezoekers. In deze privacyverklaring leg ik uit hoe ik omga met persoonsgegevens.</p>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>1. Persoonsgegevens die ik verwerk</h4>
                    <p>Ik verwerk alleen persoonsgegevens die je zelf aan mij verstrekt, bijvoorbeeld via het
                        contactformulier of wanneer je me een e-mail stuurt. Dit kan onder meer gaan om:</p>
                    <ul class="pt-[15px] list-disc">
                        <li>Naam</li>
                        <li>E-mailadres</li>
                        <li>Eventuele andere gegevens die je zelf verstrekt</li>
                    </ul>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>2. Doeleinden van de gegevensverwerking</h4>
                    <p>Ik gebruik jouw gegevens uitsluitend om:</p>
                    <ul class="pt-[15px] list-disc">
                        <li>Te reageren op jouw vragen of berichten</li>
                        <li>Mijn website te verbeteren en gebruiksvriendelijker te maken (bijvoorbeeld via
                            geanonimiseerde statistieken)</li>
                    </ul>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>3. Bewaartermijn</h4>
                    <p>Ik bewaar jouw gegevens niet langer dan noodzakelijk is om de hierboven genoemde doeleinden te
                    realiseren, tenzij er een wettelijke verplichting geldt.</p>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>4. Delen van persoonsgegevens</h4>
                    <p>Ik deel jouw gegevens niet met derden, tenzij dit nodig is om te voldoen aan een wettelijke
                    verplichting.</p>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>5. Cookies en tracking</h4>
                    <p>Mijn website gebruikt alleen functionele en analytische cookies die geen inbreuk maken op jouw
                    privacy. Ik gebruik geen tracking cookies om jouw surfgedrag te volgen.</p>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>6. Jouw rechten</h4>
                    <p>Je hebt het recht om:</p>
                    <ul class="pt-[15px] list-disc">
                        <li>Jouw persoonsgegevens in te zien, te corrigeren of te verwijderen</li>
                        <li>Je eventuele toestemming voor gegevensverwerking in te trekken</li>
                        <li>Bezwaar te maken tegen de verwerking van jouw gegevens</li>
                        <li>Een klacht in te dienen bij de Autoriteit Persoonsgegevens</li>
                    </ul>
                    <p>Wil je gebruikmaken van deze rechten of heb je vragen? Neem dan contact met mij op via
                    vanwinkelmilan@gmail.com</p>
                </div>

                <div class="resume-item pb-0 mb-4">
                    <h4>7. Contactgegevens</h4>
                    <p>
                        Milan Van Winkel<br>
                        vanwinkelmilan@gmail.com<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('partials.footer')
