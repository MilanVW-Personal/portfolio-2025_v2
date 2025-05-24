@include('partials.header')

<div class="h-fit w-auto text-white mx-[5%] my-[5%] p-8 rounded-2xl shadow-xl border border-white/10 bg-gradient-to-br from-[#1e1e2f]/70 to-[#2d2d44]/70 hero-section">
    <div class="flex flex-col lg:flex-row justify-evenly gap-5 items-center hero-content">
        <div class="my-10 mx-5 text-med">
            <h6 class="text-[25px] uppercase mb-5 font-semibold">Welkom op mijn portfolio</h6>
            Hallo! Mijn naam is Milan Van Winkel, student aan de Thomas More Hogeschool (Campus Lier). Dit is mijn persoonlijke website waarop ik mijn professionele en persoonlijke ontwikkeling toon.<br><br>
            Je vindt hier uitgebreide informatie over mijn vaardigheden, CV, ervaringen binnen schoolprojecten, stages en werk. Daarnaast vertel ik ook over mijn hobby’s, interesses en drijfveren. Elk onderdeel is zorgvuldig opgebouwd om een volledig beeld te geven van wie ik ben – als persoon én als toekomstig professional.<br><br>
            Gebruik de navigatiebalk bovenaan om eenvoudig door mijn portfolio te bladeren. Heb je vragen of wil je contact opnemen? Dat kan via de contactpagina of de knop hieronder. Bedankt voor je bezoek!
        </div>
        <img src="{{ url('assets/imgs/me.jpeg') }}" class="rounded-2xl w-full max-w-[300px] mt-10 lg:mt-[35px]" alt="Portret van Milan Van Winkel">
    </div>
    <div class="text-center">
        <a href="/contact" class="uppercase font-bold mt-5 w-auto px-6 py-3 bg-slate-700 inline-flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-slate-500 before:to-slate-400 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">
            Neem contact op
        </a>
    </div>
</div>


@include('components/homepage-cards')

@include('partials.footer')
