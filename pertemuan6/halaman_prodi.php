<h2>ini adalah halaman program study</h2>

<?php
    $koneksi = mysli_connect("localhost","root","","web_lanjut_a1");

    if ($koneksi) {
        echo "berhasil";

    }else {
        echo "gagal";
    }
?>