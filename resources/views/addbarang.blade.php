@extends('layout.master')
@section('title', 'add barang')

@section('content')

   <div class="col-md-6 offset-md-3 mt-5">
        <h1>Tambah barang</h1>
        <form action="{{route('create')}}" accept-charset="UTF-8" action="https://getform.io/f/{your-form-endpoint-goes-here}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kategori" required="required">
                <option>Elektronik</option>
                <option>Buku</option>
                <option>Olahraga</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="InputNama">Nama</label>
                <input type="text" name="nama" class="form-control" id="InputNama" placeholder="Masukkan nama barang" required="required">
            </div>
            <div class="form-group mb-3">
                <label for="InputHarga">Harga</label>
                <input type="text" name="harga" class="form-control" id="InputHarga" placeholder="Masukkan harga barang" required="required">
            </div>
            <div class="form-group mb-3">
                <label for="InputJumlah">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="InputJumlah" placeholder="Masukkan jumlah barang" required="required">
            </div>
            <hr>
            <div class="form-group mt-3">
                <label class="mr-2">Upload foto barang:</label>
                <input type="file" name="foto">
            </div>
            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
