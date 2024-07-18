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
        <div class="col-12 p-3 bg-white">
   <a href="{{ route('testimoni.create') }}" class="btn btn-primary  mb-3">Add</a>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center">Number</th>
                    <th class="text-center">Nama Proyek</th>
                    <th class="text-center">Testimoni</th>
                    <th class="text-center">Gambar</th>
                    <th class="text-center">Options</th>
                    
                  </tr>
            </thead>
            <tbody>
     @foreach ($testimoni as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->proyek->nama_proyek }}</td>
                  <td>{{ $item->deskripsi_testimoni }}</td>
                <td>{{ $item->keterangan_produk }}</td>
                 <td><img src="{{ asset('images') }}/{{ $item->gambar_testimoni }}" alt="" width="100px" height="100px"></td>
                  <td>
                    <a  href="{{ route('testimoni.edit', $item->id_testimoni) }}" class="btn btn-warning btn-sm ">Edit</a>
                     <form action="{{ route('testimoni.destroy', $item->id_testimoni) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm " onclick="return confirm('yakin?');" type="submit">Hapus</button>
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