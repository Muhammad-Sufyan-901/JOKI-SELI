  {{-- @dd($projectImages) --}}
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
                 <a class="btn btn-primary btn-sm" href="{{ route('gambarProyek.create') }}">Tambah Data Foto</a>
            </div>
        </div>
    </div>
   <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Project Name</th>
                    <th class="text-center">Images</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach ($projectImages as $id_proyek => $project)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ htmlspecialchars($project['nama_proyek'], ENT_QUOTES, 'UTF-8') }}</td>
                        <td class="text-center">
                          @foreach ($project['images'] as $image)
                       
                                    <img src="{{ asset('images')}}/{{ $image }}" width="100px">
                         
  
                  
                                @endforeach
                        </td>
                        <td class="text-center">
                            <a class="btn btn-secondary" href="{{ route('gambarProyek.edit', $id_proyek) }}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection