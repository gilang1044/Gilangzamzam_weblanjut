$("#simpan").click(function(){
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
})


//fungsi bar
$(".halaman").click(function(){
    console.log("Ok")
    var id_halaman = $(this).attr("id")
    if (id_halaman == "halaman_mahasiswa"){
        $("#halaman_body").load("halaman_mahasiswa.php")
    }else if (id_halaman == "halaman_beranda") {
        $("#halaman_body").load("halaman_beranda.php")
    } else if (id_halaman == "halaman_prodi"){
        $("#halaman_body").load("halaman_prodi.php")
    }
})

$("#halaman_body").load("halaman_beranda.php")

    

    
