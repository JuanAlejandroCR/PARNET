let newsDT;
document.addEventListener('DOMContentLoaded', () => fieldsTable());

const fieldsTable = async () => {
    newsDT = $('#fields').DataTable({
        ajax: route('fields.get'),
        columns: [
            {
                data: 'field'
            },
            {
                data: 'id',
                render: (d) => (`
                <a class="btn btn-primary" href="${route('areas.edit', d)}"><i class="fas fa-pen"></i></a>
                <button class="btn btn-danger" onclick="deleteFields(${d})"><i class="fas fa-trash-alt"></i></button>`)
            }
        ]
    });
}

const deleteFields = async id => {
    const url = route('areas.destroy', id);
    const init = {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
            Accept: 'application/json'
        }
    }
    const req = await fetch(url, init);
    if (req.ok) {
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Se ha borrado con exito'
        });
        newsDT.ajax.reload();
        return;
    }
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Ha ocurrido un error...'
    });
}