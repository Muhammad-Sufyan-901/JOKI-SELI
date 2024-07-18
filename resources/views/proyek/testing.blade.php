<div div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
           <img src="<?= BASEURL?>/img/KNA.jpeg" class="img-fluid" width="200px" alt="Logo SP Digital">
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 p-3 bg-white">
            <h4 class="text-center">Data Proyek</h4>
            <p class="text-center">Selamat datang <span class="text-primary"><?= $_COOKIE['admin']?></span> </p>
            <div class="text-center">
                <a class="btn btn-primary btn-sm" href="<?= BASEURL;?>/proyek/add">Tambah Data Proyek</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <?php Flasher::flash()?>
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
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php $i = 1; ?>
                        <?php foreach($data['proyek'] as $row) :?>
                            <td><?= $i++ ?></td>
                            <td><?= htmlspecialchars($row['nama_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['lokasi_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['tanggal_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['size_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['budget_proyek']) ?></td>
                            <td><?= htmlspecialchars($row['deskripsi_proyek']) ?></td>
                            <td>
                                <a class="btn btn-secondary d-inline-block mr-2" href="<?= BASEURL?>/proyek/viewOne/<?= $row['id_proyek'] ?>">Edit</a>
                                <a class="btn btn-danger d-inline-block" href="<?= BASEURL?>/proyek/delete/<?= $row['id_proyek'] ?>">Delete</a>
                            </td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
