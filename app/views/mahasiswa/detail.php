<div class="container mt-5">
  <div class="card" style="width: fit-content;">
    <div class="card-body">
      <h5 class="card-title"><?= $data["mhs"]["nama"] ?></h5>
      <h6 class="card-sub-title mb-2 text-muted"><?= $data["mhs"]["nim"] ?></h6>
      <p class="card-text"><?= $data["mhs"]["email"] ?></p>
      <p class="card-text"><?= $data["mhs"]["jurusan"] ?></p>
      <a href="<?= BASE_URL ?>/mahasiswa" class="card-link">Kembali</a>
    </div>
  </div>
</div>