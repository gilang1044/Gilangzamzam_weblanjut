<?php
    function koneksi(){
        $koneksi = mysqli_connect("localhost","root","","weblanjut_a1");
        return $koneksi;
    }
    if (koneksi()) {
        echo "teme 🐷🤙";
    } else {
        echo "gagal";
    }


    function prodi(){
        $koneksi = koneksi();
        return mysqli_query($koneksi,"SELECT * FROM prodi");
    }
?>