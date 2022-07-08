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
          <div class="col-sm-8">

              <table class="table table-bordered">
                  <tbody>
                      <tr><td>ID</td><td><?= $produk->id?></td></tr>
                      <tr><td>Kode</td><td><?= $produk->kode?></td></tr>
                      <tr><td>Nama</td><td><?= $produk->nama?></td></tr>
                      <tr><td>Stok</td><td><?= $produk->stok?></td></tr>
                      <tr><td>Harga Beli</td><td><?= $produk->harga_beli?></td></tr>
                      <tr><td>Harga Jual</td><td><?= $produk->harga_jual?></td></tr>
                      <tr><td>ID Jenis</td><td><?= $produk->jenis_id?></td></tr>
                      <tr><td>Deskripsi</td><td><?= $produk->deskripsi?></td></tr>
                  </tbody>
              </table>  

          </div>
          <div class="col-sm-4">
          <?php 
                $filegambar = base_url('uploads/'.$produk->foto);
                // echo $filegambar;

                $array = get_headers($filegambar);
                $string = $array[0];
                if (strpos($string,"200")){
                  //echo 'url_exists';
                  echo '<img width="80%" class="img-thumbnail" src="'.$filegambar.'" alt= "foto"/>';
                }
                else{
                  //echo 'url does not exist';
                  echo '<img src=" '.base_url('/uploads/noimage1.png').' " alt= "foto"/>';
                }
            ?>

            <br>
            Nama File : <?= $produk->foto ?>
            <br>

            <?php
                echo form_open_multipart('produk/upload');
            ?>
            
              <input type="hidden" name="id" value="<?= $produk->id ?>">
              <input type="file" name="fotoproduk" size="20">
              <br>
              <input type="submit" class="btn btn-primary" value="upload">

            <?php echo form_close();?>
          </div>
        </div>
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