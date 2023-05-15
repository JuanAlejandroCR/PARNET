let productsDT;
document.addEventListener('DOMContentLoaded', () => productsTable());

const productsTable = async () => {
    productsDT = $('#products').DataTable({
        ajax: route('products.get'),
        columns: [
            {
                data: 'name'
            },
            {
                data: 'description',
                render: (d) => `${d.substring(0, 15)}`
            },
            {
                data: 'image',
                render: (image) => `<img width="80%" src="../storage/app/public/images/productos/${image}">`
            },
            {
                data: 'price',
                render: (price) => `$${price}`
            },
            {
                data: 'stock'
            },
            {
                data: 'data_sheet',
                render: (d) => `${d.substring(0, 15)}`
            },
            {
                data: 'id',
                render: (d) => (`
                <a class="btn btn-primary" href="${route('productos.edit', d)}"><i class="fas fa-pen"></i></a>
                <button class="btn btn-danger" onclick="deleteProducts(${d})"><i class="fas fa-trash-alt"></i></button>`)
            }
        ]
    });
}

const deleteProducts = async id => {
    const url = route('productos.destroy', id);
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
        productsDT.ajax.reload();
        return;
    }
    Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Ha ocurrido un error...'
    });
}