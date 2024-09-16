<?php

class Flasher
{
  public static function setFlash($pesan, $aksi, $tipe)
  {
    $_SESSION["flash"] = [
      "pesan" => $pesan,
      "aksi" => $aksi,
      "tipe" => $tipe
    ];
  }
  public static function getFlash()
  {
    if (isset($_SESSION["flash"])) {
      echo "
        <div class='alert alert-" . $_SESSION["flash"]["tipe"] . " alert-dismissible fade show' role='alert'>
          <span>Data mahasiswa <strong>" . $_SESSION["flash"]["pesan"] . "</strong> " . $_SESSION["flash"]["aksi"] . "</span>
          <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
      ";
      unset($_SESSION["flash"]);
    }
  }
}