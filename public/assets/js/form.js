const editForm = document.querySelector('#editForm');
const deleteForm = document.querySelector("#deleteForm");


const deleteItem = (form, id, table) => {
    if (form) {
        form.action = "/delete" + table + "/" + id
        form.submit();
    }
}

document.querySelector(".deleteProjectBtn").addEventListener("click", () => {
    let itemId = document.querySelector(".deleteProjectBtn")?.dataset.projectid;
    // console.log(itemId)
    let type = document.querySelector(".deleteProjectBtn")?.dataset.table
    // console.log(itemId, type)
    deleteItem(deleteForm, itemId, type)
})