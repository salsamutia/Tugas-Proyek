<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data dari Form</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

        <!-- conten -->
        <div class="row mb-2">
          <div class="col-sm-12">

              <table class="table table-bordered">
                  <tbody>
                      <tr><td>ID</td><td><?= $pembelian->id?></td></tr>
                      <tr><td>Tanggal</td><td><?= $pembelian->tanggal?></td></tr>
                      <tr><td>Jumlah</td><td><?= $pembelian->jumlah?></td></tr>
                      <tr><td>Harga</td><td><?= $pembelian->harga?></td></tr>
                      <tr><td>ID Produk</td><td><?= $pembelian->produk_id?></td></tr>
                      <tr><td>ID Suplier</td><td><?= $pembelian->suplier_id?></td></tr>
                  </tbody>
              </table>  

          </div>
        </div>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->