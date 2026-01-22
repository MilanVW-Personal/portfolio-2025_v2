<div>
    <h3 class="text-xl font-bold mb-4">Neem contact op</h3>
    <form method="POST" action="{{ url('/contact') }}">
        @csrf
        <div class="mb-4">
            <label for="name" class="block mb-1 font-semibold">Voornaam</label>
            <input type="text" placeholder="bv. Jan" id="name" name="name" class="w-full p-2 rounded bg-white/10 border border-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="name" class="block mb-1 font-semibold">Naam</label>
            <input type="text" placeholder="bv. Peeters" id="name" name="name" class="w-full p-2 rounded bg-white/10 border border-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">E-mailadres</label>
            <input type="email" placeholder="bv. jan.peeters@mail.com" id="email" name="email" class="w-full p-2 rounded bg-white/10 border border-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block mb-1 font-semibold">Bevestig e-mailadres</label>
            <input type="email" id="email" placeholder="Herhaal e-mailadres" name="email" class="w-full p-2 rounded bg-white/10 border border-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="message" class="block mb-1 font-semibold">Vraag</label>
            <textarea id="message" name="message" placeholder="Stel hier je vraag" rows="5" class="w-full p-2 rounded bg-white/10 border border-white/20 focus:outline-none focus:ring-2 focus:ring-blue-500" required></textarea>
        </div>
        <button type="submit" class="uppercase font-bold w-full bg-slate-700 h-[50px] flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-slate-500 before:to-slate-400 before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white">Verzenden</button>
    </form>
</div>