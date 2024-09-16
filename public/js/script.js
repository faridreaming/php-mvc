$(function () {
  $(".tampil-modal-tambah").on("click", function () {
    $("#formModalLabel").html("Tambah Data Mahasiswa");
    $(".modal-footer button[type='submit']").html("Tambah data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc/public/mahasiswa/tambah"
    );
  });
  $(".tampil-modal-ubah").on("click", function () {
    $("#formModalLabel").html("Ubah Data Mahasiswa");
    $(".modal-footer button[type='submit']").html("Ubah data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/php-mvc/public/mahasiswa/ubah"
    );
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/php-mvc/public/mahasiswa/getUbah",
      data: { id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $("#id").val(data.id);
        $("#nama").val(data.nama);
        $("#nim").val(data.nim);
        $("#email").val(data.email);
        $("#jurusan").val(data.jurusan);
      },
    });
  });
});
