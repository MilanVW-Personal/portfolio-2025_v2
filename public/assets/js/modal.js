const editButtons = document.querySelectorAll('.editProjectBtn, .editOpleidingBtn, .editErvaringBtn');

const addInput = (name, label, value) => {
    const div = document.createElement('div');
    div.innerHTML = `
        <label class="block text-sm font-medium">${label}</label>
        <input type="text" name="${name}" value="${value}" class="w-full border p-2 rounded">
    `;
    document.querySelector('#modalInputs').appendChild(div);
}

editButtons.forEach(button => {
    button.addEventListener('click', function() {
        const type = this.getAttribute('data-table'); // 'Project', 'Opleiding', or 'Ervaring'
        const id = this.closest('tr').querySelector('td:first-child').innerText; // Gets the ID from first cell
        const row = this.closest('tr');
        const form = document.querySelector('#activeEditForm');
        const inputContainer = document.querySelector('#modalInputs');
        
        inputContainer.innerHTML = ''; // Clear old inputs

        if (type === 'Project') {
            form.action = `/editProject/${id}`;
            addInput('projectName', 'Project Name', row.cells[1].innerText);
            addInput('start', 'Startdatum', row.cells[2].innerText);
            addInput('end', 'Einddatum', row.cells[3].innerText);
            addInput('shortDesc', 'Description', row.cells[4].innerText);
            // Thumbnails are tricky via JS, usually best to provide a new file input
            inputContainer.innerHTML += `<label>Nieuwe thumbnail (Optional)</label><input type="file" name="thumbnailImage" class="border p-2">`;
            addInput('link', 'Link', row.cells[6].innerText === 'N.v.t.' ? '' : row.cells[6].innerText);
        } 
        else if (type === 'Opleiding') {
            form.action = `/editEducation/${id}`;
            addInput('start', 'Startdatum', row.cells[1].innerText);
            addInput('end', 'Einddatum', row.cells[2].innerText);
            addInput('campus', 'Campus', row.cells[3].innerText);
            addInput('location', 'Location', row.cells[4].innerText);
            addInput('opleidingDesc', 'Description', row.cells[5].innerText);
        }
        else if (type === 'Ervaring') {
            form.action = `/editErvaring/${id}`;
            addInput('start', 'Startdatum', row.cells[1].innerText);
            addInput('end', 'Einddatum', row.cells[2].innerText);
            addInput('ervaringNaam', 'Naam', row.cells[3].innerText);
            const fullDesc = row.cells[4].getAttribute('data-fullDesc') // Get full description from data attribute
            addInput('ervaringDesc', 'Description', fullDesc); // Use full description from data attribute
            addInput('ervaringAdresGoogleMaps', 'Adres', row.cells[5].innerText.trim() === 'N.v.t.' ? '' : row.cells[5].innerText.trim());
            addInput('locatie', 'Locatie', row.cells[6].innerText.trim() === 'N.v.t.' ? '' : row.cells[6].innerText.trim());
        }

        document.querySelector('#editModal').classList.remove('hidden');
    });
});


const closeModal = () => {
    document.querySelector('#editModal').classList.add('hidden');
}

if(document.querySelector('#cancelBtn')) {
    document.querySelector('#cancelBtn').addEventListener('click', closeModal);
}