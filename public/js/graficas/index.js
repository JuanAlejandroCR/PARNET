document.addEventListener('DOMContentLoaded', () => {
    services();
    products();
});

const products = async () => {
    const products = document.getElementById('products');

    // URL to FETCH data
    const url = route('products_graph.get');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [labels, data] = await req.json();
        new Chart(products, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# disponibles',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    }
}

const services = async () => {
    const services = document.getElementById('services');

    // URL to FETCH data
    const url = route('services_graph.get');
    // Set headers and method
    const init = {
        method: 'GET',
        headers: {
            Accept: 'application/json'
        }
    }
    // Send request to the back
    const req = await fetch(url, init);
    // Check if request returned a 200 status code
    if (req.ok) {
        const [labels, data] = await req.json();
        new Chart(services, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: '# de servicios',
                    data: data,
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
        });
    }
}