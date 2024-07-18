{{-- @dd($testimoni->proyek->id_proyek); --}}
@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Edit Testimoni</h3>

         <form action="{{ route('testimoni.update', $testimoni->id_testimoni) }}" method="post" enctype="multipart/form-data">
         @csrf
           @method('PUT')
    <div class="mb-3">
        <select class="form-select" name="id_proyek" required>
            <option value="{{ $testimoni->proyek->id_proyek }}">{{ $testimoni->proyek->nama_proyek }}</option>
            @foreach ($proyek as $item)
                <option value="{{ $item->id_proyek }}">{{ $item->nama_proyek }}</option>
            @endforeach
        </select>
    </div>

            <div class="mb-3">
                <label class="form-label">Testimoni</label>
                <input required type="text" name="deskripsi_testimoni" class="form-control" value="{{ $testimoni->deskripsi_testimoni }}">
            </div>

            <img src="{{ asset('images') }}/{{ $testimoni->gambar_testimoni }}" width="100px" height="100px">

            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" name="gambar_testimoni" class="form-control">
            </div>

            <a href="/testimoni" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" name="submit" >Save</button>
        </form>
    </div>
  </div>
</div>



@endsection