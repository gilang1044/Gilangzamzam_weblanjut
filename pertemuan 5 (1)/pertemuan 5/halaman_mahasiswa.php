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
