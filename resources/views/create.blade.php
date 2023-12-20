@extends('layout.tamplate')

@section('content')
    <div class="container">
    <h1>Tambah Data Alumni Untirta</h1>
    @csrf
    <form action="/alumni/store" method="POST">
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="nama" class="form-control" placeholder="Nama">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIM</label>
      <input type="number" id="nim" class="form-control" placeholder="NIM">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Angkatan</label>
      <input type="number" id="angkatan" class="form-control" placeholder="angkatan">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jurusan</label>
      <input type="text" id="jurusan" class="form-control" placeholder="Jurusan">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Fakultas</label>
      <input type="text" id="fakultas" class="form-control" placeholder="Fakultas">
    </div>
    <input type="submit"name="submit" class="btn btn-outline-info" value="Simpan">
    
    </form>
    </div>
@endsection 
    
   