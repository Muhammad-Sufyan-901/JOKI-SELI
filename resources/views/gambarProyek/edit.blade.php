 {{-- @dd($proyek) --}}
 @extends('layouts.main')
    @section('content')
  <div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <table class="table table-bordered" id="pengaduanTable">
                <thead>
                    <tr>
                        <th class="text-center">Gambar</th>
                        <th class="text-center">Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyek->gambarProyek as $item)
                    <tr>
                        <td>
                          <img src="{{ asset('images') }}/{{$item->gambar_proyek }}" width="100px">
                        </td>
                        <td>
                           <form action="{{ route('gambarProyek.destroy', $item->id_gambar_proyek) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm d-inline-block " type="submit">Hapus</button>
                </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


    @endsection