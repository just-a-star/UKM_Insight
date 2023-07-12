import { Chart, BarController, ArcElement, TimeScale, Tooltip } from "chart.js";
import "chartjs-adapter-moment";
import { tailwindConfig } from "../utils";

Chart.register(BarController, ArcElement, TimeScale, Tooltip);

const dasborSkalaKegiatan = () => {
  const currentUrl = window.location.pathname;
  if (currentUrl === "/dasbor" || currentUrl === "/kegiatan") {
    const canvas = document.getElementById("skala-kegiatan-chart");
    if (canvas) {
      const ctx = canvas.getContext("2d");
      const existingChart = Chart.getChart(ctx);
      if (existingChart) {
        existingChart.destroy();
      }

      fetch("/skala-kegiatan-distribution")
        .then((response) => response.json())
        .then((data) => {
          const years = data.map((item) => item.year);
          const lokalKegiatan = data.map((item) => item.lokal_kegiatan);
          const nasionalKegiatan = data.map((item) => item.nasional_kegiatan);

          new Chart(ctx, {
            type: "bar",
            data: {
              labels: years,
              datasets: [
                {
                  label: "Lokal Kegiatan",
                  backgroundColor: tailwindConfig().theme.colors.blue[400],
                  data: lokalKegiatan,
                },
                {
                  label: "Nasional Kegiatan",
                  backgroundColor: tailwindConfig().theme.colors.indigo[500],
                  data: nasionalKegiatan,
                },
              ],
            },
            options: {
              responsive: true,
              maintainAspectRatio: false,
              scales: {
                x: {
                  stacked: true,
                },
                y: {
                  stacked: true,
                  beginAtZero: true,
                },
              },
            },
          });
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    }
  }
};

document.addEventListener("DOMContentLoaded", () => {
  dasborSkalaKegiatan();
});

export default dasborSkalaKegiatan;
