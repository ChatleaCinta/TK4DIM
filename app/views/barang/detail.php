<!-- Begin page content -->
<main role="main" class="container">
    <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Detail Barang</h1>
        <a href="<?=  URL . '/barang' ?>" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <hr />
    <input type="hidden" name="IdBarang" value="<?php if (isset($data_barang->IdBarang)) echo $data_barang->IdBarang; ?>" />
    <div class="form-group">
        <label for="iduser" class="col-sm-2 control-label">Nama Pengguna</label>
        <div class="col-sm-10">
        <select class="form-control" id="iduser" name="iduser" disabled>
            <option value="" selected>-- Pilih pengguna --</option>
            <?php foreach ($data_pengguna as $pengguna) { ?>
                <option value="<?php if (isset($pengguna->iduser)) echo $pengguna->iduser; ?>" <?php if (isset($data_barang->iduser) && $data_barang->iduser == $pengguna->iduser) echo 'selected'; ?>><?php if (isset($pengguna->username)) echo $pengguna->username; ?></option>
            <?php } ?>
        </select>
        </div>
    </div>
    <div class="form-group">
        <label for="NamaBarang" class="col-sm-2 control-label">Nama Barang</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" placeholder="Masukan nama barang" value="<?php if (isset($data_barang->NamaBarang)) echo $data_barang->NamaBarang; ?>" disabled>
        </div>
    </div>
    <div class="form-group">
        <label for="Keterangan" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="Keterangan" name="Keterangan" placeholder="Masukan keterangan" disabled><?php if (isset($data_barang->Keterangan)) echo $data_barang->Keterangan; ?></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="Keterangan" class="col-sm-2 control-label">Satuan</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="Satuan" name="Satuan" placeholder="Masukan satuan" value="<?php if (isset($data_barang->Satuan)) echo (int) $data_barang->Satuan; ?>" disabled>
        </div>
    </div>
</main>