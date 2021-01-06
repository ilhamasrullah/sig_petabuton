<body>
    <div class="container">
        <div class="page-header">
            <h1 class="text-center">SISTEM INFORMASI GEOGRAFIS KERUSAKAN JALAN PROVINSI DI KABUPATEN BUTON UTARA</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div id="mapid"></div>
            </div>
        </div>
    </div>
    <!--Normale contenuto di pagina-->
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <!-- Geolocation Javascript Library
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>
    <script src="<?= base_url() ?>assets/js/locateControl.js"></script> -->

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
                    .bindPopup(
                        "<b>ID&emsp;&emsp;&emsp;&emsp;&emsp;: </b>" + data[i].id_tempat +
                        '<br>' + "<b>Nama jalan&nbsp;&nbsp;: </b>" + data[i].nama_jalan +
                        '<br>' + "<b>Kel/Desa &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>" + data[i].kelurahan +
                        '<br>' + "<b>Status jalan&nbsp;: </b>" + data[i].status_jalan +
                        '<br>' + "<b>Kerusakan &nbsp;&nbsp;: </b>" + data[i].kerusakan +
                        '<br>' + "<b>Penyebab&emsp;&nbsp;: </b>" + data[i].penyebab +
                        '<br>' + "<b>G. Bujur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </b>" + data[i].lat +
                        '<br>' + "<b>G. Lintang&emsp;&nbsp;: </b>" + data[i].lng +
                        '<br>' + "<b>Kecamatan &nbsp;&nbsp;: </b>" + data[i].kecamatan +
                        '<br>' + "<b>Gambar</b> &nbsp;" + "<img src='<?= base_url() ?>assets/upload/" + data[i].gambar + "' height='200px' weight='300px' />"
                    )
                // .openPopup()
                tempatMarker.id = data[i].id_tempat;


            });
        });
        /* Control Locate */
        // locateControl.addTo(map);

        function groupClick(event) {
            alert("Clicked on marker" + event.layer.id);

        }
    </script>
</body>

</html>