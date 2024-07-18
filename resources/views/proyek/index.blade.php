    @if (session('hapus'))
        <div class="alert alert-danger">
            {{ session('hapus') }}
        </div>
        @elseif (session('create'))
        <div class="alert alert-primary">
            {{ session('create') }}
        </div>
        @elseif (session('update'))
               <div class="alert alert-secondary">
            {{ session('update') }}
        </div>
    @endif
 @extends('layouts.main')
    @section('content')

    <div class="container">
        <div class="row">
            <div class="col text-center">
                 <a class="btn btn-primary btn-sm" href="{{ route('proyek.create') }}">Tambah Data Proyek</a>
            </div>
        </div>
    </div>
        <div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <table class="table table-bordered" id="pengaduanTable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Proyek</th>
                        <th class="text-center">Lokasi</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Size</th>
                        <th class="text-center">Budget</th>
                        <th class="text-center">Deskripsi</th>
                        <th class="text-center">Foto Utama</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
            <tbody>
     @foreach ($proyek as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama_proyek }}</td>
                  <td>{{ $item->lokasi_proyek }}</td>
                  <td>{{ $item->tahun_proyek }}</td>
                  <td>{{ $item->size_proyek }}</td>
                  <td>{{ $item->budget_proyek }}</td>
                  <td>{{ $item->deskripsi_proyek }}</td>
                  <td><img src="{{ asset('images') }}/{{ $item->foto_utama_proyek }}" alt="" width="100px" height="100px"></td>
                <td>
                    <a  href="{{ route('proyek.edit', $item->id_proyek) }}" class="btn btn-warning btn-sm d-inline-block mr-2 ">Edit</a>
                     <form action="{{ route('proyek.destroy', $item->id_proyek) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm d-inline-block " onclick="return confirm('yakin?');" type="submit">Hapus</button>
                </form>
                                   
                  </td>
                  </tr>
      @endforeach
                </tbody>
        </table>
        <div>
          
          </div>
    </div>
  </div>
</div>
@endsection