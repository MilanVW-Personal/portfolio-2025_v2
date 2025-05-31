@include('partials/header')

<div class="cv-card text-white mx-[5%] my-[5%] p-8 rounded-2xl shadow-xl border border-white/10 bg-gradient-to-br from-[#1e1e2f]/70 to-[#2d2d44]/70">
    <h2 class="text-2xl font-bold text-center uppercase mb-8">Curriculum Vitae</h2>

    <div class="flex flex-col lg:flex-row gap-10 cv-items">
        {{-- Left Column --}}
        <div class="w-full lg:w-2/3 space-y-10">
            @include("components/cv-sections/opleidingen")
            @include("components/cv-sections/experiences")
            @include("components/cv-sections/skills")
        </div>

        @include("components/cv-sections/right-column")
    </div>
</div>

@include('partials/footer')
