import flatpickr from "flatpickr";
import { formatDate } from "./utils";

export function initializeKegiatanFilter() {
    const tglPelaksanaanFilter = document.getElementById(
        "tgl_pelaksanaan_filter"
    );
    const skalaFilter = document.getElementById("skala_filter");
    const kategoriFilter = document.getElementById("kategori_filter");
    const proposalFilter = document.getElementById("proposal_filter");
    const kegiatanRows = document.querySelectorAll(".kegiatan-row");

    flatpickr("#tgl_pelaksanaan_filter", {
        mode: "range",
        dateFormat: "Y-m-d",
        onChange: applyFilters,
    });

    skalaFilter.addEventListener("change", applyFilters);
    kategoriFilter.addEventListener("change", applyFilters);
    proposalFilter.addEventListener("change", applyFilters);

    function applyFilters() {
        const tglPelaksanaanValue = tglPelaksanaanFilter.value;
        const skalaValue = skalaFilter.value.toLowerCase();
        const kategoriValue = kategoriFilter.value.toLowerCase();
        const proposalValue = proposalFilter.value.toLowerCase();

        kegiatanRows.forEach((row) => {
            const tglPelaksanaan = row.getAttribute("data-tgl_pelaksanaan");
            const skala = row.getAttribute("data-skala").toLowerCase();
            const kategori = row.getAttribute("data-kategori").toLowerCase();
            const proposal = row.getAttribute("data-proposal").toLowerCase();

            const tglPelaksanaanMatch =
                tglPelaksanaanValue === "" ||
                (tglPelaksanaan >=
                    formatDate(tglPelaksanaanValue.split(" to ")[0]) &&
                    tglPelaksanaan <=
                        formatDate(tglPelaksanaanValue.split(" to ")[1]));
            const skalaMatch = skalaValue === "" || skala === skalaValue;
            const kategoriMatch =
                kategoriValue === "" || kategori === kategoriValue;
            const proposalMatch =
                proposalValue === "" || proposal === proposalValue;

            if (
                tglPelaksanaanMatch &&
                skalaMatch &&
                kategoriMatch &&
                proposalMatch
            ) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    }
}
