<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::getFlash() ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary mb-3 tampil-modal-tambah" data-bs-toggle="modal"
        data-bs-target="#formModal">
        Tambah data mahasiswa
      </button>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <form action="<?= BASE_URL ?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari mahasiswa" autocomplete="off" name="keyword"
            id="keyword">
          <button class="btn btn-primary" type="submit" id="tombol-cari">Cari</button>
        </div>
      </form>
    </div>
  </div>
  <div class="row list-group">
    <div class="col-lg-6">
      <h3>Daftar Mahasiswa</h3>
      <?php foreach ($data["mhs"] as $mhs): ?>
        <li class="list-group-item d-flex justify-content-between">
          <?= $mhs["nama"] ?>
          <div>
            <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $mhs["id"] ?>"
              class="badge text-bg-primary text-decoration-none">Detail</a>
            <a href="<?= BASE_URL ?>/mahasiswa/ubah/<?= $mhs["id"] ?>"
              class="badge text-bg-success text-decoration-none tampil-modal-ubah" data-bs-toggle="modal"
              data-id="<?= $mhs["id"] ?>" data-bs-target="#formModal">Ubah</a>
            <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $mhs["id"] ?>" class="badge text-bg-danger text-decoration-none"
              onclick="return confirm('Hapus data <?= $mhs['nama'] ?>?')">Hapus</a>
          </div>
        </li>
      <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3 form-group">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama">
          </div>
          <div class="mb-3 form-group">
            <label for="nim" class="form-label">NIM</label>
            <input type="number" name="nim" class="form-control" id="nim">
          </div>
          <div class="mb-3 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="mb-3 form-group">
            <label for="jurusan" class="form-label">Jurusan</label>
            <select class="form-select" id="jurusan" name="jurusan">
              <option value="TRPL">TRPL</option>
              <option value="TRMG">TRMG</option>
              <option value="MI">MI</option>
              <option value="CE">CE</option>
            </select>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah data</button>
        </form>
      </div>
    </div>
  </div>
</div>