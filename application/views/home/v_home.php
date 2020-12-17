<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIG</title>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link href="<?= base_url() ?>assets/css/BootSideMenu.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/leaflet/leaflet.css" rel="stylesheet">

    <style type="text/css">
        .user {
            padding: 5px;
            margin-bottom: 5px;
        }

        #mapid {
            height: 480px;
        }

        #popup {
            height: 80px;
            width: 160px;
        }

        p {
            text-align: justify;
        }

        #foto {
            height: 200px;
            width: 160px;
        }
    </style>
</head>

<body>
    <!--Test -->
    <div id="test">
        <h2>WEB GIS PETA</h2>
        <div class="list-group">
            <a href="http://localhost/sig_petabuton/" class="list-group-item active">Home</a>
            <a href="#" class="list-group-item">Tempat</a>
            <a href="#" class="list-group-item">Login</a>

        </div>
    </div>
    <!--/Test -->




    <!--Normale contenuto di pagina-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>SISTEM INFORMASI GEOGRAFIS KERUSAKAN JALAN PROVINSI DI KABUPATEN BUTON UTARA</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="mapid"></div>
            </div>
        </div>
    </div>
    <!--Normale contenuto di pagina-->

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/BootSideMenu.js"></script>
    <script src="<?= base_url() ?>assets/leaflet/leaflet.js"></script>

    <script type="text/javascript">
        $('#test').BootSideMenu({
            side: "left",
            autoClose: false
        });
        var map = L.map('mapid').setView([-4.680034, 123.131291], 12);
        var base_url = "<?= base_url() ?>";

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var myFeatureGroup = L.featureGroup().addTo(map).on("Click", groupClick);
        var tempatMarker;
        // var kode = feature.properties.kode;

        $.getJSON(base_url + "home/tempat_json", function(data) {

            $.each(data, function(i, field) {
                var v_lat = parseFloat(data[i].lat);
                var v_long = parseFloat(data[i].lng);

                tempatMarker = L.marker([v_long, v_lat])
                    .addTo(myFeatureGroup)
                    .bindPopup("<b>ID: </b>" + data[i].id_tempat +
                        '</br>' + "<b>Nama jalan : </b>" + data[i].nama_jalan +
                        '</br>' + "<b>Kel/Desa : </b>" + data[i].kelurahan +
                        '</br>' + "<b>Status jalan   : </b>" + data[i].status_jalan +
                        '</br>' + "<b>Kerusakan   : </b>" + data[i].kerusakan +
                        '</br>' + "<b>Penyebab   : </b>" + data[i].penyebab +
                        '</br>' + "<b>G. Bujur   : </b>" + data[i].lat +
                        '</br>' + "<b>G. Lintang   : </b>" + data[i].lng +
                        '</br>' + "<b>Kecamatan   : </b>" + data[i].kecamatan +
                        '</br>' + "<b>Gambar    </b>" + "<img src='<?= base_url() ?>assets/upload/" + data[i].gambar + "' height='200px' weight='300px' />"
                    )
                tempatMarker.id = data[i].id_tempat;

            });
        });

        function groupClick(event) {
            alert("Clicked on marker" + event.layer.id);

        }
    </script>
</body>


</html>