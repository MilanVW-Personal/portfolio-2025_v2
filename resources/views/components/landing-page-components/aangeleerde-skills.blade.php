<section id="learned_skills" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Aangeleerde skills</h2>
        <p>Hier zie je alle aangeleerde hard-skills die ik gedurende de opleiding heb meegekregen, en daarbuiten.</p>
    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @foreach ($aangeleerdeSkills as $skill)
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0"><img src="{{ url($skill->icon) }}"
                            class="{{$skill->class}} h-auto fill-white" /></div>
                    <div>
                        <h4 class="title"><a class="stretched-link">{{$skill->skillNaam}}</a></h4>
                        <p class="description">{{$skill->skillDesc}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
