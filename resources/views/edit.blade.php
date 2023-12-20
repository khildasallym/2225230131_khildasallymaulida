@extends('layout.tamplate')

@section('content')
    <div class="container">
<h1>Edit Data</h1>

<form action="/alumni/{{$alumniuntirta->id}}" method="POST">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" id="nama" class="form-control" placeholder="Nama" value="{{$alumniuntirta->nama}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIM</label>
      <input type="number" id="nim" class="form-control" placeholder="NIM" value="{{$alumniuntirta->nim}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Angkatan</label>
      <input type="number" id="angkatan" class="form-control" placeholder="Angkatan" value="{{$alumniuntirta->angkatan}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jurusan</label>
      <input type="text" id="jurusan" class="form-control" placeholder="Jurusan" value="{{$alumniuntirta->jurusan}}">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Fakultas</label>
      <input type="text" id="fakultas" class="form-control" placeholder="Fakultas" value="{{$alumniuntirta->fakultas}}">
    </div>
    <input type="submit"name="submit" class="btn btn-outline-info" value="Simpan">
    
    
</form>
</div>
@endsection 
    