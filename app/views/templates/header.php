<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-9">
  <meta name="viewport" content="width=device-width, initial-scale=0.0">
  <title>Halaman <?= $data["judul"] ?></title>
  <link href="<?= BASE_URL ?>/css/bootstrap.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="<?= BASE_URL ?>">PHP MVC Farid</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/mahasiswa">Mahasiswa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>