<section>
    <h3 class="text-xl font-semibold border-b pb-1 mb-4">Opleidingen</h3>
    <div class="space-y-4">
        @foreach($opleidingen as $opleiding)
            <div>
                <p class="underline font-semibold">
                    @if($opleiding->end == null)
                        {{$opleiding->start->format("F Y")." - ". "heden"}}:
                    @else
                        {{$opleiding->start->format("F Y")." - ".$opleiding->end->format("F Y")}}:
                    @endif

                    @if($opleiding->location == null)
                        {{$opleiding->campus}}:
                    @else
                        {{$opleiding->campus." - ".$opleiding->location}}:
                    @endif

                </p>
                <p class="text-sm">{{$opleiding->opleidingDesc}}</p>
            </div>
        @endforeach
    </div>
</section>
