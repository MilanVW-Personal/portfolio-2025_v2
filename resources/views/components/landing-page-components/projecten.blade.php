@php
   use Illuminate\Support\Str;
@endphp

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Projecten</h2>
            <p>Hieronder kan je alle projecten, waar ik al aan gewerkt heb, bekijken, gerangschikt van meest recent naar oudst.</p>
        </div><!-- End Section Title -->
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">Alles</li>
                <li data-filter=".filter-website">Website</li>
                <li data-filter=".filter-app">Applicatie</li>
                <li data-filter=".filter-platform">Platform</li>
                <li data-filter=".filter-game">Games</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                @foreach($projecten as $pr) 
                    @php
                        $type = "";
                        $link = "";
                        if (Str::contains($pr->link, ".be"))
                            $type = "website";
                        else if (Str::contains($pr->projectName, "platform", ignoreCase: true))
                            $type = "platform";
                        else if (Str::contains($pr->projectName, "app", ignoreCase: true))
                            $type = "app";
                        else if (Str::contains($pr->projectName, "game", ignoreCase: true) || Str::contains($pr->projectName, "spel", ignoreCase: true))
                            $type = "game";
                        else 
                            $type = "website";

                        if ($pr->link !== "/") {
                            if (!Str::contains($pr->link, "https://"))
                                $link = "https://".$pr->link;
                            else 
                                $link = $pr->link;
                        }
                   
                    @endphp
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{$type}}">
                        <div class="portfolio-content h-100">
                        <img src="{{url($pr->thumbnailImage)}}" class="img-fluid w-[488px] h-[281px] object-cover" alt="{{$pr->projectName}}">
                        <div class="portfolio-info">
                            <h4>{{$pr->projectName}}</h4>
                            <p class="px-2">{{ $pr->shortDesc }}</p>
                            <a href="{{url($pr->thumbnailImage)}}" title="{{ $pr->projectName }}" data-gallery="portfolio-gallery-website" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="{{$link}}" title="Bekijk dit project live" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- /Portfolio Section -->