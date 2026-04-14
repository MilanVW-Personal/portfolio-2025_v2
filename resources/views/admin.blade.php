@include('partials/header')
<link href="{{ url('assets/css/dashboard.css') }}" rel="stylesheet" />

<div class="container mx-auto p-4">
    @if (!session('admin_ingelogd'))
        <form action="{{ url('/admin/login') }}" method="post" class="code-form">
            @csrf
            <div class="row gy-4">
                <div class="col-md-6">
                    <label for="code-field" class="pb-2">Voer toegangscode in</label>
                    <input type="number" name="code" id="code-field" class="form-control" required="">
                    @if (session('Error'))
                        <p class="text-red-500 mt-2">{{ session('Error') }}</p>
                    @endif
                </div>
                <div class="col-md-12 col-lg-12">
                    <button type="submit" class="w-[110px]">Submit</button>
                </div>
            </div>
        </form>
    @else
        <div class="dashboard">
            <div class="table-wrapper">
                <h3 class="font-semibold">Projecten</h3>
                <table>
                    <thead>
                        <tr>
                            <td class="border bg-gray-200">Id</td>
                            <td class="border bg-gray-200">Projectnaam</td>
                            <td class="border bg-gray-200">Korte beschrijving</td>
                            <td class="border bg-gray-200">Start van project</td>
                            <td class="border bg-gray-200">Einde van project</td>
                            <td class="border bg-gray-200">Thumbnail</td>
                            <td class="border bg-gray-200">Link naar live-versie (indien aanwezig)</td>
                            <td class="border bg-gray-200">Update</td>
                            <td class="border bg-gray-200">Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projecten as $pr)
                            <tr>
                                <td>{{ $pr->id }}</td>
                                <td>{{ $pr->projectName }}</td>
                                <td>{{ $pr->shortDesc }}</td>
                                <td>{{ $pr->start->format('F Y') }}</td>
                                <td>{{ $pr->end->format('F Y') }}</td>
                                <td>{{ $pr->thumbnailImage }}</td>
                                <td>{{ $pr->link !== null ? $pr->link : 'N.v.t.' }}</td>
                                <td>
                                    <button data-projectId="{{ $pr->id }}" data-table="Project"
                                        class="bg-yellow-500 w-auto editProjectBtn">
                                        Edit
                                    </button>
                                <td>
                                    <button data-projectId="{{ $pr->id }}" data-table="Project"
                                        class="bg-red-800 w-auto deleteProjectBtn">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        <form enctype="multipart/form-data" method="post" action="{{ url('/createNewProject') }}">
                            @csrf
                            <tr>
                                <td>
                                    <button type="submit" class="text-white bg-blue-500"> + </button>
                                </td>
                                <td>
                                    <input type="text" name="newProjectName" placeholder="Nieuw Project..." />
                                </td>
                                <td>
                                    <input type="text" name="newProjectDesc"
                                        placeholder="Dit is een nieuw project..." />
                                </td>
                                <td>
                                    <input type="datetime-local" name="newProjectStart" />
                                </td>
                                <td>
                                    <input type="datetime-local" name="newProjectEnd" />
                                </td>
                                <td>
                                    <input type="file" name="newProjectThumbnailImage" />
                                </td>
                                <td>
                                    <input type="text" name="newProjectLink" />
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>

            <div class="my-[55px] table-wrapper">
                <h3 class="font-semibold">Opleidingen (CV)</h3>
                <table>
                    <thead>
                        <tr>
                            <td class="border bg-gray-200">Id</td>
                            <td class="border bg-gray-200">Start</td>
                            <td class="border bg-gray-200">Einde</td>
                            <td class="border bg-gray-200">Campus</td>
                            <td class="border bg-gray-200">Locatie</td>
                            <td class="border bg-gray-200">Beschrijving</td>
                            <td class="border bg-gray-200">Update</td>
                            <td class="border bg-gray-200">Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($opleidingen as $op)
                            <tr>
                                <td>{{ $op->id }}</td>
                                <td>{{ $op->start }}</td>
                                <td>{{ $op->end }}</td>
                                <td>{{ $op->campus }}</td>
                                <td>{{ $op->location !== null ? $op->location : '/' }}</td>
                                <td>{{ $op->opleidingDesc }}</td>
                                <td>
                                    <button data-opleidingId="{{ $op->id }}" data-table="Opleiding"
                                        class="bg-yellow-500 w-auto editOpleidingBtn">
                                        Edit
                                    </button>
                                </td>
                                <td>
                                    <button data-opleidingId="{{ $op->id }}" data-table="Opleiding"
                                        class="bg-red-800 deleteOpleidingBtn">
                                        Delete
                                    </button>

                                </td>

                            </tr>
                        @endforeach
                        <form enctype="multipart/form-data" method="post" action="{{ url('/createNewEducation') }}">
                            @csrf
                            <tr>
                                <td>
                                    <button type="submit" class="text-white bg-blue-500"> + </button>
                                </td>
                                <td>
                                    <input type="datetime-local" name="newOpleidingStart" />
                                </td>
                                <td>
                                    <input type="datetime-local" name="newOpleidingEnd" />
                                </td>
                                <td>
                                    <input type="text" name="newOpleidingCampus"
                                        placeholder="bv. Thomas More Hogeschool" />
                                </td>
                                <td>
                                    <input type="text" name="newOpleidingLocation" placeholder="bv. Geel" />
                                </td>
                                <td>
                                    <input type="text" name="newOpleidingDesc" placeholder="In deze opleiding..." />
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>

            <div class="table-wrapper">
                <h3 class="font-semibold">Ervaringen (CV)</h3>
                <table>
                    <thead>
                        <tr>
                            <td class="border bg-gray-200">Id</td>
                            <td class="border bg-gray-200">Start</td>
                            <td class="border bg-gray-200">Einde</td>
                            <td class="border bg-gray-200">Naam ervaring</td>
                            <td class="border bg-gray-200">Beschrijving</td>
                            <td class="border bg-gray-200">Google Maps Embed</td>
                            <td class="border bg-gray-200">Locatie</td>
                            <td class="border bg-gray-200">Update</td>
                            <td class="border bg-gray-200">Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ervaringen as $er)
                            <tr>
                                <td>{{ $er->id }}</td>
                                <td>{{ $er->start }}</td>
                                <td>{{ $er->end }}</td>
                                <td>{{ $er->ervaringNaam }}</td>
                                <td data-fullDesc="{{ $er->ervaringDesc }}">{{ Str::limit($er->ervaringDesc, 40, '...') }}</td>
                                <td>{{ $er->ervaringAdresGoogleMaps !== null ? Str::limit($er->ervaringAdresGoogleMaps, 20, '...') : 'N.v.t.' }}</td>
                                <td>{{ $er->locatie !== null ? $er->locatie : 'N.v.t.' }}</td>
                                <td>
                                    <button data-ervaringId="{{ $er->id }}" data-table="Ervaring"
                                        class="bg-yellow-500 w-auto editErvaringBtn">
                                        Edit
                                    </button>
                                </td>
                                <td>
                                    <button data-ervaringId="{{ $er->id }}" data-table="Ervaring"
                                        class="bg-red-800 deleteErvaringBtn">
                                        Delete
                                    </button>

                                </td>

                            </tr>
                        @endforeach
                        <form enctype="multipart/form-data" method="post" action="{{ url('/createNewErvaring') }}">
                            @csrf
                            <tr>
                                <td>
                                    <button type="submit" class="text-white bg-blue-500"> + </button>
                                </td>
                                <td>
                                    <input type="text" name="newErvaringNaam" placeholder="Nieuwe ervaring..." />
                                </td>
                                <td>
                                    <input type="text" name="newErvaringDesc"
                                        placeholder="Dit is een nieuwe ervaring..." />
                                </td>
                                <td>
                                    <input type="datetime-local" name="newErvaringStart" />
                                </td>
                                <td>
                                    <input type="datetime-local" name="newErvaringEnd" />
                                </td>
                                <td>
                                    <input type="text" name="newErvaringAdres" />
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endif
</div>
<x-modal-edit-form-admin id="edit" title="Edit Item" />

<form method="post" id="deleteForm">
    @method('DELETE')
</form>

@include('partials/footer')