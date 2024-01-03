@extends('index')
@section('title', 'Home')

@section('isihalaman')
    <div class="container-fluid">
        <h1 class="mt-4">Selamat Datang di Dashboard Admin</h1>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-book"></i> Data Buku
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Data Buku</h5>
                        <p class="card-text">
                            Kelola Data Buku Disini
                        </p>
                        <a href="{{ url('/buku') }}" class="btn btn-danger">Lihat Data Buku</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-users"></i> Data Anggota
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Data Anggota Disini</h5>
                        <p class="card-text">
                            Kelola Data Anggota Disini
                        </p>
                        <a href="{{ url('/anggota') }}" class="btn btn-danger">Lihat Data Anggota</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fas fa-handshake"></i> Data Peminjam
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kelola Data Peminjam Disini</h5>
                        <p class="card-text">
                            Kelola Data Peminjam Disini
                        </p>
                        <a href="{{ url('/pinjam') }}" class="btn btn-danger">Lihat Data Peminjam</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection