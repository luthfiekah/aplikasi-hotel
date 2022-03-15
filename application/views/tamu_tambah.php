<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="m-0"><?php echo $subtitle; ?></h5>
              </div>
              <form class="form-horizontal" method="post" action="<?php echo base_url('tamu/simpan') ?>">
              <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">ID Tamu</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="id_tamu" placeholder="ID Tamu" required>
                    </div>
                  </div>
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nik</label>
                      <div class="col-sm-8">
                        <input type="number" class="form-control" name="nik" placeholder="Nik" required>
                    </div>
                  </div>                               
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Depan</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama_depan" placeholder="Nama Depan" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Belakang</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="nama_belakang" placeholder="Nama Belakang" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tipe Identitas</label>
                    <div class="col-sm-4">
                      <select class="form-control" style="width: 100%;" name="tipe_identitas" required>
                        <option value="0" selected>- Pilih -</option>
                        <option value="ktp">KTP</option>
                        <option value="sim">SIM</option>
                        <option value="passport">Passport</option>
                      </select>
                      </div>
                    </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Identitas</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="nomor_identitas" placeholder="Nomor Identitas" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kewarganegaraan</label>
                    <div class="col-sm-4">
                      <select class="form-control" style="width: 100%;" name="kewarganegaraan" required>
                        <option value="0" selected>- Pilih -</option>
                        <option value="wni">WNI</option>
                        <option value="wna">WNA</option>
                      </select>
                      </div>
                    </div>
                    <div class="card-body">
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="alamat" placeholder="Alamat" required>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Nomer HP</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="no_hp" placeholder="Nomer HP" required>
                      </div>
                    </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="email" placeholder="Email" required>
                    </div>
                  </div>
                  

              </div>
              <div class="card-footer">
                <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                <button type="reset" class="btn btn-sm btn-default">Reset</button>
              </div>
            </form>