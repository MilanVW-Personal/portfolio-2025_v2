@php
    $fullTimePeriod = "";
    function changeDateLanguage($month_of_startDate, $month_of_endDate, $startDate, $endDate) {

        $startDateMonthAndYear = match($month_of_startDate) {
            "January" => "Januari".' '.$startDate->format("Y"),
            "February" => "Februari".' '.$startDate->format("Y"),
            "March" => "Maart".' '.$startDate->format("Y"),
            "May" => "Mei".' '.$startDate->format("Y"),
            "June" => "Juni".' '.$startDate->format("Y"),
            "July" => "Juli".' '.$startDate->format("Y"),
            "August" => "Augustus".' '.$startDate->format("Y"),
            "October" => "Oktober".' '.$startDate->format("Y"),
            default => $startDate->format("F").' '.$startDate->format("Y"),
        };

        $endDateMonthAndYear = match($month_of_endDate) {
            "January" => "Januari".' '.$endDate->format("Y"),
            "February" => "Februari".' '.$endDate->format("Y"),
            "March" => "Maart".' '.$endDate->format("Y"),
            "May" => "Mei".' '.$endDate->format("Y"),
            "June" => "Juni".' '.$endDate->format("Y"),
            "July" => "Juli".' '.$endDate->format("Y"),
            "August" => "Augustus".' '.$endDate->format("Y"),
            "October" => "Oktober".' '.$endDate->format("Y"),
            default => $endDate->format("F").' '.$endDate->format("Y"),
        };
        
        $fullTimePeriod = $startDateMonthAndYear.' - '.$endDateMonthAndYear;
        echo $fullTimePeriod;
    }
@endphp

<section id="resume" class="resume section">
    <div class="container section-title" data-aos="fade-up">
        <h2>CV</h2>
        <p>Bekijk hieronder mijn CV waar je mijn werkervaringen, gevolgde opleidingen... kan terugvinden.</p>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <h3 class="resume-title">Samengevat</h3>
                <div class="resume-item pb-0">
                    <h4>Milan Van Winkel</h4>
                    <div class="space-y-5">
                        <p><em>Ik ben een resultaatgerichte junior programmeur en analytische IT-professional met een graduaatsdiploma Programmeren (met onderscheiding). Ik combineer technische expertise in C#, PHP (Laravel) en JavaScript-frameworks zoals React en Next.js met een sterke klantgerichte instelling.</em></p>
                        <p><em>Tijdens mijn stage bij Spot Group en diverse projecten ontwikkelde ik een scherp oog voor detail en de vaardigheid om complexe problemen om te zetten in gebruiksvriendelijke oplossingen. Als leergierige teamplayer denk ik kritisch mee en streef ik via technische innovatie en gestructureerd werk (Agile/Scrum) altijd naar een optimale customer experience.</em></p>
                    </div>
                    <ul class="pt-[15px] list-disc">
                        <li>Berlaar, Antwerpen, België</li>
                        <li>+32 (0) 471 01 31 47</li>
                        <li>vanwinkelmilan@gmail.com</li>
                        <li>Rijbewijs B: voorlopig rijbewijs</li>
                    </ul>
                </div>  

                <h3 class="resume-title">Opleidingen</h3>
                <div class="resume-item">
                    <h4>Graduaat Programmeren</h4>
                    <h5>September 2023 - Juni 2025</h5>
                    <p>
                    <em>
                        @php
                            if ($opleidingen->first()->location !== null)
                            {
                                echo $opleidingen->first()->campus. " - ". $opleidingen->first()->location;
                            }
                            else {
                                echo $opleidingen->first()->campus;
                            }
                        @endphp    
                    </em></p>
                    <ul class="list-disc pl-5 pt-[15px]">
                        @foreach(explode('- ', $opleidingen->first()->opleidingDesc) as $item)
                            @if(trim($item) !== '')
                                <li class="whitespace-pre-wrap">{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>     

                <div class="resume-item">
                    <h4>Sociale Technische Wetenschappen</h4>
                    <h5>September 2017 - Juni 2023</h5>
                    <p>
                        <em>
                            @php
                                if ($opleidingen->last()->location !== null)
                                {
                                    echo $opleidingen->last()->campus. " - ". $opleidingen->last()->location;
                                }
                                else {
                                    echo $opleidingen->last()->campus;
                                }
                            @endphp    
                        </em>
                    </p>
                        <ul class="list-disc pl-5 pt-[15px]">
                        @foreach(explode('- ', $opleidingen->last()->opleidingDesc) as $item)
                            @if(trim($item) !== '')
                                <li class="whitespace-pre-wrap">{{ trim($item) }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>  

            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <h3 class="resume-title">Werkervaringen</h3>
                @foreach ($ervaringen as $ervaring)
                    <div class="resume-item">
                        <h4>{{$ervaring->ervaringNaam}}</h4>
                        <h5>
                            @if($ervaring->start->format("Y-m-d") !== $ervaring->end->format("Y-m-d"))
                                {{changeDateLanguage($ervaring->start->format("F"), $ervaring->end->format("F"), $ervaring->start, $ervaring->end)}}:
                            @else
                                {{$ervaring->start->format("d F Y").' ('.$ervaring->start->format("H\ui").' - '.$ervaring->end->format("H\ui").')'}}:
                            @endif
                        </h5>
                        <p><em>{{$ervaring->locatie}}</em></p>
                        <ul class="list-disc pl-5 pt-[15px]">
                            @foreach(explode('- ', $ervaring->ervaringDesc) as $item)
                                @if(trim($item) !== '')
                                    <li class="whitespace-pre-wrap">{{ trim($item) }}</li>
                                @endif
                            @endforeach
                        </ul>
                    </div>  
                @endforeach
            </div>
        </div>
    </div>
</section>