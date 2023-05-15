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
                render: (d) => `${d.substring(0, 50)}`
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
                render: (d) => `${d.substring(0, 50)}`
            },
            {
                data: 'id',
                render: (d) => (`
                <a href="${route('producto_pdf.get', d)}">Ver detalles</a>`)
            }
        ]
    });
}