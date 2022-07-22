<h2 class="w-full bg-black text-green-500 mx-auto p-10">
    <div class="shadow-lg rounded-lg overflow-hidden">
        <div class="py-3 px-5 bg-gray-50 uppercase text-center">grafik perolehan suara sah partai politik dalam pemilu legislatif tahun 2014 di kota bogor</div>
        <canvas class="p-10" id="chartBar"></canvas>
    </div>

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart bar -->
    <script>
        const labelsBarChart = [
            "Nasdem",
            "PKB",
            "Golkar",
            "PDI",
            "PKS",
            "Demokrat",
        ];
        const dataBarChart = {
            labels: labelsBarChart,
            datasets: [{
                    label: "DPR",
                    backgroundColor: "hsl(252, 82.9%, 67.8%)",
                    borderColor: "hsl(252, 82.9%, 67.8%)",
                    data: [0, 10, 5, 2, 20, 30, 45],
                },
                {
                    label: "DPR Prov",
                    backgroundColor: "hsl(221, 100%, 43%)",
                    borderColor: "hsl(252, 82.9%, 67.8%)",
                    data: [10, 15, 5, 2, 51, 20, 45],
                },
                {
                    label: "DPRD Kab/Kota",
                    backgroundColor: "hsl(126, 100%, 43%)",
                    borderColor: "hsl(252, 82.9%, 67.8%)",
                    data: [0, 10, 5, 2, 20, 30, 45],
                },

            ],
        };

        const configBarChart = {
            type: "bar",
            data: dataBarChart,
            options: {},
        };

        var chartBar = new Chart(
            document.getElementById("chartBar"),
            configBarChart
        );
    </script>
</h2>



<!-- <script src="/node_modules/tw-elements/dist/js/index.min.js"></script> -->
<script src="<?= base_url('node_modules/'); ?>tw-elements/dist/js/index.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/style.js"></script>
<!-- <script src="/dist/js/style.js"></script> -->
</body>