<h1>hallo</h1>

<?php
  
//include "function.php";

require "function.php";
    //if ($koneksi) {
      //  echo "berhasil kora 🗿";

   // }else {
     //   echo "gagal";
    //}

    //foreach(prodi() as $p) :

?>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Jurusan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach(prodi() as $p) :  ?>
        <tr>
            <td><?= $p["id"]?></td>
            <td><?= $p["nama_jurusan"]?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>