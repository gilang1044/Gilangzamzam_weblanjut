$("#simpan").click(function(){
    var npm = $("#npm").val()
    if (npm == "") {
        // console.log("npm masih kosong!")
        $("#tampil_npm").text("npm masih kosong!")
    }else{
        $("#tampil_npm").text("")
    }
    
    var nama_mahasiswa = $("#mahasiswa").val()
    if (nama_mahasiswa == "") {
        $("#tampil_nama_mahasiswa").text("nama masih kosong!")
    }else{
        $("#tampil_nama_mahasiswa").text("")
    }

    var nilai = $("#nilai").val()
    if (nilai == "") {
        $("#tampil_nilai").text("nilai masih kosong!")
    }else{
        $("#tampil_nilai").text("")   
    }

    var prodi = $("program_studi").val()
    if (prodi == "") {
        $("#tampil_prodi").text("prodi masih kosong")
    }else{
        $("#tampil_prodi").text("")
    } if (nmp!= "" && nama_mahasiswa != "" && nilai !="") {
        alert("data berhasil di tambahkan!")
        
    }
    var n=document.forms['datapribadi']['npm'].value;
    var e=document.forms['datapribadi']['nama_mahasiswa'].value;
    var p=document.forms['datapribadi']['nilai'].value;
    var a=document.forms['datapribadi']['alamat'].value;        
                                            
    var tabel = document.getElementById("databel");
    var baris = tabel.insertRow(1);
    var kol1 = baris.insertCell(0);
    var kol2 = baris.insertCell(1);
    var kol3 = baris.insertCell(2);
    var kol4 = baris.insertCell(3);
            
    kol1.innerHTML = n;
    kol2.innerHTML = e;
    kol3.innerHTML = p;
    kol4.innerHTML = a;
    
    
   
})