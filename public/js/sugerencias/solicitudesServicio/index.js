let servicesRequestsDT;
document.addEventListener('DOMContentLoaded', () => servicesRequestsTable());

const servicesRequestsTable = async () => {
    servicesRequestsDT = $('#servicesRequests').DataTable({
        ajax: route('services_requests.get'),
        columns: [
            {
                data: 'field.field'
            },
            {
                data: 'mail'
            },
            {
                data: 'description'
            },
            {
                data: 'created_at'
            },
            {
                data: 'id',
                render: (d) => (`
                <button class="btn btn-danger" onclick="deleteServiceRequest(${d})"><i class="fas fa-trash-alt"></i></button>`)
            }
        ]
    });
}

const deleteServiceRequest = async id => {
    const url = route('solicitudes_servicios.destroy', id);
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
        servicesRequestsDT.ajax.reload();
        return;
    }
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Ha ocurrido un error...'
    });
}