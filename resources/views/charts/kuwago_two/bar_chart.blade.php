<script>
<<<<<<< HEAD
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: @json($chartdata->pluck('date')),
            datasets: [{
                label: 'Sales',
                data: @json($chartdata->pluck('sales')),
                backgroundColor: 'green',
                borderColor: 'green',
                borderWidth: 1,
                fill: 'origin'
            },{
                label: 'Profit',
                data: @json($chartdata->pluck('profit')),
                backgroundColor: 'yellow',
                borderColor: 'yellow',
                borderWidth: 1,
                fill: 'origin'
            },{
                label: 'Expenses',
                data: @json($chartdata->pluck('expenses')),
                backgroundColor: 'white',
                borderColor: 'white',
                borderWidth: 1,
                fill: 'origin'
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        color: 'white' // Color of the y-axis labels
                    }
                },
                x: {
                    ticks: {
                        color: 'white' // Color of the x-axis labels
                    }
                }
            },
            plugins: {
                legend: {
                    labels: {
                        color: 'white' // Color of the legend text
                    }
                }
            }
        }
=======
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($chartdata->pluck('date')),
                datasets: [{
                    label: 'Sales',
                    data: @json($chartdata->pluck('sales')),
                    backgroundColor: 'rgba(0, 128, 0, 0.5)', // Use rgba for transparency
                    borderColor: 'rgba(0, 128, 0, 1)',
                    borderWidth: 1,
                },{
                    label: 'Profit',
                    data: @json($chartdata->pluck('profit')),
                    backgroundColor: 'rgba(255, 255, 0, 0.5)',
                    borderColor: 'rgba(255, 255, 0, 1)',
                    borderWidth: 1,
                },{
                    label: 'Expenses',
                    data: @json($chartdata->pluck('expenses')),
                    backgroundColor: 'rgba(255, 255, 255, 0.5)',
                    borderColor: 'rgba(255, 255, 255, 1)',
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
>>>>>>> 9320a186d8d66923bf2e8b800f7599e4e2072dd8
    });
</script>
