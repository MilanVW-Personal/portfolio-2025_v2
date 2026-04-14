<div id="{{ $id }}Modal" class="fixed inset-0 z-50 bg-black bg-opacity-50 hidden flex items-center justify-center">
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="bg-white p-6 rounded-lg w-full max-w-2xl max-h-[90vh] overflow-y-auto">
        <h2 id="modalTitle" class="text-xl font-bold mb-4">{{ $title }}</h2>
        <form id="activeEditForm" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div id="modalInputs" class="space-y-4">
                </div>
            <div class="mt-6 flex justify-end text-center gap-2">
                <button type="button" id="cancelBtn" class="bg-gray-500 text-white py-2 rounded w-max">Annuleren</button>
                <button type="submit" class="bg-blue-600 text-white py-2 rounded w-max">Opslaan</button>
            </div>
        </form>
    </div>
</div>