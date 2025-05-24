{{-- Right Column--}}
<div class="w-full lg:w-1/3 space-y-8">
{{-- Profile photo--}} 
<div class="flex justify-center">
    <img src="{{url('assets/imgs/me.jpeg')}}" class="rounded-2xl w-[15rem] h-[15rem] object-cover border" />
</div>

{{-- General Info--}} 
<section>
    <h3 class="text-xl font-semibold border-b pb-1 mb-2">Algemene gegevens</h3>
    <ul class="text-sm space-y-1">
        <li><strong>Naam:</strong> Van Winkel</li>
        <li><strong>Voornaam:</strong> Milan</li>
        <li><strong>Geboortedatum:</strong> 16 november 2005</li>
        <li><strong>Adres:</strong> Pastorijstraat 30</li>
        <li><strong>Woonplaats:</strong> 2590 Berlaar</li>
    </ul>
</section>

{{-- Hobbies--}}
<section>
    <h3 class="text-xl font-semibold border-b pb-1 mb-2">Hobby's</h3>
    <ul class="text-sm space-y-1">
        <li>🎮 Gamen (Alleen, met vrienden)</li>
        <li>📖 Lezen</li>
        <li>🥾 Wandelen</li>
        <li>🎵 Muziek</li>
    </ul>
</section>

{{-- Interests--}}
<section>
    <h3 class="text-xl font-semibold border-b pb-1 mb-2">Interesses</h3>
    <ul class="text-sm space-y-1">
        <li>🧠 Oplossen van computer gerelateerde problemen</li>
        <li>💻 Computers (werking + opbouw)</li>
        <li>🛠️ Maken van eigen applicaties</li>
    </ul>
</section>

{{-- Skills--}} 
<section>
    <h3 class="text-xl font-semibold border-b pb-1 mb-2">Vaardigheden</h3>
    @php
        $skills = [
            ['label' => 'Nederlands', 'value' => 95],
            ['label' => 'Engels', 'value' => 95],
            ['label' => 'Communicatie', 'value' => 70],
            ['label' => 'Concentratie', 'value' => 75],
        ];
    @endphp

    @foreach($skills as $skill)
        <div class="mb-[1rem]">
        <p class="text-sm font-medium">{{$skill['label']}}: {{$skill['value']}}%</p>
        <div class="w-full bg-gray-200 rounded-full h-3">
            <div class="bg-orange-500 h-3 rounded-full" style="width: {{$skill['value']}}%"></div>
        </div>
    </div>
@endforeach
</section>
</div> 