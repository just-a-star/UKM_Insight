import { Chart, BarController, Tooltip } from 'chart.js';
import { tailwindConfig } from '../utils';

Chart.register(BarController, Tooltip);

const feedbackKegiatanChart = () => {
  const canvas = document.getElementById('feedback-kegiatan-chart');
  if (canvas) {
    const ctx = canvas.getContext('2d');
    const existingChart = Chart.getChart(ctx);
    if (existingChart) {
      existingChart.destroy();
    }

    fetch('/feedback-kegiatan-data')
      .then((response) => response.json())
      .then((data) => {
        const ratings = data.map((item) => item.rating);
        const counts = data.map((item) => item.count);

        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ratings,
            datasets: [
              {
                label: 'Count',
                backgroundColor: tailwindConfig().theme.colors.blue[500],
                data: counts,
              },
            ],
          },
          options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
              x: {
                grid: {
                  display: false,
                },
              },
              y: {
                beginAtZero: true,
              },
            },
            plugins: {
              tooltip: {
                callbacks: {
                  label: (context) => {
                    const label = context.label || '';
                    const value = context.parsed.y || 0;
                    return `${label}: ${value}`;
                  },
                },
              },
            },
          },
        });
      })
      .catch((error) => {
        console.error('Error:', error);
      });
  }
};

document.addEventListener('DOMContentLoaded', () => {
  feedbackKegiatanChart();
});

export default feedbackKegiatanChart;
