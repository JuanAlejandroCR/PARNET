const createField = async () => {
    const url = route('areas.store');
    const form = document.getElementById('fields');
    const formData = new FormData(form);
    const init = {
        method: 'POST',
        body: formData,
        headers: {
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
            Accept: 'application/json'
        }
    }
    const req = await fetch(url, init);
    if (req.ok) {
        Swal.fire({
            icon: 'success',
            text: 'Se ha creado con exito',
            title: 'Exito'
        });2

        return;
    }

    Swal.fire({
        icon: 'error',
        text: 'Ha ocurrido un error...',
        title: 'Error'
    });
}

const updateFields = async id => {
    const url = route('areas.update', id);
    const form = document.getElementById('fields');
    const formData = new FormData(form);
    formData.append('id', id);
    const init = {
        method: 'PUT',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: {
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
            Accept: 'application/json',
            'Content-Type': 'application/json'
        }
    }
    const req = await fetch(url, init);
    if (req.ok) {
        Swal.fire({
            icon: 'success',
            title: 'Exito',
            text: 'Se ha actualizado con exito'
        });
        return;
    }
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Ha ocurrido un error...'
    })
}