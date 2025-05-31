{{-- De cookie banner --}}
<div id="cookieBanner" class="cookie-banner fixed bottom-0 left-0 right-0 bg-[var(--heading-color)] text-[var(--contrast-color)] px-4 py-4 flex flex-col md:flex-row gap-4 md:gap-0 justify-between items-start md:items-center z-[1000] shadow-md">
  <div class="cookie-banner-text flex-1 text-sm">
    <p class="m-0">
      We gebruiken cookies om je ervaring te verbeteren. Door op "Accepteren" te klikken, ga je akkoord met ons gebruik van cookies. 
      Lees meer in ons 
      <a href="{{url('/privacy')}}" target="_blank" class="text-[var(--accent-color)] underline">Privacybeleid</a> en 
      <a href="{{url("/cookies")}}" target="_blank" class="text-[var(--accent-color)] underline">Cookiebeleid</a>.
    </p>
  </div>
  <div class="cookie-banner-buttons flex flex-col md:flex-row gap-2 md:gap-2 w-full md:w-auto justify-end md:justify-start">
    <button class="bg-[var(--accent-color)] text-[var(--contrast-color)] px-3 py-2 rounded transition hover:opacity-90 acceptAllKnop text-xs md:text-sm">Alle cookies aanvaarden</button>
    <button class="bg-[var(--accent-color)] text-[var(--contrast-color)] px-3 py-2 rounded transition hover:opacity-90 acceptEssentialKnop text-xs md:text-sm">Alleen essentiële cookies aanvaarden</button>
    <button class="bg-transparent border border-[var(--accent-color)] text-[var(--accent-color)] px-3 py-2 rounded transition hover:bg-[var(--accent-color)] hover:text-[var(--contrast-color)] rejectAllKnop text-xs md:text-sm">Alle cookies afwijzen</button>
  </div>
</div>
