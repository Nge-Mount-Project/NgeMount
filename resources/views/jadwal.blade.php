@extends('layouts.app')

@section('title', 'Nge-Mount | Home')

@section('content')
<br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-5">

    </div>
    <div class="col-md-4">
      <h1 style="color:white">Jadwal Pendakian</h1>
    </div>
    <div class="col-md-2">

    </div>
  </div>
  <div class="row">
    <table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">TUJUAN</th>
      <th scope="col">TANGGAL</th>
      <th scope="col">KUOTA</th>
      <th scope="col">&nbsp;STATUS</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Gunung Prau</td>
      <td>18 Desember 2018</td>
      <td>10 orang</td>
      <td><button type="button" class="btn btn-success">&nbsp;Tersedia&nbsp;</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Gunung Semeru</td>
      <td>20 Januari 2019</td>
      <td>8 orang</td>
      <td><button type="button" class="btn btn-success">&nbsp;Tersedia&nbsp;&nbsp;</button></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Gunung Merbabu</td>
      <td>22 Januari 2019</td>
      <td>6 orang</td>
      <td><button type="button" class="btn btn-danger">&nbsp;Penuh&nbsp;</button></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Gunung Rinjani</td>
      <td>12 Maret 2019</td>
      <td>10 orang</td>
      <td><button type="button" class="btn btn-success">&nbsp;Tersedia&nbsp;</button></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Gunung Kelud</td>
      <td>10 April 2019</td>
      <td>12 orang</td>
      <td><button type="button" class="btn btn-danger">&nbsp;Penuh&nbsp;</button></td>
    </tr>

  </tbody>
</table>
  </div>
</div>
@endsection
