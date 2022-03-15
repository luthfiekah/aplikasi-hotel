<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>HOTELKU</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
        <div class="container">
          <a class="navbar-brand" href="#">HOTELKU</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#kamar">Kamar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#fasilitas">Fasilitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">HotelKu</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Aplikasi penyedia layanan pemesanan Hotel yang aman, mudah, dan terpecaya untuk customer yang kami hormati.</p>
      </div>
    
      <div class="box py-5">
            <div class="container">
              <div class="alert alert-primary" role="alert">
                Masukkan Data Diri anda terlebih dahulu
              </div>
              <form method="post" action="<?php echo base_url('tamu/simpan') ?>">
              <div class="mb-3">
                                                <label for="nik" class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nama_depan" class="form-label">Nama Depan</label>
                                                <input type="text" class="form-control" name="nama_depan">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nama_depan" class="form-label">Nama Belakang</label>
                                                <input type="text" class="form-control" name="nama_belakang">
                                                </div>
                                                <div class="mb-3">
                                                <label for="tipe_identitas" class="form-label">Tipe Identitas</label>
                                                <select class="form-control" style="width: 100%;" name="tipe_identitas">
                                                    <option selected="selected">- Pilih -</option>
                                                    <option value="ktp">KTP</option>
                                                    <option value="simk">SIM</option>
                                                    <option value="passport">Passport</option>
                                                </select>
                                                <div class="mb-3">
                                                <label for="nama_depan" class="form-label">Nomor Identitas</label>
                                                <input type="text" class="form-control" name="nomor_identitas">
                                                </div>
                                                <div class="mb-3">
                                                <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
                                                <select class="form-control" style="width: 100%;" name="kewarganegaraan">
                                                    <option selected="selected">- Pilih -</option>
                                                    <option value="wni">WNI</option>
                                                    <option value="wna">WNA</option>
                                                </select>
                                                </div>
                                                <div class="mb-3">
                                                <label for="nomor_identitas" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nomor_identitas" class="form-label">Telepon</label>
                                                <input type="text" class="form-control" name="no_hp">
                                                </div>
                                                <div class="mb-3">
                                                <label for="nomor_identitas" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="email">
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
                                                <div class="mb-3">
                                                <label for="biaya" class="form-label">Biaya</label>
                                                <input type="text" class="form-control" name="biaya">
                                                </div>
                                              </div>
                                              <button type="submit" class="btn btn-sm btn-primary">Pesan sekarang</button>
                                            </form>
                                          </div>
                                        </div>

         
          <script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
          <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
          <script>
            AOS.init();
          </script>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html> 