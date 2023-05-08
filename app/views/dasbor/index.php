<!-- Begin page content -->
<main role="main" class="container">
  <div class="clearfix mb-3 mt-3">
        <h1 class="float-left">Laporan Laba Rugi</h1>
    </div>
  <div class="row">
  <div class="col-sm-3">
      <div class="card text-white bg-info mb-3" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Total Harga Beli</h5>
          <p class="card-text">Rp.<?php echo number_format($data['total_harga_beli'], 0, ',', '.'); ?></p>
        </div>
      </div>
    </div>
  <div class="col-sm-3">
    <div class="card text-white bg-warning mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Harga Jual</h5>
        <p class="card-text">Rp.<?php echo number_format($data['total_harga_jual'], 0, ',', '.'); ?></p>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card text-white bg-danger mb-3" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">Total Untung/Rugi</h5>
        <p class="card-text">Rp.<?php echo number_format($data['total_harga_jual'] - $data['total_harga_beli']); ?></p>
      </div>
    </div>
  </div>
  </div>
  <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Barang</th>
                    <th>Harga Jual</th>
                    <th>Harga Beli</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_barang as $data) { ?>
                <tr>
                    <td><?php if (isset($data->IdBarang)) echo $data->NamaBarang; ?></td>
                    <?php } ?>
                    <td><?php if (isset($data->IdPenjualan)) echo $data->HargaJual; ?></td>
                    <td><?php if (isset($data->IdPembelian)) echo $data->HargaBeli; ?></td>
                    <td><?php if (isset($data->stok)) echo $data->stok; ?></td>
                </tr>
            </tbody>
        </table>
</main>
