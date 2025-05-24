@include("partials/header")

<div class="project-container grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-[5%] py-[5%]">
    @foreach($projects as $pr)
        <div class="text-white p-6 rounded-2xl shadow-xl border border-white/10 bg-gradient-to-br from-[#1e1e2f]/70 to-[#2d2d44]/70 project-card">
            <div class="py-2 rounded-2xl">
                <img src="{{ url($pr->thumbnailImage) }}" alt="project1_ecosy" width="650" height="150" class="object-cover w-full h-[150px] rounded-xl"/>
            </div>
            <h4 class="text-lg font-semibold mt-4">{{ $pr->projectName }}</h4>
            <p class="text-sm py-3">{{ $pr->shortDesc }}</p>
            <p class="text-xs text-gray-400">{{ $pr->start->format("d F Y").' - '. $pr->end->format("d F Y") }}</p>
            <a href="https://{{ $pr->link }}" class="{{ $pr->link == '/' ? 'hidden' : "" }} text-xs text-gray-400" target="_blank">Bekijk dit project live op <span class="underline">{{ $pr->link }}</span></a>
        </div>
    @endforeach
</div>


@include("partials/footer")