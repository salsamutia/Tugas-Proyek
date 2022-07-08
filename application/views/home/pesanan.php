<!doctype html>
<html lang="en">

<head>
   
    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--====== Title ======-->
    <title>Promosi Produk UMKM</title>
    
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon"  href="<?php echo base_url('assets/images/logo123.png')?>" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css')?>">
    
    <!--====== Animate css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    
    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">
    
    <!--====== Slick css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/slick.css')?>">
    
    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/LineIcons.css')?>">
    
    <!--====== Default css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/default.css')?>">
    
    <!--====== Style css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
    
    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/responsive.css')?>">
</head>

<body>
   
    <!--====== PRELOADER PART START ======-->
    
    <div class="preloader">
        <div class="spin">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    
    <!--====== PRELOADER PART START ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="home">
                          <img src="<?php echo base_url('assets/images/logo1.png')?>" alt="Logo">
                        </a> <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="#home">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#product">Collection</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#service">Cara Pemesanan</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#produk">Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#showcase">Detail Toko</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#team">Team</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="#contact">Contact</a>
                                </li>
                            </ul> <!-- navbar nav -->
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </header>
    
    <!--====== HEADER PART ENDS ======-->
   
    <!-- Main content -->
    
    <!--====== BACK TO TOP PART START ======-->
    
    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>
    
    <!--====== BACK TO TOP PART ENDS ======-->
    
    
    <!--====== SERVICES PART START ======-->
    
    <section id="#" class="services-area pt-125 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title pb-30">
                        <h3 class="title mb-15">Formulir Pemesanan Produk</h3>
                    </div> <!-- section title -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                        <img src="<?php echo base_url('uploads/'. $produk->foto) ?>" alt="image">
                </div>
                <div class="col-lg-8">
                <?php echo form_open('home/save')?>
                <input type="hidden" name="users_id" value="<?php echo $this->session->userdata('USERID')?>">
                <input type="hidden" name="produk_id" value="<?php echo $produk->id?>">
                          
                          <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label> 
                            <div class="col-8">
                              <input id="tanggal" name="tanggal" placeholder="YYYY-MM-DD" type="date" class="form-control">
                            </div>
                          </div>
                          <br>
                          <div class="form-group row">
                            <label for="jumlah" class="col-4 col-form-label">Jumlah Pesanan</label> 
                            <div class="col-8">
                              <input id="jumlah" name="jumlah" type="text" class="form-control">
                            </div>
                          </div>
                          <br>
                          <div class="form-group row">
                            <div class="offset-4 col-8">
                              <button name="submit" type="submit" class="btn btn-success btn-block">Pesan</button>
                            </div>
                          </div>
                    <?php echo form_close()?>
                    </div> <!-- services left -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
      
    </section>
    
    <!--====== SERVICES PART ENDS ======-->
    
    <!--====== DISCOUNT PRODUCT PART ENDS ======-->
   
    
    
    
    
    
    
    
    
    <!--====== jquery js ======-->
    <script src="<?php echo base_url('assets/js/vendor/modernizr-3.6.0.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js')?>"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
    
    
    <!--====== Slick js ======-->
    <script src="<?php echo base_url('assets/js/slick.min.js')?>"></script>
    
    <!--====== Magnific Popup js ======-->
    <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>

    
    <!--====== nav js ======-->
    <script src="<?php echo base_url('assets/js/jquery.nav.js')?>"></script>
    
    <!--====== Nice Number js ======-->
    <script src="<?php echo base_url('assets/js/jquery.nice-number.min.js')?>"></script>
    
    <!--====== Main js ======-->
    <script src="<?php echo base_url('assets/js/main.js')?>"></script>

</body>

</html>
