@extends('layout.tamplate')

@section('content')
    <div class="container">
    <h1>Data Alumni Universitas Sultan Ageng Tirtayasa</h1>
    <a class="btn btn-outline-info" href="/alumni/create">Tambah Data</a>
        <table class="table table-hover">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Angkatan</th>
                <th>Jurusan</th>
                 <th>Fakultas</th>
                <th>Aksi</th>
                </tr>
                @foreach($alumniuntirta as $key)
                    <tr>
                        <td>{{$key->nama}}</td>
                        <td>{{$key->nim}}</td>
                        <td>{{$key->angkatan}}</td>
                        <td>{{$key->jurusan}}</td>
                        <td>{{$key->fakultas}}</td>
                        <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a class="btn btn-warning" href="/alumni/{{$key->id}}/edit">Edit</a>
                            <form action="/alumni/{{$key->id}}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Hapus">
                            </form>
                        </div>
                        </td>
                    </tr>
            @endforeach
        </table>
    </div>
@endsection
