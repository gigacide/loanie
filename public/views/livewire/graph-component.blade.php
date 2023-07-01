<!-- resources/views/livewire/graph-component.blade.php -->
<div>
    <canvas id="graphCanvas" class="w-full"></canvas>

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function () {
                const ctx = document.getElementById('graphCanvas').getContext('2d');
                const data = {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June'],
                    datasets: [{
                        label: 'Sales',
                        data: @json($data),
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        pointRadius: 3,
                        pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                    }],
                };

                new Chart(ctx, {
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
            });
        </script>
    @endpush
</div>
