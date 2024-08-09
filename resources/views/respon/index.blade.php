 @extends('layouts.main')
    @section('content')


        <div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <table class="table table-bordered" id="pengaduanTable">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Lengkap</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">No Whatsapp</th>
                        <th class="text-center">Pesan</th>
                    </tr>
                </thead>
            <tbody>
     @foreach ($respon as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama_lengkap }}</td>
                  <td><a href="mail:to{{ $item->email }}">{{ $item->email }}</a></td>
                  <td><a href="https://wa.me/+62{{ $item->no_hp }}">{{ $item->no_hp }}</a></td>
                  <td>{{ $item->pesan }}</td>
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