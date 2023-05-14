const createSuggestion = async () => {
    const url = route('sugerencias.store');
    const form = document.getElementById('suggestions');
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
            title: 'Exito',
            text: 'Se ha enviado tu sugerencia'
        });
        return;
    }
    Swal.fire({
        icon: 'success',
        title: 'Error',
        text: 'Ha ocurrido un error...'
    });
}

const updateSuggestions = async id => {
    const url = route('sugerencias.update');
    const form = document.getElementById('suggestions');
    const formData = new FormData(form);
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
    });
}