@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-12 p-3 bg-white">
        <h3>Proyek</h3>
           <form action="{{ route('testimoni.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
        <select name="id_proyek" id="">
                @foreach ($proyek as $item)
                    <option value="{{ $item->id_proyek }}">{{ $item->nama_proyek }}</option>
                @endforeach
            </select>
        </div>
           
            <div class="mb-3">
                <input type="text" name="deskripsi_testimoni" placeholder=" Testimoni" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label"> Gambar testimoni</label>
                <input type="file" name="gambar_testimoni" class="form-control" required>
            </div>
            <a href="/testimoni" class="btn btn-success" >Back</a>
            <button type="submit" class="btn btn-primary" >Save</button>
        </form>
    </div>
  </div>
</div>
@endsection