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
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/output.css">

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
</head>

<body>

    <div class="container mt-10 mx-auto bg-blue-500">

        <h2 class="text-center uppercase text-2xl mt-10">daerah Pemilihan anggota dpr ri untuk provinsi jawa barat dalam pemilu tahun 2014</h2>

        <div id='map' class="mx-auto mt-10 text-black flex" style="height:600px ; width: 1000px;"></div>
        <script type="text/javascript" src="<?= base_url('assets/') ?>js/leaflet.ajax.js"></script>

        <script type="text/javascript">
            var map = L.map('map').setView([-6.595038, 106.816635], 10);

            var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            }).addTo(map);

            function popUp(f, l) {
                var out = [];
                if (f.properties) {
                    for(key in f.properties) {
                        out.push(key + ": " + f.properties[key]);
                    }
                    l.bindPopup(out.join("<br />"));
                }
            }
            var jsonTest = new L.GeoJSON.AJAX(["<?= base_url(); ?>assets/geojson/JabarKec.geojson"], {
                onEachFeature: popUp
            }).addTo(map);
        </script>


    </div>

</body>

</html>