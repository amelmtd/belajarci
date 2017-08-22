<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <link rel="stylesheet" href="assets/app/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="assets/app/font-awesome/css/font-awesome.css">
  </head>
  <body>
  
    

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
    <th> <center> NAMA PEMBELI </center></th>
    <th> <center> NAMA MENU</center> </th>
    <th> <center> HARGA </center> </th>
    <th> <center> AKSI </center> </th>
  </tr>
</thead>

<tbody>
  <tr>
  <td> Amilya Rosari M. </td>
  <td> Roti Bakar </td>
  <td> Rp 100.000 </td>
  <td>
    <div class="row">
    <div class="col-md-12 col-xs-12">
      <button class="btn btn-info"> <i class="fa fa-edit"> Edit </i> </button>
      <button class="btn btn-info"> <i class="fa fa-eraser"> Hapus </i> </button>
      <button class="btn btn-info"> <i class="fa fa-print"> Cetak </i> </button>
    </div>
    </div>
    </td>
  </tr>
</tbody>
 
</table>
</div>


<div class="modal fade" id="Tambah" tab-index="-1" role="dialog" aria-labelledbay="Mymodal" data-backdrop="static">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <p> Header </p>
      <div class="modal-body">
        <button class="btn btn-info" data-dismiss="modal">
        </button>
      </div>
    </div>
  </div>
</div>  
</div>


    <script src="assets/app/bootstrap/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  </body>
</html>