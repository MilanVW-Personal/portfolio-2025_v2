@php
    function changeDateLanguage($month_of_startDate, $month_of_endDate, $startDate, $endDate) {
        switch ($month_of_startDate) {
            case 'January':
                echo "Januari".' '.$startDate->format("Y");
                break;
            case 'February':
                echo "Februari".' '.$startDate->format("Y");
                break;
            case 'March':
                echo "Maart".' '.$startDate->format("Y");
                break;
            case 'May':
                echo "Mei".' '.$startDate->format("Y");
                break;
            case 'June':
                echo "Juni".' '.$startDate->format("Y");
                break;
            case 'July':
                echo "Juli".' '.$startDate->format("Y");
                break;
            case 'August':
                echo "Augustus".' '.$startDate->format("Y");
                break;
            case 'October':
                echo "Oktober".' '.$startDate->format("Y");
                break;
            default:
                # code...
                break;
        }

        echo " - ";

        switch ($month_of_endDate) {
            case 'January':
                echo "Januari".' '.$endDate->format("Y");
                break;
            case 'February':
                echo "Februari".' '.$endDate->format("Y");
                break;
            case 'March':
                echo "Maart".' '.$endDate->format("Y");
                break;
            case 'May':
                echo "Mei".' '.$endDate->format("Y");
                break;
            case 'June':
                echo "Juni".' '.$endDate->format("Y");
                break;
            case 'July':
                echo "Juli".' '.$endDate->format("Y");
                break;
            case 'August':
                echo "Augustus".' '.$endDate->format("Y");
                break;
            case 'October':
                echo "Oktober".' '.$endDate->format("Y");
                break;
            default:
                # code...
                break;
        }
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
                    <p><em>Resultaatgerichte junior programmeur met een graduaatsdiploma Programmeren en ervaring met onder andere C#, PHP, Laravel en JavaScript-frameworks zoals React en Next.js. Enthousiast om complexe problemen om te zetten in gebruiksvriendelijke oplossingen. Ervaring opgedaan tijdens stage en diverse groepsprojecten, waarbij samenwerking, communicatie en kwaliteit centraal stonden. Leergierig, nauwkeurig en altijd op zoek naar manieren om mezelf te verbeteren.</em></p>
                    <ul class="pt-[15px] list-disc">
                        <li>Berlaar, Antwerpen, België</li>
                        <li>0471 01 31 47</li>
                        <li>vanwinkelmilan@gmail.com</li>
                        <li>Rijbewijs B momenteel niet in bezit</li>
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
                    <p class="pt-[15px]">{{$opleidingen->first()->opleidingDesc}}</p>
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
                    <p class="pt-[15px]">{{$opleidingen->last()->opleidingDesc}}</p>
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
                        <ul>
                            <li class="pt-[15px]">
                               {{$ervaring->ervaringDesc}}
                            </li>
                        </ul>
                    </div>  
                @endforeach
            </div>
        </div>
    </div>
</section>