const createNews = async () => {
    const url = route('noticias.store');
    const form = document.getElementById('news');
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
            title: 'Exito',
            text: 'Se ha creado con exito',
            icon: 'success'
        });
        return;
    }
    Swal.fire({
        title: 'Error',
        text: 'Ha ocurrido un error',
        icon: 'error'
    });
}

const updateNews = async (id) => {
    const url = route('noticias.update', id);
    const form = document.getElementById('news');
    const formData = new FormData(form);
    const init = {
        method: 'PUT',
        body: JSON.stringify(Object.fromEntries(formData)),
        headers: {
            'X-CSRF-TOKEN': $('#csrf').attr('content'),
            Accept: 'application/json',
            'Content-Type': 'application/json',
        }
    }
    const req = await fetch(url, init);
    if (req.ok) {
        Swal.fire({
            title: 'Exito',
            text: 'Se ha actualizado con exito',
            icon: 'success'
        });
        return;
    }
    Swal.fire({
        title: 'Error',
        text: 'Ha ocurrido un error',
        icon: 'error'
    });
}