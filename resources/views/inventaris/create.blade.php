@extends('layout.app')

@section('isi')

<div class=" card px-4 py-4 container my-5   border-1 border-opacity-10 rounded-4">

    <h2 class="text-black fw-semibold">Buat Daftar Barang</h2>
        <p class="text-secondary mb-4" style="font-size: 17px">Buat daftar berbagai barang kamu yang baru disini</p>
        
        <form  method="POST" class="row d-flex" action="{{url('inventaris')}}" >
         @csrf

            <div class="col-3">
                <input type="text" class="form-control p-2" id="name" placeholder="Nama Barang" name="nama_barang" required>
            </div>
            <div class="col-2">
                <td><select class="form-select" id="ruangan" name="ruangan" aria-label="Default select example" required>
                    <option value="Not Selected" selected>Nama Ruangan</option>
                    <option value="RUANG TAMU">Ruang Tamu</option>
                    <option value="RUANG KELUARGA">Ruang Keluarga</option>
                    <option value="KAMAR TIDUR UTAMA">Kamar Tidur Utama</option>
                    <option value="KAMAR TIDUR ANAK 1">Kamar Tidur Anak 1</option>
                    <option value="KAMAR TIDUR ANAK 2">Kamar Tidur Anak 2</option>
                    <option value="DAPUR">Dapur</option>
                    <option value="KAMAR MANDI">Kamar Mandi</option>
                    <option value="TERAS DEPAN">Teras Depan</option>
                    <option value="TERAS BELAKANG">Teras Belakang</option>
                    <option value="GARASI">Garasi</option>
                </select>
            </div>
            <div class="col-1 mb-5">
                <input class="form-control p-2" id="jumlah_barang" rows="3" placeholder="Jumlah" name="jumlah_barang" required></input>
            </div>
            <div class="col-6 mb-5">
                <input class="form-control p-2" id="info_barang" rows="3" placeholder="Deskripsi" name="info_barang" required></input>
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-warning mb-3 px-3 text-white px-5">Buat</button>
            <a class="btn btn-outline-warning mb-3 text-warning px-4" href="{{ url("inventaris") }}"> Kembali </a>
            </div>
        </form>


    </div>

@endsection