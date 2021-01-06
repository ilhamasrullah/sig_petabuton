<div class="page-header">
    <h1 align="center">Tambah Tempat</h1>
</div>
<div class="col-md-3">
</div>
<div class="jumbotron col-md-6">
    <?= form_open_multipart('admin/proses_input') ?>
    <div class="form-group">
        <label for="nama_jalan">Nama Jalan</label>
        <input type="text" name="nama_jalan" class="form-control" placeholder="Masukan Nama Jalan" id="nama_jalan" required>
    </div>
    <div class="form-group">
        <label for="status_jalan">Status Jalan</label>
        <input type="text" name="status_jalan" class="form-control" placeholder="Masukan Status Jalan" id="status_jalan" required>
    </div>
    <div class="form-group">
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="kecamatan" class="form-control" placeholder="Masukan Nama Kecamatan" id="kecamatan" required>
    </div>
    <div class="form-group">
        <label for="kelurahan">Kelurahan</label>
        <input type="text" name="kelurahan" class="form-control" placeholder="Masukan Nama Kelurahan" id="kelurahan" required>
    </div>
    <div class="form-group">
        <label for="kerusakan">Kerusakan</label>
        <input type="text" name="kerusakan" class="form-control" placeholder="Masukan Kerusakan" id="kerusakan" required>
    </div>
    <div class="form-group">
        <label for="penyebab">Penyebab</label>
        <input type="text" name="penyebab" class="form-control" placeholder="Masukan Penyebab" id="penyebab" required>
    </div>
    <div class="form-group">
        <label for="lat">Masukkan latitude</label>
        <input type="double" name="lat" class="form-control" placeholder="Masukan Latitude" id="lat" required>
    </div>
    <div class="form-group">
        <label for="lng">Masukkan Longitude</label>
        <input type="double" name="lng" class="form-control" placeholder="Masukan Longitude" id="lng" required>
    </div>
    <div class="form-group">
        <label>Gambar <span class="text-danger">*</span></label>
        <input class="form-control" type="file" name="userfile" class="file" />
    </div>
    <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
</div>

<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
<script type="text/javascript">
    $(document).on('click', '.browse', function() {
        var file = $(this).parent().parent().parent().find('.file');
        file.trigger('click');
    });
    $(document).on('change', '.file', function() {
        $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
</script>
</form>