<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        h2{
            margin:0px 0px 30px 0px;
            text-align:center;
        }
        .form-group{
            margin:30px;
        }
    </style>

    <title>Daftar Produk</title>
  </head>
  <body>

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

    <h2>Form Kelola Data Produk</h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Data Produk</h3>

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

        <!-- ini untuk ngatur hidden field nya -->
        <?php
            $hidden = ['produk_edit'=> $produk_edit->id];
        ?>
        <?php echo form_open('produk/save', '', $hidden)?>
          <div class="form-group row">
              <label for="id" class="col-4 col-form-label">ID</label> 
              <div class="col-8">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fa fa-address-card"></i>
                    </div>
                  </div> 
                  <input id="id" name="id" value="<?=$produk_edit->id?>" placeholder="Masukkan ID" type="text" class="form-control">
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label for="kode" class="col-4 col-form-label">Kode</label> 
              <div class="col-8">
                <input id="kode" name="kode" value="<?=$produk_edit->kode?>" placeholder="Masukkan Kode Produk" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="nama" class="col-4 col-form-label">Nama</label> 
              <div class="col-8">
                <input id="nama" name="nama" value="<?=$produk_edit->nama?>" placeholder="Masukkan Nama Produk" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="stok" class="col-4 col-form-label">Stok</label> 
              <div class="col-8">
                <input id="stok" name="stok" value="<?=$produk_edit->stok?>" placeholder="Masukkan Stok Produk" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
              <div class="col-8">
                <input id="harga_beli" name="harga_beli" value="<?=$produk_edit->harga_beli?>" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
              <div class="col-8">
                <input id="harga_jual" name="harga_jual" value="<?=$produk_edit->harga_jual?>" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="jenis_id" class="col-4 col-form-label">ID Jenis</label> 
              <div class="col-8">
                <input id="jenis_id" name="jenis_id" value="<?=$produk_edit->jenis_id?>" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row">
              <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
              <div class="col-8">
                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"><?=$produk_edit->deskripsi?></textarea>
              </div>
            </div> 
            <div class="form-group row">
              <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
        <?php echo form_close()?>

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