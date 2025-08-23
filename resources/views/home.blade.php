@extends('layout.master')
@section('title', 'Home Page')

@section('content')
<div class="container mt-5">
    <div class="row">
        @foreach ($barangs as $barang)
        <div class="col-md-3 mb-4">
            <div class="card h-100" style="width: 18rem;">
                <img src="{{ asset('storage/' . $barang->foto) }}" class="card-img-top" alt="{{ $barang->nama }}" style="height: 210px; object-fit: cover">
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Kategori: {{ $barang->kategori }}</li>
                    <li class="list-group-item">Harga: Rp {{ number_format($barang->harga, 0, ',', '.') }}</li>
                    <li class="list-group-item">Jumlah: {{ $barang->jumlah }}</li>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Update</a>
                    <a href="#" class="card-link text-danger">Delete</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
