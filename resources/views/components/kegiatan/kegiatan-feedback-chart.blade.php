<div class="mt-4 rounded-sm border border-slate-200 bg-white p-6 shadow-lg">
    <h2 class="text-lg font-semibold text-slate-800">Feedback Kegiatan</h2>

    <canvas id="feedbackChart" style="max-height: 400px;"></canvas>
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const feedbackData = @json($dataKegiatan->feedbacks);
            const ratings = ['Excellent', 'Good', 'Fair', 'Poor'];

            const countByRating = ratings.map(rating => feedbackData.filter(feedback => feedback.rating === rating)
                .length);

            const ctx = document.getElementById('feedbackChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ratings,
                    datasets: [{
                        label: 'Feedback Rating',
                        data: countByRating,
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.6)',
                            'rgba(54, 162, 235, 0.6)',
                            'rgba(255, 206, 86, 0.6)',
                            'rgba(255, 99, 132, 0.6)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(255, 99, 132, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1
                            }
                        }
                    }
                }
            });
        });
    </script>
@endpush
