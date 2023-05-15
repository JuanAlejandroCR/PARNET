const sendMail = async () => {
    Swal.showLoading();
    const url = route('contacto.store');
    const form = document.getElementById('formulario');
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
            text: 'Se ha enviado con exito el correo',
            title: 'Exito'
        });
        form.reset();
        return;
    }

    const res = await req.json();
    Swal.fire({
        icon: 'error',
        text: res,
        title: 'Error'
    });
}