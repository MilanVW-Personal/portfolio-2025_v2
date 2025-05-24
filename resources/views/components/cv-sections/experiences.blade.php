<section>
    <h3 class="text-xl font-semibold border-b pb-1 mb-4">Ervaringen</h3>
    <div class="space-y-4">
        @foreach($ervaringen as $erv)
            <div>
                <p class="font-semibold underline">
                    @if($erv->start->format("Y-m-d") !== $erv->end->format("Y-m-d"))
                        {{$erv->start->format("F Y"). ' - ' . $erv->end->format('F Y')}}:
                    @else
                        {{$erv->start->format("d F Y").' ('.$erv->start->format("H\ui").' - '.$erv->end->format("H\ui").')'}}:
                    @endif
                    {{$erv->ervaringNaam}}
                </p>
                <p class="text-sm">{{$erv->ervaringDesc}}</p>
            </div>
        @endforeach
    </div>
{{--    --}}{{-- Embedded map (can be iframe if applicable) --}}
{{--    <div class="my-4">--}}
{{--        <iframe src="https://www.google.com/maps/embed?...your-map-link..." class="w-full h-64 rounded-md border"></iframe>--}}
{{--    </div>--}}
</section>
