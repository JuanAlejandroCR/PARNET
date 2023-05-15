let suggestionsDT;

document.addEventListener('DOMContentLoaded', () => suggestionTable());

const suggestionTable = async () => {
    suggestionsDT = $('#suggestions').DataTable({
        ajax: route('suggestions.get'),
        columns: [
            {
                data: 'name'
            },
            {
                data: 'suggestion'
            },
            {
                data: 'id',
                render: (d) => (`
                <a class="btn btn-primary" href="${route('sugerencias.edit', d)}"><i class="fas fa-pen"></i></a>
                <button class="btn btn-danger" onclick="deleteSuggestions(${d})"><i class="fas fa-trash-alt"></i></button>`)
            }
        ]
    })
}

const deleteSuggestions = async id => {
    const url = route('sugerencias.destroy', id);
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
            text: 'Se ha eliminado con exito'
        });

        suggestionsDT.ajax.reload();
        return;
    }


    Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Ha ocurrido un error...'
        });

}