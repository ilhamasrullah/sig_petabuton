<div class="page-header">
    <div class="container">
        <h1>Daftar Kerusakan jalan </h1>
    </div>
</div>
<div class="container">
    <table class="table table-bordered table-striped" id="mydata">
        <thead>
            <tr>
                <td>Kode Jalan</td>
                <td>Gambar</td>
                <td>Nama Jalan</td>
                <td>Garis bujur</td>
                <td>Garis longitude</td>
                <td>Status jalan</td>
                <td>Kecamatan</td>
                <td>Kerusakan</td>
                <td>Penyebab</td>
                <td>Kelurahan</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data->result_array() as $i) :
                $id_tempat = $i['id_tempat'];
                $gambar = $i['gambar'];
                $nama_jalan = $i['nama_jalan'];
                $lat = $i['lat'];
                $lng = $i['lng'];
                $status_jalan = $i['status_jalan'];
                $kecamatan = $i['kecamatan'];
                $kerusakan = $i['kerusakan'];
                $penyebab = $i['penyebab'];
                $kelurahan = $i['kelurahan'];
            ?>
                <tr>
                    <td><?php echo $id_tempat; ?> </td>
                    <td><a href="assets/upload/<?php echo $i['gambar']; ?>"><img id="myImg" class="thumbnail" src="assets/upload/<?php echo $i['gambar']; ?>" height="80"></a></td>
                    <td><?php echo $nama_jalan; ?> </td>
                    <td><?php echo $lat; ?> </td>
                    <td><?php echo $lng; ?> </td>
                    <td><?php echo $status_jalan; ?> </td>
                    <td><?php echo $kecamatan; ?> </td>
                    <td><?php echo $kerusakan; ?> </td>
                    <td><?php echo $penyebab; ?> </td>
                    <td><?php echo $kelurahan; ?> </td>
                </tr>

            <?php endforeach; ?>
        </tbody>

    </table>



</div>