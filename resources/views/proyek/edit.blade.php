@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Proyek</h3>
            <form action="{{ route('proyek.update', $proyek->id_proyek) }}" method="post">
        @csrf
           @method('PUT')
            <div class="mb-3">
                <input value="{{ $proyek->nama_proyek }}" type="text" name="nama_proyek" placeholder=" Nama Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $proyek->lokasi_proyek }}" type="text" name="lokasi_proyek" placeholder=" Lokasi Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $proyek->tahun_proyek }}" type="date" name="tahun_proyek" placeholder=" Nama Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $proyek->size_proyek }}" type="text" name="size_proyek" placeholder=" Ukuran Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $proyek->budget_proyek }}" type="number" name="budget_proyek" placeholder=" Harga Proyek" class="form-control" required>
            </div>
            <div class="mb-3">
                <input value="{{ $proyek->deskripsi_proyek }}" type="text" name="deskripsi_proyek" placeholder=" Ukuran Proyek" class="form-control" required>
            </div>
            <a href="/proyek" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" name="submit" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection