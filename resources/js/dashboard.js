import Chart from 'chart.js';

// Get the canvas element
const ctx = document.getElementById('graphCanvas').getContext('2d');

// Data for the graph
const data = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
    datasets: [{
        label: 'Sales',
        data: [100, 150, 200, 250, 300, 350],
        backgroundColor: 'rgba(54, 162, 235, 0.2)',
        borderColor: 'rgba(54, 162, 235, 1)',
        borderWidth: 2,
        pointRadius: 3,
        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
    }],
};

// Create the line graph
const lineGraph = new Chart(ctx, {
    type: 'line',
    data: data,
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true,
            },
        },
    },
});
