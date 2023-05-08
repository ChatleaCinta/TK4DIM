<!-- Begin page content -->
<main role="main" class="container">
    <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Tambah Barang</h1>
        <a href="<?=  URL . '/barang' ?>" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <hr />
    <form class="form-horizontal" action="<?php echo URL . '/barang/proses_tambah'; ?>" method="POST">
        <div class="form-group">
            <label for="iduser" class="col-sm-2 control-label">Id Pengguna</label>
            <div class="col-sm-10">
            <select class="form-control" id="iduser" name="iduser" required>
                <option value="" selected>-- Pilih pengguna --</option>
                <?php foreach ($data_pengguna as $pengguna) { ?>
                    <option value="<?php if (isset($pengguna->iduser)) echo $pengguna->iduser; ?>"><?php if (isset($pengguna->iduser)) echo $pengguna->iduser; ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="NamaBarang" class="col-sm-2 control-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" placeholder="Masukan nama barang" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Keterangan" class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="Keterangan" name="Keterangan" placeholder="Masukan keterangan" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="Keterangan" class="col-sm-2 control-label">Satuan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Satuan" name="Satuan" placeholder="Masukan satuan" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary float-right" name="tambah_barang">Tambah barang</button>
            </div>
        </div>
    </form>
</main>