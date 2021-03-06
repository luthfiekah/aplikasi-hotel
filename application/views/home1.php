
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>HOTELKU!</title>
  </head>
  <body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotelku</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#kamar">Kamar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#fasilitas">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="<?php echo base_url() ?>/assets/img/banner.jpg" alt="" width="700" height="530">
    <div>

<!-- Akhir Navbar -->


<!-- Jumbotron -->
<div class="jumbotron">
      <h1>Hotel Hebat</h1>
      <p>Hotel Terbaik Untuk Keluarga</p>
    <div>
    </div>
  </div>

 <!-- Aboute Me --> 
<section class="about text-center">
  <div class="my-4">
    <h3>About Me</h3>
    <p>Harga Yang Terjangkau,Bersih Dan Fasilitas yang Lengkap</p>
  </div>
<selecion>

  <!-- Akhir Aboute Me -->



 <!-- Box -->

 <section class="about text-center">
 <section class="py-5" id="kamar">
  <div class="my-4">
    <h4>KAMAR REGULER</h4>
  </div>
<selecion>

  <section class="box">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="<?php echo base_url() ?>/assets/img/kamar1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">KAMAR REGULER 1</h4>
              <strong class="card-text">Harga 300.000</strong>
              <h5 class="card-text">Fasilitas Hotel</h5>
              <p class="card-text">Restoran, Parkir, Kolam Renang</p>
              <h5 class="card-text">Fasilitas Kamar</h5>
              <p class="card-text">WIFI, Televisi, Kamar Mandi, Kopi Dan Teh, AC, Mandi Air Panas</p>
              <h6 class="card-text">Harga 300.000<h6>
              
         <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Reservasi Sekarang
                      </button>
                    </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
              <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="staticBackdropLabel">Fasilitas Hotel</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                                                <div class="mb-3">
                                                <label for="check_in" class="form-label">Check in</label>
                                                <input type="date" class="form-control" name="check_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_in" class="form-label">Jam Masuk</label>
                                                <input type="time" class="form-control" name="time_in">
                                                </div>
                                                <div class="mb-3">
                                                <label for="check_out" class="form-label">Check Out</label>
                                                <input type="date" class="form-control" name="check_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="time_out" class="form-label">Jam Keluar</label>
                                                <input type="time" class="form-control" name="time_out">
                                                </div>
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         

        <div class="col-sm-4">
          <div class="card">
            <img src="<?php echo base_url() ?>/assets/img/kamar2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">KAMAR REGULER 2</h4>
              <h5 class="card-text">Fasilitas Hotel</h5>
              <p class="card-text">Restoran, Parkir</p>
              <h5 class="card-text">Fasilitas Kamar</h5>
              <p class="card-text">WIFI, Televisi, Kamar Mandi, Kopi Dan Teh, AC</p>
              <h6 class="card-text">Harga 370.000<h6>
              
         <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        Reservasi Sekarang
                      </button>
        <!-- Modal -->   
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel6">Kamar Premium 3</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p class="card-text">SILAHKAN UNTUK MEMESAN</p>
                                  </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                              <div class="mb-3">
                                <label for="kode_booking" class="form-label">Kode Booking</label>
                                <input type="number" class="form-control" name="kode_booking">
                                </div>
                                <div class="mb-3">
                                <label for="check_in" class="form-label">Check in</label>
                                <input type="date" class="form-control" name="check_in">
                                </div>
                                <div class="mb-3">
                                <label for="time_in" class="form-label">Jam Masuk</label>
                                <input type="time" class="form-control" name="time_in">
                                </div>
                                <div class="mb-3">
                                <label for="check_out" class="form-label">Check Out</label>
                                <input type="date" class="form-control" name="check_out">
                                </div>
                                <div class="mb-3">
                                <label for="time_out" class="form-label">Jam Keluar</label>
                                <input type="time" class="form-control" name="time_out">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                              </div>
                          </div>   
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>



        <div class="col-sm-4">
          <div class="card">
            <img src="<?php echo base_url() ?>/assets/img/kamar3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">KAMAR REGULER 3</h4>
              <h5 class="card-text">Fasilitas Hotel</h5>
              <p class="card-text">Restoran, Parkir, Kolam Renang</p>
              <h5 class="card-text">Fasilitas Kamar</h5>
              <p class="card-text">WIFI, Televisi, Kamar Mandi, Kopi Dan Teh, AC</p>
              <h6 class="card-text">Harga 340.000<h6>
              
         <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        Reservasi Sekarang
                      </button>
        <!-- Modal -->   
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel6">Kamar Premium 3</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p class="card-text">SILAHKAN UNTUK MEMESAN</p>
                                  </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                              <div class="mb-3">
                                <label for="kode_booking" class="form-label">Kode Booking</label>
                                <input type="number" class="form-control" name="kode_booking">
                                </div>
                                <div class="mb-3">
                                <label for="check_in" class="form-label">Check in</label>
                                <input type="date" class="form-control" name="check_in">
                                </div>
                                <div class="mb-3">
                                <label for="time_in" class="form-label">Jam Masuk</label>
                                <input type="time" class="form-control" name="time_in">
                                </div>
                                <div class="mb-3">
                                <label for="check_out" class="form-label">Check Out</label>
                                <input type="date" class="form-control" name="check_out">
                                </div>
                                <div class="mb-3">
                                <label for="time_out" class="form-label">Jam Keluar</label>
                                <input type="time" class="form-control" name="time_out">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                              </div>
                          </div>   
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>


       <section class="about text-center">
  <div class="my-4">
    <h4>KAMAR PREMIUM</h4>
  </div>
<selecion>

  <section class="box">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="card">
            <img src="<?php echo base_url() ?>/assets/img/kamar4.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h4 class="card-text">KAMAR PREMIUM 1</h4>
              <h5 class="card-text">Fasilitas Hotel</h5>
              <p class="card-text">Breakfast, Restoran, Parkir, Kolam Renang, Bar</p>
              <h5 class="card-text">Fasilitas Kamar</h5>
              <p class="card-text">WIFI, Televisi, Kamar Mandi, Kopi Dan Teh, Ruang Bebas Rokok, Seprai Kualitas Premium, AC, Mandi Air Panas</p>
              <h6 class="card-text">Harga 1.000.000<h6>
              
        <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                      Reservasi Sekarang
                    </button>
        <!-- Modal -->   
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel6">Kamar Premium 3</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p class="card-text">SILAHKAN UNTUK MEMESAN</p>
                                  </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                              <div class="mb-3">
                                <label for="kode_booking" class="form-label">Kode Booking</label>
                                <input type="number" class="form-control" name="kode_booking">
                                </div>
                                <div class="mb-3">
                                <label for="check_in" class="form-label">Check in</label>
                                <input type="date" class="form-control" name="check_in">
                                </div>
                                <div class="mb-3">
                                <label for="time_in" class="form-label">Jam Masuk</label>
                                <input type="time" class="form-control" name="time_in">
                                </div>
                                <div class="mb-3">
                                <label for="check_out" class="form-label">Check Out</label>
                                <input type="date" class="form-control" name="check_out">
                                </div>
                                <div class="mb-3">
                                <label for="time_out" class="form-label">Jam Keluar</label>
                                <input type="time" class="form-control" name="time_out">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                              </div>
                          </div>   
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>


            <div class="col-sm-4">
                <div class="card">
                  <img src="<?php echo base_url() ?>/assets/img/kamar5.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h4 class="card-text">KAMAR PREMIUM 2</h4>
                    <h5 class="card-text">Fasilitas Hotel</h5>
                    <p class="card-text">Breakfast, Makan Siang, Restoran, Parkir, Kolam Renang, Bar, Lift</p>
                    <h5 class="card-text">Fasilitas Kamar</h5>
                    <p class="card-text">WIFI, Televisi, Double Kamar Mandi, Kopi, Teh Dan Air Putih, Ruang Bebas Rokok, Seprai Kualitas Premium,AC, Family Room, Mandi Air Panas</p>
                    <h6 class="card-text">Harga 1.500.000<h6>
                    
              <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                            Reservasi Sekarang
                          </button>
              <!-- Modal -->   
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel6">Kamar Premium 3</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p class="card-text">SILAHKAN UNTUK MEMESAN</p>
                                  </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                              <div class="mb-3">
                                <label for="kode_booking" class="form-label">Kode Booking</label>
                                <input type="number" class="form-control" name="kode_booking">
                                </div>
                                <div class="mb-3">
                                <label for="check_in" class="form-label">Check in</label>
                                <input type="date" class="form-control" name="check_in">
                                </div>
                                <div class="mb-3">
                                <label for="time_in" class="form-label">Jam Masuk</label>
                                <input type="time" class="form-control" name="time_in">
                                </div>
                                <div class="mb-3">
                                <label for="check_out" class="form-label">Check Out</label>
                                <input type="date" class="form-control" name="check_out">
                                </div>
                                <div class="mb-3">
                                <label for="time_out" class="form-label">Jam Keluar</label>
                                <input type="time" class="form-control" name="time_out">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                              </div>
                          </div>   
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>

              
              <div class="col-sm-4">
                <div class="card">
                  <img src="<?php echo base_url() ?>/assets/img/kamar6.jpg" class="card-img-top" alt="...">
                  <div class="card-body">
                  <h4 class="card-text">KAMAR PREMIUM 3</h4>
                    <h5 class="card-text">Fasilitas Hotel</h5>
                    <p class="card-text">Breakfast, Makan Siang, Restoran, Parkir, Kolam Renang, Bar, Lift</p>
                    <h5 class="card-text">Fasilitas Kamar</h5>
                    <p class="card-text">WIFI, Televisi, Kamar Mandi, Kopi Dan Teh, Ruang Bebas Rokok, Seprai Kualitas Premium,AC, Family Room, Mandi Air Panas</p>
                    <h6 class="card-text">Harga 950.000<h6>
                    
              <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                            Reservasi Sekarang</button>
              <!-- Modal -->   
                        <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel6">Kamar Premium 3</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  <p class="card-text">SILAHKAN UNTUK MEMESAN</p>
                                  </div>
                            <div class="modal-body">
                              <form method="post" action="<?php echo base_url('reservasi/simpan') ?>">
                              <div class="mb-3">
                                <label for="kode_booking" class="form-label">Kode Booking</label>
                                <input type="number" class="form-control" name="kode_booking">
                                </div>
                                <div class="mb-3">
                                <label for="check_in" class="form-label">Check in</label>
                                <input type="date" class="form-control" name="check_in">
                                </div>
                                <div class="mb-3">
                                <label for="time_in" class="form-label">Jam Masuk</label>
                                <input type="time" class="form-control" name="time_in">
                                </div>
                                <div class="mb-3">
                                <label for="check_out" class="form-label">Check Out</label>
                                <input type="date" class="form-control" name="check_out">
                                </div>
                                <div class="mb-3">
                                <label for="time_out" class="form-label">Jam Keluar</label>
                                <input type="time" class="form-control" name="time_out">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                              </div>
                          </div>   
                        </div>
                    </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<section>


        <!-- Fasilitas -->
                    <section class="about text-center">
                    <section class="py-5" id="fasilitas">
                      <div class="my-4">
                        <h4>FASILITAS</h4>
                      </div>
                  <selecion>
                  <div class="card-group">
                    <div class="card">
                      <img src="<?php echo base_url() ?>/assets/img/fasilitas1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="<?php echo base_url() ?>/assets/img/kolam.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="<?php echo base_url() ?>/assets/img/kamar6.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <section>

  <!-- Footer About -->
  <section class="about text-center">
                    <section class="py-5" id="about">
                      <div class="my-4">
                        <h4>ABOUT</h4>
                      </div>
                    </div>
  <footer class="bg-light text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-4">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Tentang Hotel</h5>

        <p>
          Pesan hotel sekarang, disini memiliki kualitas hotel
          yang premium yang pasti harganya pun terjangkau dan 
          memiliki fasilitas-fasilitas yang lengkap contonya 
          seperti kolam renang, parkiran, restoran dan masih banyak 
          lagi fasilitas-fasilitas yang berada di sini.
        </p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Tentang Aplikasi</h5>

        <p>
          aplikasi ini adalah aplikasi berbasis web yang menyediakan layanan 
          pemesanan hotel dengan cara online, anda tinggal memesan saja tidak perlu
          untuk mengunjungi hotel tersebut.
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
 Copyright ?? 2022 HotelKu
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

</div>
</div>
</div>



 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>