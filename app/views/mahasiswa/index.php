    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Mahasiswa
                </button>
                <h3>Daftar Mahasiswa</h3>
                <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Mahasiswa.." name="keyword" id="keyword" autocomplete="off">
                        <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                    </div>
                </form>
                <ul class="list-group">
                    <?php foreach ($data["mhs"] as $mhs) : ?>
                        <li class="list-group-item">
                            <?= $mhs["nama"] ?>
                            <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="badge text-bg-primary float-end me-1">detail</a>
                            <a href="<?= BASEURL ?>/mahasiswa/edit/<?= $mhs['id'] ?>" class="badge text-bg-success float-end me-1 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id=<?= $mhs['id'] ?>>edit</a>
                            <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" onclick="confirm('yakin?')" class="badge text-bg-danger float-end me-1">hapus</a>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim">
                        </div>
                        <div class="">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Sipil">Teknik Sipil</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                </div>
            </div>
        </div>
    </div>