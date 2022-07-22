<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peserta Pemilu</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600;700;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/output.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <script>
        document.addEventListener("alpine:init", () => {
            Alpine.data("layout", () => ({
                profileOpen: false,
                asideOpen: true,
            }));
        });
    </script>

    <style>
        .leaflet-container {
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }
    </style>

</head>

<body>

    <div class="container mt-10 mx-auto bg-black">

        <nav class="mx-5 rounded-md bg-slate-100 p-2">
            <ol class="list-reset flex">
                <li><a href="#" class="text-blue-600 hover:text-blue-700">Home</a></li>
                <li><span class="text-gray-500 mx-2">/</span></li>
                <li> <span class="text-gray-500">DAPIL DPR RI</a></li>
            </ol>
        </nav>

        <h2 class="text-center uppercase text-2xl mt-10">daerah Pemilihan anggota dpr ri untuk provinsi jawa barat dalam pemilu tahun 2014</h2>

        <div id="map" class="bg-white mx-auto" style="width: 900pt; height: 700px;"></div>
        <script>
            var map = L.map('map').setView([-6.595038, 106.816635], 11);

            var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);


            function onMapClick(e) {
                popup
                    .setLatLng(e.latlng)
                    .setContent('You clicked the map at ' + e.latlng.toString())
                    .openOn(map);
            }

            map.on('click', onMapClick);
        </script>

</body>

</html>