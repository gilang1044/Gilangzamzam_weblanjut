<div class="row">
    <div class="col-sm-8">
        <h4>Daftar Mahasiswa</h4>
        <p id="sukses"></p>
        <table class="table" id="tabel_mahasiswa">
            <tr>
                <th>Npm</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai</th>
                <th>Program Studi</th>
            </tr>
            <tr>

                <td>2009010025</td>
                <td>Hamdani</td>
                <td>100</td>
                <td>Sistem Informasi</td>
            </tr>
            <tr>
    
                <td>200901000</td>
                <td>Ucok</td>
                <td>50</td>
                <td>Teknologi Informasi</td>
            </tr>
        </table>
    </div>
    <div class="col-sm-4">
    <h4>Tambah Data Mahasiswa</h4>
        <div class="form-group">
            <label for="">Npm</label>
            <input type="number" class="form-control" id="npm">
            <p id="tampil_npm" class="peringatan"></p>
        </div>
        <div class="form-group">
            <label for="">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="nama">
            <p id="tampil_nama" class="peringatan"></p>
        </div>
        <div class="form-group">
            <label for="">Nilai</label> 
            <input type="number" class="form-control" id="nilai">
            <p id="tampil_nilai" class="peringatan"></p>
        </div>
        <div class="form-group">
            <label for="">Program studi</label>
            <select class="form-control" id="program">
                <option value="" selected> Pilih program studi</option>
                <option>sistem informasi</option>
                <option>teknik informasi</option>
                <option>sains data</option>
            </select>
            <p id="tampil_program" class="peringatan"></p>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <button class="btn btn-danger">Batal</button>
            </div>
            <div class="col-sm-6">
                <div class="form-group" style="text-align: right;">
                <button class="btn btn-success" id="simpan">Simpan</button>
            </div>
            </div>
        </div>
    </div>
</div>

<script>$("#simpan").click(function(){
    var npm = $("#npm").val()
    var tampil_npm = $("#tampil_npm").val()
    if (npm == "") {
        $("#tampil_npm").text("Npm blm di isi")
    
    
    }else{
        $("#tampil_npm").text("")
        
    }

    var nama = $("#nama").val()
    if (nama == "") {
        $("#tampil_nama").text("Nama belum diisi")
    }else{
        $("#tampil_nama").text("")
}

var nilai = $("#nilai").val()
if (nilai == "") {
    $("#tampil_nilai").text("Nilai belum diisi")
}else{
    $("#tampil_nilai").text("")
}

var prodi = $("#program").val()
if (prodi == "") {
    $("#tampil_program").text("prodi belum diisi")
}else{
    $("#tampil_program").text("")
}

if (npm != "" && nama != "" && nilai != "" && prodi != "") {

    $("#sukses").html(`
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Data Berhasil Di Tambahkan</strong>
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    `)



    var tabel_mahasiswa = document.getElementById("tabel_mahasiswa")
    var baris = tabel_mahasiswa.insertRow(1)
    var kol1 = baris.insertCell(0)
    var kol2 = baris.insertCell(1)
    var kol3 = baris.insertCell(2)
    var kol4 = baris.insertCell(3)

    kol1.innerHTML = npm
    kol2.innerHTML = nama
    kol3.innerHTML = nilai
    kol4.innerHTML = prodi

    $("#npm").val("")
    $("#nama").val("")
    $("#nilai").val("")
    $("#program").val("")


}
})</script>