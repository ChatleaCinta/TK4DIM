<!-- Begin page content -->
<main role="main" class="container">
    <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Edit Barang</h1>
        <a href="<?=  URL . '/barang' ?>" class="btn btn-secondary float-right">Kembali</a>
    </div>
    <hr />
    <form class="form-horizontal" action="<?php echo URL . '/barang/proses_edit'; ?>" method="POST">
        <input type="hidden" name="IdBarang" value="<?php if (isset($data_barang->IdBarang)) echo $data_barang->IdBarang; ?>" />
        <div class="form-group">
            <label for="iduser" class="col-sm-2 control-label">Id Pengguna</label>
            <div class="col-sm-10">
            <select class="form-control" id="iduser" name="iduser" required>
                <option value="" selected>-- Pilih Pengguna --</option>
                <?php foreach ($data_pengguna as $pengguna) { ?>
                    <option value="<?php if (isset($pengguna->iduser)) echo $pengguna->iduser; ?>" 
                    <?php if (isset($data_barang->iduser) && $data_barang->iduser == $pengguna->iduser) echo 'selected'; ?>>
                    <?php if (isset($pengguna->iduser)) echo $pengguna->iduser; ?>
                    </option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group">
            <label for="NamaBarang" class="col-sm-2 control-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="NamaBarang" name="NamaBarang" placeholder="Masukan nama barang" value="<?php if (isset($data_barang->NamaBarang)) echo $data_barang->NamaBarang; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <label for="Keterangan" class="col-sm-2 control-label">Keterangan</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="Keterangan" name="Keterangan" placeholder="Masukan keterangan" required><?php if (isset($data_barang->Keterangan)) echo $data_barang->Keterangan; ?></textarea>
            </div>
        </div>
        <div class="form-group">
            <label for="Keterangan" class="col-sm-2 control-label">Satuan</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="Satuan" name="Satuan" placeholder="Masukan satuan" value="<?php if (isset($data_barang->Satuan)) echo (int) $data_barang->Satuan; ?>" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary float-right" name="edit_barang">Edit barang</button>
            </div>
        </div>
    </form>
</main>