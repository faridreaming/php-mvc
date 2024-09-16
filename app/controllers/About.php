<?php

class About extends Controller
{
  public function index($nama = "Famrid", $profesi = "Mahasiswa", $umur = 19)
  {
    $data["nama"] = ucfirst(strtolower($nama));
    $data["profesi"] = $profesi;
    $data["umur"] = $umur;
    $data["judul"] = "About Me";
    $this->view("templates/header", $data);
    $this->view("about/index", $data);
    $this->view("templates/footer");
  }
  public function page()
  {
    $data["judul"] = "Pages";
    $this->view("templates/header", $data);
    $this->view("about/page");
    $this->view("templates/footer");
  }
}