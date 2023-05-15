let newsDT;
document.addEventListener('DOMContentLoaded', () => newsTable());

const newsTable = async () => {
    newsDT = $('#news').DataTable({
        ajax: route('news.get'),
        columns: [
            {
                data: 'title'
            },
            {
                data: 'description'
            },
            {
                data: null,
                render: ({ id, active }) => `<input class="form-check-input" type="checkbox" onclick="changeActive(${id})" ${active == 1 ? 'checked' : ''}>`
            },
            {
                data: 'id',
                render: (d) => (`
                <a class="btn btn-primary" href="${route('noticias.edit', d)}"><i class="fas fa-pen"></i></a>
                <button class="btn btn-danger" onclick="deleteNews(${d})"><i class="fas fa-trash-alt"></i></button>`)
            }
        ]
    });
}

const changeActive = async id => {
    const url = route('status', id);
    const init = {
        method: 'GET',
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
            text: 'Se ha actualizado con exito'
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

const deleteNews = async id => {
    const url = route('noticias.destroy', id);
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