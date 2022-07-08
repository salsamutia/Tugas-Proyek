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
    </style>

    <title>Daftar Suplier</title>
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

    <h2>Form Kelola Suplier</h2>

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Form Suplier</h3>

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

        <?php echo form_open('suplier/save')?>
        <div class="form-group row">
          <label for="id" class="col-4 col-form-label">ID</label> 
          <div class="col-8">
            <input id="id" name="id"  placeholder="Masukkan ID Suplier" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="nama" class="col-4 col-form-label">Nama</label> 
          <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Suplier" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="Kota" class="col-4 col-form-label">Kota</label> 
          <div class="col-8">
            <input id="kota" name="kota" placeholder="Masukkan Asal Kota Suplier" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="kontak" class="col-4 col-form-label">Kontak</label> 
          <div class="col-8">
            <input id="kontak" name="kontak" placeholder="Masukkan Kontak yang Dapat Dihubungi" type="text" class="form-control">
          </div>
        </div>
        <div class="form-group row">
          <label for="alamat" class="col-4 col-form-label">Alamat</label> 
          <div class="col-8">
            <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="telpon" class="col-4 col-form-label">Telpon</label> 
          <div class="col-8">
            <input id="telpon" name="telpon" placeholder="Masukkan No Telpon yang Dapat Dihubungi" type="text" class="form-control">
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