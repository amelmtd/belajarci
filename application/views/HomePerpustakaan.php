<div class="container fluid">
<div class="row">
  <div class="jumbotron">
    <h2>Selamat Datang</h2>
    <p>Aplikasi Restoran</p>
<center> <img src="assets/image/aaa.jpg" class="img img-circle" > </center>
    <div>
      <button class="btn btn-default">START</button>
    </div>
  </div>
</div>
</div>


    <div class="container">
      <div class="row">
          <div class="col-md-12 col-xs-6">
            <span class="text-center">
              <h1> Menu </h1>
            </span>
          </div>

          <!--<div class="row">
            <div class="col-md-4 col-xs-12">
              <button class="btn btn-info"> <i class="fa fa-info"> Tambah </i> </button>
            </div>

           <div class="col-md-4 col-xs-12">
              <button class="btn btn-danger">Hapus</button>
            </div>

            <div class="col-md-4 col-xs-12">
              <button class="btn btn-warning">Edit</button>
            </div>-->
            </div>

            </div>

<button class="btn btn-info" data-toggle="modal" data-target="#Tambah"> <i class="fa fa-info"> Tambah </i> </button>
<table class="table table-bordered">
<thead>
  <tr>
    <th> <center> Judul </center></th>
    <th> <center> Penerbit </center> </th>
    <th> <center> Pengarang </center> </th>
    <th> <center> Aksi </center> </th>
  </tr>
</thead>

<tbody>
  <?php foreach ($databuku as $key => $value) { ?>
  <tr>
  <td> <?= $value->Judul; ?> </td>
  <td> <?= $value->Penerbit; ?> </td>
  <td> <?= $value->Pengarang; ?> </td>
  <td>
    <div class="row">
    <div class="col-md-12 col-xs-12">
      <button class="btn btn-warning"> <i class="fa fa-edit"> Edit </i> </button>
      <button class="btn btn-danger"> <i class="fa fa-eraser"> Hapus </i> </button>
      <button class="btn btn-success"> <i class="fa fa-print"> Cetak </i> </button>
    </div>
    </div>
    </td>
  </tr>
  <?php } ?>
</tbody>
 
</table>
</div>


<div class="modal fade" id="Tambah" tab-index="-1" role="dialog" aria-labelledbay="Mymodal" data-backdrop="static">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h3> Silahkan Isi Form : </h3>

          <form action="/action_page.php">
            <div class="form-group">
              <label for="judul">Judul :</label>
              <input type="judul" class="form-control" id="judul" placeholder="Masukkan judul buku" name="judul">
            </div>

            <div class="form-group">
              <label for="penerbit">Penerbit :</label>
              <input type="penerbit" class="form-control" id="penerbit" placeholder="Masukan nama penerbit" name=penerbit>
            </div>

            <div class="form-group">
              <label for="pengarang">Pengarang :</label>
              <input type="pengarang" class="form-control" id="pengarang" placeholder="Masukan nama pengarang" name=pengarang>
            </div>
            <!--<div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
            </div>-->
            <button type="submit" class="btn btn-default"> Tambah </button>
          </form>

        <div class="modal-body">
          <button class="btn btn-danger" data-dismiss="modal"> <i class="fa fa-close"> Keluar </i> </button>
          <!--<div class="container">
            <div class="row">
              <div class="col-md-offset-9 col-xs-2">
              </div>-->
            </div>
          </div>
      </div>
    </div>
  </div>
</div>  
</div>