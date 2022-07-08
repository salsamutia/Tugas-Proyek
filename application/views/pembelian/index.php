<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        h3{
            margin:30px;
            text-align:center;
        }
        table{
            text-align:center;         
        }
        a{
          margin:0px 0px 20px 0px;
        }
    </style>

    <title>Daftar Pembelian Produk</title>
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

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Daftar Pembelian Produk</h3>

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

        <!-- Konten -->
        <h3>Data Pembelian Produk</h3>
        <a class="btn btn-primary" href="pembelian/create" role="button"><i class="fas fa-plus-circle"></i> Create Pembelian Produk</a><br>
          <table class="table table-bordered">
            <thead class="table-secondary">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                    <th scope="col">ID Produk</th>
                    <th scope="col">ID Suplier</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    foreach($list_pembelian as $pembelian){
                ?>
                <tr>
                    <td><?= $pembelian->id ?></td>
                    <td><?= $pembelian->tanggal ?></td>
                    <td><?= $pembelian->jumlah ?></td>
                    <td><?= $pembelian->harga ?></td>
                    <td><?= $pembelian->produk_id ?></td>
                    <td><?= $pembelian->suplier_id ?></td>
                    <td>
                      <a class="btn btn-success" href="pembelian/view?id=<?=$pembelian->id?>"><i class="far fa-eye"></i> </a>
                      <a class="btn btn-primary" href="pembelian/edit?id=<?=$pembelian->id?>"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-danger" href="pembelian/delete?id=<?=$pembelian->id?>"
                      onclick="if(!confirm('Anda Yakin Akan Menghapus Data Pembelian Produk dengan ID : <?=$pembelian->id?>?')){return false}"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
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
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>


    