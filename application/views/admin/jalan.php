<div class="page-header">
    <div class="container">
        <h1>Daftar Kerusakan jalan </h1>
    </div>
</div>
<div class="container">
    <div class="panel-heading">
        <form class="form-inline">
            <input type="hidden" name="m" value="tempat" />
            <div class="form-group">
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
                <a class="btn btn-primary" href="tambah_data"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>
        </form>
    </div>

    <!-- <button type="button" class="btn btn-success mb-2" data-toggle="modal" data-target="#addModal">Tambah data</button> -->
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
                <td>Tabel kerusakan</td>
                <td>Penyebab</td>
                <td>Kelurahan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data->result_array() as $i) : {
                    $id_tempat = $i['id_tempat'];
                    $gambar = $i['gambar'];
                    $nama_jalan = $i['nama_jalan'];
                    $lat = $i['lat'];
                    $lng = $i['lng'];
                    $status_jalan = $i['status_jalan'];
                    $kecamatan = $i['kecamatan'];
                    $kerusakan = $i['kerusakan'];
                    $tabel_presentasi = $i['tabel_presentasi'];
                    $penyebab = $i['penyebab'];
                    $kelurahan = $i['kelurahan'];
            ?>
                    <tr>
                        <td><?php echo $id_tempat; ?> </td>
                        <td><a href="assets/upload/<?php echo $i['gambar']; ?>"><img class="thumbnail" src="assets/upload/<?php echo $i['gambar']; ?>" height="80"></a></td>
                        <td><?php echo $nama_jalan; ?> </td>
                        <td><?php echo $lat; ?> </td>
                        <td><?php echo $lng; ?> </td>
                        <td><?php echo $status_jalan; ?> </td>
                        <td><?php echo $kecamatan; ?> </td>
                        <td><?php echo $kerusakan; ?> </td>
                        <td><?php echo $tabel_presentasi; ?> </td>
                        <td><?php echo $penyebab; ?> </td>
                        <td><?php echo $kelurahan; ?> </td>
                        <td class="nw">
                            <a class="btn btn-xs btn-warning" href="jalan2"><span class="glyphicon glyphicon-edit"></span></a>
                            <!-- <a class="btn btn-xs btn-danger" href="<?php echo base_url() ?>admin/hapus/<?php echo $i->id_tempat; ?>" onclick="return confirm('Hapus data?')"><span class="glyphicon glyphicon-trash"></span></a> -->
                            <a class="btn btn-xs btn-danger" href="<?php echo base_url() ?>admin/hapus/<?php echo $id_tempat; ?>" onclick="return confirm('Hapus data?')"> <span class="glyphicon glyphicon-trash"></span></a>
                        </td>
                    </tr>

            <?php

                }
            endforeach; ?>

        </tbody>

    </table>



</div>