// Import Chart.js
import { Chart, BarController, ArcElement, TimeScale, Tooltip } from "chart.js";
import "chartjs-adapter-moment";
// Import utilities
import { tailwindConfig } from "../utils"; // Make sure to import the utility file if it's required

Chart.register(BarController, ArcElement, TimeScale, Tooltip);

const dasborSkalaKegiatan = () => {
    fetch("/skala-kegiatan-distribution")
        .then((response) => response.json())
        .then((data) => {
            const years = data.map((item) => item.year);
            const lokalKegiatan = data.map((item) => item.lokal_kegiatan);
            const nasionalKegiatan = data.map((item) => item.nasional_kegiatan);

            // Create a new chart instance
            const ctx = document
                .getElementById("skala-kegiatan-chart")
                .getContext("2d");
            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: years,
                    datasets: [
                        {
                            label: "Lokal Kegiatan",
                            backgroundColor:
                                tailwindConfig().theme.colors.blue[400],
                            data: lokalKegiatan,
                        },
                        {
                            label: "Nasional Kegiatan",
                            backgroundColor:
                                tailwindConfig().theme.colors.indigo[500],
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
};
document.addEventListener("DOMContentLoaded", () => {
    dasborSkalaKegiatan();
});
export default dasborSkalaKegiatan;
