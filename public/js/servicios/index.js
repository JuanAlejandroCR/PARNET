let servicesDT;
document.addEventListener('DOMContentLoaded', () => servicesTable());

const servicesTable = async () => {
    servicesDT = $('#services').DataTable({
        ajax: route('services.get'),
        columns: [
            {
                data: 'field.field'
            },
            {
                data: 'service'
            },
            {
                data: 'id',
                render: (d) => (`
                <a class="btn btn-primary" href="${route('servicios.edit', d)}"><i class="fas fa-pen"></i></a>
                <button class="btn btn-danger" onclick="deleteServices(${d})"><i class="fas fa-trash-alt"></i></button>`)
            }
        ]
    });
}

const deleteServices = async id => {
    const url = route('servicios.destroy', id);
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
        servicesDT.ajax.reload();
        return;
    }
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Ha ocurrido un error...'
    });
}