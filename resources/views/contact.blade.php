@include("partials/header")

<div class="contact-card text-white mx-[5%] my-[5%] p-8 rounded-2xl shadow-xl border border-white/10 bg-gradient-to-br from-[#1e1e2f]/70 to-[#2d2d44]/70">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 contact-card-content">
        @include("components/contactPage-form")
        @include("components/contactPage-info")
        
    </div>
</div>

@include("partials/footer")