@extends('layouts.main')
@section('content')
 <div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
      <h4 class="text-center">Tambah Proyek</h4>
</div>
</div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
           <form action="{{ route('proyek.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="mb-3">
                <input type="text" name="nama_proyek" placeholder=" Nama Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="lokasi_proyek" placeholder=" Lokasi Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="date" name="tahun_proyek" placeholder=" Tahun Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="size_proyek" placeholder=" Ukuran Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="number" name="budget_proyek" placeholder=" Budget Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input type="text" name="deskripsi_proyek" placeholder=" Deskripsi Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label"> Gambar Utama</label>
                <input type="file" name="foto_utama_proyek" class="form-control" required>
            </div>
            <a href="/proyek" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection