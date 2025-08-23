@extends('layout.master')
@section('title', 'Update Barang')

@section('content')
   <div class="col-md-6 offset-md-3 mt-5">
        <h1>Update Barang</h1>
        <form action="{{route('update', $barang->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            
            <div class="form-group mb-3">
                <label for="exampleFormControlSelect1">Kategori</label>
                <select class="form-control" id="exampleFormControlSelect1" name="kategori" required="required">
                    <option value="Elektronik" {{ $barang->kategori == 'Elektronik' ? 'selected' : '' }}>Elektronik</option>
                    <option value="Buku" {{ $barang->kategori == 'Buku' ? 'selected' : '' }}>Buku</option>
                    <option value="Olahraga" {{ $barang->kategori == 'Olahraga' ? 'selected' : '' }}>Olahraga</option>
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="InputNama">Nama</label>
                <input type="text" name="nama" value="{{ $barang->nama }}" class="form-control" id="InputNama" required>
            </div>

            <div class="form-group mb-3">
                <label for="InputHarga">Harga</label>
                <input type="text" name="harga" value="{{ $barang->harga }}" class="form-control" id="InputHarga" required>
            </div>

            <div class="form-group mb-3">
                <label for="InputJumlah">Jumlah</label>
                <input type="text" name="jumlah" value="{{ $barang->jumlah }}" class="form-control" id="InputJumlah" required>
            </div>

            <div class="form-group mt-3">
                <label class="mr-2">Upload foto barang:</label>
                <input type="file" name="foto" class="form-control">
                @if($barang->foto)
                    <div class="mt-2">
                        <p>Foto lama:</p>
                        <img src="{{ asset('storage/' . $barang->foto) }}" alt="Foto Barang" width="150">
                    </div>
                @endif
            </div>

            <hr>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
