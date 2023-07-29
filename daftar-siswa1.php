<?php
include "views/templates_dashboard/header.php";
include "views/templates_dashboard/menu.php";
include "views/templates_dashboard/carousell2.php";
?>
<!-- Content Header (Page header) -->


<br>

<!-- Main content -->
<div class="content">

  <div class="container mt-4">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header text-center text-bold">
          <h5>Pendaftaran Peserta Didik Baru</h5>
        </div>
        <div class="card-body">
          Petunjuk Pengisian Formulir
          <ul>
            <li>Simbol (<span class="text-danger">*</span>) Menandakan Wajib Diisi.</li>
            <li>Isi Data Anda Secara Benar dan Jujur.</li>
          </ul>
        </div>
      </div>

      <div class="card card-default">
        <div class="card-body p-0">
          <div class="bs-stepper">

            <div class="bs-stepper-header" role="tablist">
              <!-- your steps here -->
              <div class="step" data-target="#data-siswa">
                <button type="button" class="step-trigger" role="tab" aria-controls="data-siswa"
                  id="data-siswa-trigger">
                  <span class="bs-stepper-circle">1</span>
                  <span class="bs-stepper-label">Data Siswa</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#data-siswa2">
                <button type="button" class="step-trigger" role="tab" aria-controls="data-siswa2"
                  id="data-siswa2-trigger">
                  <span class="bs-stepper-circle">2</span>
                  <span class="bs-stepper-label">Data Rincian Siswa</span>
                </button>
              </div>
              <div class="line"></div>
              <div class="step" data-target="#data-ortu">
                <button type="button" class="step-trigger" role="tab" aria-controls="data-ortu" id="data-ortu-trigger">
                  <span class="bs-stepper-circle">3</span>
                  <span class="bs-stepper-label">Data Ortu/Wali</span>
                </button>
              </div>
            </div>

            <form action="" method="POST" enctype="multipart/form-data">
              <div class="bs-stepper-content">
                <!-- your steps content here -->
                <div id="data-siswa" class="content" role="tabpanel" aria-labelledby="data-siswa-trigger">
                  <div class="text-center mb-lg-4">
                    <p class="mb-0">Langkah 1 dari 3</p>
                    <strong>
                      <h5>Masukan informasi Data Peserta Didik</h6>
                    </strong>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <div class="form-group">
                          <label for="username">Username <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="username" value="" required>
                          <small class="form-text text-muted">Masukkan username atau Nama panggilan peserta didik
                          </small>
                        </div>
                        <div class="form-group">
                          <label for="nama_siswa">Nama Lengkap <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_siswa" required>
                          <small class="form-text text-muted">Nama peserta didik sesuai dokumen resmi yang berlaku (Akta
                            atau
                            ijazah sebelumnya).</small>
                        </div>
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis Kelamin <span class="text-danger">*</span></label>
                          <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki - laki">Laki - laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="tanggal_lahir">Tanggal Lahir <span class="text-danger">*</span></label>
                          <input type="date" class="form-control" name="tanggal_lahir" value="" required>
                          <small class="form-text text-muted">Tanggal lahir peserta didik sesuai dokumen resmi yang
                            berlaku.
                            Hanya
                            bisa diubah melalui <a href="http://vervalpd.data.kemdikbud.go.id"
                              target="_blank">http://vervalpd.data.kemdikbud.go.id</a></small>
                        </div>
                        <div class="form-group">
                          <label for="agama_siswa">Agama &amp; Kepercayaan <span class="text-danger">*</span></label>
                          <select name="agama_siswa" class="form-control" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protetan">Kristen Protetan</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="Kepercayaan Kepada Tuhan YME">Kepercayaan Kepada Tuhan YME</option>
                            <option value="Lainnya">Lainnya</option>
                          </select>
                          <small class="form-text text-muted">Agama atau kepercayaan yang dianut oleh peserta didik.
                            Apabila
                            peserta didik adalah penghayat kepercayaan (misalnya pada daerah tertentu yang masih
                            memiliki
                            penganut
                            kepercayaan), dapat memilih opsi Kepercayaan Kepada Tuhan YME.</small>
                        </div>
                        <div class="form-group">
                          <label for="alamat_jalan">Alamat Tinggal <span class="text-danger">*</span></label>
                          <textarea type="text" class="form-control" name="alamat_jalan" required=""
                            style="height:80px"></textarea>
                          <!-- <input type="text" class="form-control" name="alamat_jalan" value=""> -->
                          <small class="form-text text-muted">Jalur tempat tinggal peserta didik, terdiri atas gang,
                            kompleks,
                            blok, nomor rumah, dan sebagainya selain informasi yang diminta oleh kolom-kolom yang lain
                            pada
                            bgian
                            ini. Sebagai contoh: peserta didik tinggal di sebuah kompleks perumahan Griya Adam yang
                            berada
                            pada
                            Jalan Kemanggisan, dengan nomor rumah 4-C, di lingkungan RT 005 dan RW 011, Dusun Cempaka,
                            Desa
                            Salatiga. Maka dapat diisi dengan Jl. Kemanggisan, Komp. Griya Adam, No. 4-C.</small>
                        </div>
                        <div class="form-group">
                          <label for="customFile">Pas Foto 3x4 <span class="text-danger">*</span></label>
                          <div class="custom-file">
                          <input class="custom-file-input" id="customFile" type="file" name="foto" required>
                          <label class="custom-file-label" for="customFile">Choose file</label>
                          </div>
                        
                          <small class="form-text text-muted">Pas foto hitam putih ukuran 3x4. ukuran max 1MB. , format:
                            JPG,JPEG,PNG</small>
                        </div>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="card-body">

                        <div class="form-group">
                          <label for="nokk">Nomor Kartu Keluarga <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nokk" value="" required>
                          <small class="form-text text-muted">Pastikan NIK tidak tertukar dengan No. Kartu Keluarga,
                            karena
                            keduannya memiliki format yang sama.</small>
                        </div>
                        <div class="form-group">
                          <label for="nonik">NIK <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nonik" value="" required>
                          <small class="form-text text-muted">Nomor Induk Kependudukan yang tercantum pada kartu
                            keluarga,
                            Kartu
                            Identitas Anak, atau KTP (jika sudah memiliki). NIK memiliki format 16 digit angka. Contoh:
                            6112090906021104.</small>
                          <small class="form-text text-muted">Pastikan NIK tidak tertukar dengan No. Kartu Keluarga,
                            karena
                            keduannya memiliki format yang sama.</small>
                        </div>
                        <div class="form-group">
                          <label for="tempat_lahir">Tempat Lahir <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="tempat_lahir" value="" required>
                          <small class="form-text text-muted">Tempat lahir peserta didik sesuai dokumen resmi yang
                            berlaku.</small>
                        </div>
                        <div class="form-group">
                          <label for="nama_negara">Kewarganegaraan<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_negara" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="nama_provinsi">Provinsi Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_provinsi" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="nama_kabupaten">Kabupaten / Kota Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="nama_kabupaten" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="alamat_kelurahan">Nama Kelurahan / Desa <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="alamat_kelurahan" value="" required>
                        </div>
                        <div class="form-group">
                          <label for="alamat_kecamatan">Kecamatan Tinggal<span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="alamat_kecamatan" value="" required>
                        </div>

                        <div class="form-group">
                          <label for="kode_pos">Kode Pos <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" name="kode_pos" value="" required>
                        </div>
                      </div>

                    </div>
                  </div>

                  <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                </div>

                <div id="data-siswa2" class="content" role="tabpanel" aria-labelledby="data-siswa2-trigger">
                  <div class="text-center mb-lg-4">
                    <p class="mb-0">Langkah 2 dari 3</p>
                    <strong>
                      <h5>Masukan informasi Data Rincian Peserta Didik</h6>
                    </strong>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="moda_transportasi">Moda Transportasi <span class="text-danger">*</span></label>
                        <select name="moda_transportasi" class="form-control" required>
                          <option value="Jalan Kaki">Jalan Kaki</option>
                          <option value="Kendaraan Priadi">Kendaraan Priadi</option>
                          <option value="Kendaraan Umum/Angkot/Pete-pete">Kendaraan Umum/Angkot/Pete-pete</option>
                          <option value="Jemputan Sekolah">Jemputan Sekolah</option>
                          <option value="Kereta Api">Kereta Api</option>
                          <option value="Ojek">Ojek</option>
                          <option value="Andong/Bendi/Sado/Dokar/Delman/Beca">Andong/Bendi/Sado/Dokar/Delman/Beca
                          </option>
                          <option value="Perahu Penyebrangan/Rakit/Getek">Perahu Penyebrangan/Rakit/Getek</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                        <small class="form-text text-muted">Jenis transportasi utama atau yang paling sering digunakan
                          peserta
                          didik untuk berangkat kesekolah.</small>
                      </div>
                      <div class="form-group">
                        <label for="tinggi_badan">Tinggi Badan <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <input type="number" class="form-control" name="tinggi_badan" value="" required>
                          <div class="input-group-prepend">
                            <div class="input-group-text">CM</div>
                          </div>
                        </div>
                        <small class="form-text text-muted">Tinggi badan pada satuan sentimeter.</small>
                      </div>
                      <div class="form-group">
                        <label for="anak_keberapa">Anak Keberapa <span class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="anak_keberapa" value="" required>
                      </div>
                      <div class="form-group">
                        <label for="kebutuhan_khusus">Berkebutuhan Khusus</label>
                        <small class="form-text text-muted">Kebutuhan khusus yang disandang oleh peserta didik</small>
                        <select name="kebutuhan_khusus" class="form-control" required>
                          <option value="Tidak">Tidak</option>
                          <option value="Netra (A)">Netra (A)</option>
                          <option value="Rungu (B)">Rungu (B)</option>
                          <option value="Grahita Ringan (C)">Grahita Ringan (C)</option>
                          <option value="Grahita Sedang (C1)">Grahita Sedang (C1)</option>
                          <option value="Daksa Ringan (D)">Daksa Ringan (D)</option>
                          <option value="Daksa Sedang (D1)">Daksa Sedang (D1)</option>
                          <option value="Laras (E)">Laras (E)</option>
                          <option value="Wicara (F)">Wicara (F)</option>
                          <option value="Tuna Ganda (G)">Tuna Ganda (G)</option>
                          <option value="Hiper Aktif (H)">Hiper Aktif (H)</option>
                          <option value="Cerdas Istimewa (I)">Cerdas Istimewa (I)</option>
                          <option value="Bakat Istimewa (J)">Bakat Istimewa (J)</option>
                          <option value="Kesulitan Belajar (K)">Kesulitan Belajar (K)</option>
                          <option value="Narkoba (N)">Narkoba (N)</option>
                          <option value="Indigo (O)">Indigo (O)</option>
                          <option value="Down Sindrome (P)">Down Sindrome (P)</option>
                          <option value="Autis (Q)">Autis (Q)</option>
                        </select>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tempat_tinggal">Tempat Tinggal <span class="text-danger">*</span></label>
                        <select name="tempat_tinggal" class="form-control" required>
                          <option value="Bersama Orang Tua">Bersama Orang Tua</option>
                          <option value="Wali">Wali</option>
                          <option value="Kos">Kos</option>
                          <option value="Asrama">Asrama</option>
                          <option value="Panti Asuhan">Panti Asuhan</option>
                          <option value="Lainnya">Lainnya</option>
                        </select>
                        <small class="form-text text-muted">Kepemilikan tempat tinggal peserta didik saat ini (yang
                          telah
                          diisikan pada kolom-kolom sebelumnya di atas).</small>
                      </div>

                      <div class="form-group">
                        <label for="berat_badan">Berat Badan <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <input type="number" class="form-control" name="berat_badan" value="" required>
                          <div class="input-group-prepend">
                            <div class="input-group-text">Kg</div>
                          </div>
                        </div>
                        <small class="form-text text-muted">Berat badan pada satuan kilogram.</small>
                      </div>
                      <div class="form-group">
                        <label for="jumlah_saudara_kandung">Jumlah Saudara Kandung <span
                            class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="jumlah_saudara_kandung" value="" required>
                        <small class="form-text text-muted">Jumlah saudara kandung yang dimiliki peserta didik.
                          Kosongkan
                          apabila peserta adalah anak tunggal</small>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                  <button class="btn btn-primary" onclick="stepper.next()">Next</button>
                  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                </div>

                <div id="data-ortu" class="content" role="tabpanel" aria-labelledby="data-ortu-trigger">
                  <div class="text-center mb-lg-4">
                    <p class="mb-0">Langkah 3 dari 3</p>
                    <strong>
                      <h5>Masukan informasi Data Orang tua / Wali</h6>
                    </strong>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 text-center">
                      <h6><strong>DATA AYAH KANDUNG</h6></strong>
                      <hr class="bg-primary">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_ayah">Nama ayah Kandung <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama_ayah" value="" required>
                        <small class="form-text text-muted">Nama ayah Kandung peserta didik sesuai dokumen resmi yang
                          berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                          H.)</small>
                      </div>
                      <div class="form-group">
                        <label for="pendidikan_ayah">Pendidikan<span class="text-danger">*</span></label>
                        <select name="pendidikan_ayah" class="form-control" required>
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="Putus SD">Putus SD</option>
                          <option value="SD Sederajat">SD Sederajat</option>
                          <option value="SMP Sederajat">SMP Sederajat</option>
                          <option value="SMA Sederajat">SMA Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>
                          <option value="D4/S1">D4/S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        <small class="form-text text-muted">Pendidikan terakhir ayah kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="penghasilan_ayah">Penghasilan Bulanan<span class="text-danger">*</span></label>
                        <select name="penghasilan_ayah" class="form-control" required>
                          <option value="0">-</option>
                          <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                          <option value="500.000 - 999.999">500.000 - 999.999</option>
                          <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                          <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                          <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                          <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                        </select>
                        <small class="form-text text-muted">Rentang penghasilan ayah kadung peserta didik. Kosongkan
                          kolom
                          ini apabila ayah kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun_lahir_ayah">Tahun Lahir Ayah </label>
                        <input type="text" class="form-control datepicker" name="tahun_lahir_ayah" value="" required>
                        <small class="form-text text-muted">Tahun lahir ayah Kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan_ayah">Pekerjaan</label>
                        <select name="pekerjaan_ayah" class="form-control" required>
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Petani">Petani</option>
                          <option value="Peternak">Peternak</option>
                          <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Karyawan Swasta">Karyawan Swasta</option>
                          <option value="Pedagang Kecil">Pedagang Kecil</option>
                          <option value="Pedagang Besar">Pedagang Besar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Lain-lain">Lain-lain</option>
                          <option value="0">Meninggal Dunia</option>
                        </select>
                        <small class="form-text text-muted">Pekerjaan utama ayah kandung peserta didik. Pilih Meninggal
                          Dunia apabila ayah Kandung peserta didik telah meninggal.</small>
                      </div>
                      <div class="form-group">
                        <label for="nohp_ayah">No Handphone Ayah <span class="text-danger">*</span></label>
                        <input type="text" class="form-control datepicker" name="nohp_ayah" value="" required>
                        <small class="form-text text-muted">No Handphone ayah Kandung peserta didik.</small>
                      </div>

                    </div>

                    <div class="col-lg-12 text-center">
                      <h6><strong>DATA IBU KANDUNG</h6></strong>
                      <hr class="bg-primary">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_ibu">Nama ibu Kandung <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="nama_ibu" value="" required>
                        <small class="form-text text-muted">Nama ibu Kandung peserta didik sesuai dokumen resmi yang
                          berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                          H.)</small>
                      </div>
                      <div class="form-group">
                        <label for="pendidikan_ibu">Pendidikan</label>
                        <select name="pendidikan_ibu" class="form-control" required>
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="Putus SD">Putus SD</option>
                          <option value="SD Sederajat">SD Sederajat</option>
                          <option value="SMP Sederajat">SMP Sederajat</option>
                          <option value="SMA Sederajat">SMA Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>
                          <option value="D4/S1">D4/S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        <small class="form-text text-muted">Pendidikan terakhir ibu kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="penghasilan_ibu">Penghasilan Bulanan</label>
                        <select name="penghasilan_ibu" class="form-control">
                          <option value="0">-</option>
                          <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                          <option value="500.000 - 999.999">500.000 - 999.999</option>
                          <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                          <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                          <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                          <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                        </select>
                        <small class="form-text text-muted">Rentang penghasilan ibu kandung peserta didik. Kosongkan
                          kolom
                          ini apabila ibu kandung peserta didik telah meninggal dunia atau tidak bekerja.</small>
                      </div>

                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun_lahir_ibu">Tahun Lahir Ibu </label>
                        <input type="text" class="form-control datepicker" name="tahun_lahir_ibu" value="">
                        <small class="form-text text-muted">Tahun lahir ibu Kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan_ibu">Pekerjaan</label>
                        <select name="pekerjaan_ibu" class="form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Petani">Petani</option>
                          <option value="Peternak">Peternak</option>
                          <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Karyawan Swasta">Karyawan Swasta</option>
                          <option value="Pedagang Kecil">Pedagang Kecil</option>
                          <option value="Pedagang Besar">Pedagang Besar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Lain-lain">Lain-lain</option>
                          <option value="0">Meninggal Dunia</option>
                        </select>
                        <small class="form-text text-muted">Pekerjaan utama ibu kandung peserta didik. Pilih Meninggal
                          Dunia apabila ibu Kandung peserta didik telah meninggal.</small>
                      </div>
                      <div class="form-group">
                        <label for="nohp_ibu">No Handphone Ibu <span class="text-danger">*</span></label>
                        <input type="text" class="form-control datepicker" name="nohp_ibu" value="">
                        <small class="form-text text-muted">No Handphone ibu Kandung peserta didik.</small>
                      </div>

                    </div>

                    <div class="col-lg-12 text-center">
                      <h6><strong>DATA WALI</h6></strong>
                      <small class="form-text text-muted">Kosongkan jika data Ayah dan Ibu Sudah Diisi</small>
                      <hr class="bg-primary">
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="nama_wali">Nama wali</label>
                        <input type="text" class="form-control" name="nama_wali" value="" required>
                        <small class="form-text text-muted">Nama wali Kandung peserta didik sesuai dokumen resmi yang
                          berlaku. Hindari penggunaan gelar akademik atau sosial (seperti Alm., Dr., Drs., S.Pd, dan
                          H.) berikan tanda ( - ) jika anda anda sudah mengisi data ayah dan ibu</small>
                      </div>
                      <div class="form-group">
                        <label for="pendidikan_wali">Pendidikan</label>
                        <select name="pendidikan_wali" class="form-control">
                          <option value="Tidak Sekolah">Tidak Sekolah</option>
                          <option value="Putus SD">Putus SD</option>
                          <option value="SD Sederajat">SD Sederajat</option>
                          <option value="SMP Sederajat">SMP Sederajat</option>
                          <option value="SMA Sederajat">SMA Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>
                          <option value="D4/S1">D4/S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                        <small class="form-text text-muted">Pendidikan terakhir wali peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="penghasilan_wali">Penghasilan Bulanan</label>
                        <select name="penghasilan_wali" class="form-control">
                          <option value="0">-</option>
                          <option value="Kurang dari 500.000">Kurang dari 500.000</option>
                          <option value="500.000 - 999.999">500.000 - 999.999</option>
                          <option value="1 juta - 1.999.999">1 juta - 1.999.999</option>
                          <option value="2 juta - 4.999.999">2 juta - 4.999.999</option>
                          <option value="5 juta - 20 juta">5 juta - 20 juta</option>
                          <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
                        </select>
                        <small class="form-text text-muted">Rentang penghasilan wali peserta didik. Kosongkan kolom
                          ini apabila wali peserta didik telah meninggal dunia atau tidak bekerja.</small>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="tahun_lahir_wali">Tahun Lahir Wali </label>
                        <input type="text" class="form-control datepicker" name="tahun_lahir_wali" value="">
                        <small class="form-text text-muted">Tahun lahir wali Kandung peserta didik.</small>
                      </div>
                      <div class="form-group">
                        <label for="pekerjaan_wali">Pekerjaan</label>
                        <select name="pekerjaan_wali" class="form-control">
                          <option value="Tidak Bekerja">Tidak Bekerja</option>
                          <option value="Nelayan">Nelayan</option>
                          <option value="Petani">Petani</option>
                          <option value="Peternak">Peternak</option>
                          <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                          <option value="Karyawan Swasta">Karyawan Swasta</option>
                          <option value="Pedagang Kecil">Pedagang Kecil</option>
                          <option value="Pedagang Besar">Pedagang Besar</option>
                          <option value="Wiraswasta">Wiraswasta</option>
                          <option value="Wirausaha">Wirausaha</option>
                          <option value="Buruh">Buruh</option>
                          <option value="Pensiunan">Pensiunan</option>
                          <option value="Lain-lain">Lain-lain</option>
                          <option value="0">Meninggal Dunia</option>
                        </select>
                        <small class="form-text text-muted">Pekerjaan utama wali peserta didik. Pilih Meninggal
                          Dunia apabila wali peserta didik telah meninggal.</small>
                      </div>
                      <div class="form-group">
                        <label for="nohp_wali">No Handphone Wali</label>
                        <input type="text" class="form-control datepicker" name="nohp_wali" value="">
                        <small class="form-text text-muted">No Handphone wali Kandung peserta didik.</small>
                      </div>

                    </div>

                  </div>

                  <button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
                  <!-- <button class="btn btn-primary" onclick="stepper.next()">Next</button> -->
                  <button name="tambah" type="submit" class="btn btn-primary">Submit</button>
                </div>

              </div>
            </form>

          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
      </div>
      <!-- /.card -->

    </div>


  </div>
</div>



<?php
if (isset($_POST['tambah'])){
  // Mengatur zona waktu sesuai dengan lokasi Anda
  date_default_timezone_set('Asia/Makassar');
  // Mendapatkan tanggal sekarang
  $currentDate = date('Y-m-d H:i:s');
  
  include "../config/koneksi.php";
  
  // Memeriksa apakah ada input yang kosong
  // if (empty($_POST['username']) || empty($_POST['nama_siswa']) || empty($_POST['jenis_kelamin']) || empty($_POST['tanggal_lahir']) || empty($_POST['agama_siswa']) || empty($_POST['alamat_jalan']) || empty($_POST['nokk']) || empty($_POST['nonik']) || empty($_POST['tempat_lahir']) || empty($_POST['nama_negara']) || empty($_POST['nama_provinsi']) || empty($_POST['nama_kabupaten']) || empty($_POST['alamat_kelurahan']) || empty($_POST['alamat_kecamatan']) || empty($_POST['kode_pos']) || empty($_POST['moda_transportasi']) || empty($_POST['tinggi_badan']) || empty($_POST['anak_keberapa']) || empty($_POST['kebutuhan_khusus']) || empty($_POST['tempat_tinggal']) || empty($_POST['berat_badan']) || empty($_POST['jumlah_saudara_kandung']) || empty($_POST['nama_ayah']) || empty($_POST['pendidikan_ayah']) || empty($_POST['penghasilan_ayah']) || empty($_POST['tahun_lahir_ayah']) || empty($_POST['pekerjaan_ayah']) || empty($_POST['nohp_ayah']) || empty($_POST['nama_ibu']) || empty($_POST['pendidikan_ibu']) || empty($_POST['tahun_lahir_ibu']) || empty($_POST['pekerjaan_ibu']) || empty($_POST['nohp_ibu'])) {
  //   // Jika ada input yang kosong, tampilkan pesan error
  //   echo '<script>alert("Mohon lengkapi semua form pendaftaran.");</script>';
  //   echo "<script> document.location.href='../../daftar-siswa';</script>";
  //   exit; // Menghentikan eksekusi skrip selanjutnya
  // }
  
  $username = mysqli_real_escape_string($koneksi, trim($_POST['username']));
  $nama_siswa = mysqli_real_escape_string($koneksi, trim($_POST['nama_siswa']));
  $jenis_kelamin = mysqli_real_escape_string($koneksi, trim($_POST['jenis_kelamin']));
  $tanggal_lahir = mysqli_real_escape_string($koneksi, trim($_POST['tanggal_lahir']));
  $agama_siswa = mysqli_real_escape_string($koneksi, trim($_POST['agama_siswa']));
  $alamat_jalan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_jalan']));
  $nokk = mysqli_real_escape_string($koneksi, trim($_POST['nokk']));
  $nonik = mysqli_real_escape_string($koneksi, trim($_POST['nonik']));
  $tempat_lahir = mysqli_real_escape_string($koneksi, trim($_POST['tempat_lahir']));
  $nama_negara = mysqli_real_escape_string($koneksi, trim($_POST['nama_negara']));
  $nama_provinsi = mysqli_real_escape_string($koneksi, trim($_POST['nama_provinsi']));
  $nama_kabupaten = mysqli_real_escape_string($koneksi, trim($_POST['nama_kabupaten']));
  $alamat_kelurahan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_kelurahan']));
  $alamat_kecamatan = mysqli_real_escape_string($koneksi, trim($_POST['alamat_kecamatan']));
  $kode_pos = mysqli_real_escape_string($koneksi, trim($_POST['kode_pos']));
  
  
  
  $moda_transportasi = mysqli_real_escape_string($koneksi, trim($_POST['moda_transportasi']));
  $tinggi_badan = mysqli_real_escape_string($koneksi, trim($_POST['tinggi_badan']));
  $anak_keberapa = mysqli_real_escape_string($koneksi, trim($_POST['anak_keberapa']));
  $kebutuhan_khusus = mysqli_real_escape_string($koneksi, trim($_POST['kebutuhan_khusus']));
  $tempat_tinggal = mysqli_real_escape_string($koneksi, trim($_POST['tempat_tinggal']));
  $berat_badan = mysqli_real_escape_string($koneksi, trim($_POST['berat_badan']));
  $jumlah_saudara_kandung = mysqli_real_escape_string($koneksi, trim($_POST['jumlah_saudara_kandung']));
  
  $nama_ayah = mysqli_real_escape_string($koneksi, trim($_POST['nama_ayah']));
  $pendidikan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_ayah']));
  $penghasilan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_ayah']));
  $tahun_lahir_ayah = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_ayah']));
  $pekerjaan_ayah = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_ayah']));
  $nohp_ayah = mysqli_real_escape_string($koneksi, trim($_POST['nohp_ayah']));
  
  $nama_ibu = mysqli_real_escape_string($koneksi, trim($_POST['nama_ibu']));
  $pendidikan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_ibu']));
  $tahun_lahir_ibu = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_ibu']));
  $pekerjaan_ibu = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_ibu']));
  $nohp_ibu = mysqli_real_escape_string($koneksi, trim($_POST['nohp_ibu']));
  
  $nama_wali = mysqli_real_escape_string($koneksi, trim($_POST['nama_wali']));
  $pendidikan_wali = mysqli_real_escape_string($koneksi, trim($_POST['pendidikan_wali']));
  $penghasilan_wali = mysqli_real_escape_string($koneksi, trim($_POST['penghasilan_wali']));
  $tahun_lahir_wali = mysqli_real_escape_string($koneksi, trim($_POST['tahun_lahir_wali']));
  $pekerjaan_wali = mysqli_real_escape_string($koneksi, trim($_POST['pekerjaan_wali']));
  $nohp_wali = mysqli_real_escape_string($koneksi, trim($_POST['nohp_wali']));
  
  
  $img = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  $gambar_baru = date('dYHiS').$img;
  $path = "../../assets/image/foto_siswa/".$gambar_baru;
  move_uploaded_file($tmp, $path);
  
  // Mengambil nomor urut terakhir dari tabel tb_siswa
  $sql = "SELECT MAX(no_pendaftaran) AS last_sequence FROM tb_siswa";
  $result = $koneksi->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $lastSequenceNumber = (int) substr($row["last_sequence"], 0, 3);
  }
  
  // Menambahkan 1 ke nomor urut terakhir
  $newSequenceNumber = $lastSequenceNumber + 1;
  // Membentuk nomor urut dengan format 3 digit
  $sequenceNumber = str_pad($newSequenceNumber, 3, '0', STR_PAD_LEFT);
  // Menghasilkan 9-digit angka acak
  $randomNumber = '';
  for ($i = 0; $i < 9; $i++) {
      $randomNumber .= rand(0, 9);
  }
  // Menggabungkan nomor urut dan angka acak menjadi nomor pendaftaran lengkap
  $no_pendaftaran = $sequenceNumber . $randomNumber;
  
  $query = 'INSERT INTO tb_siswa (
    no_pendaftaran,          
    username, nama_siswa, jenis_kelamin, tanggal_lahir,
    agama_siswa, alamat_jalan, nokk, nonik, tempat_lahir,
    nama_negara, nama_provinsi, nama_kabupaten, alamat_kelurahan, alamat_kecamatan, kode_pos, 
    moda_transportasi, tinggi_badan, anak_keberapa, 
    kebutuhan_khusus, tempat_tinggal, berat_badan, 
    jumlah_saudara_kandung, nama_ayah, pendidikan_ayah, penghasilan_ayah, tahun_lahir_ayah, pekerjaan_ayah, nohp_ayah, nama_ibu, pendidikan_ibu, tahun_lahir_ibu, pekerjaan_ibu, nohp_ibu, 
    nama_wali, pendidikan_wali, penghasilan_wali,
    tahun_lahir_wali, pekerjaan_wali, nohp_wali, foto, status_administrasi, level,
    tgl_buat, tgl_ubah)
    VALUES (
      "'.$no_pendaftaran.'", 
      "'.$username.'", 
      "'.$nama_siswa.'", 
      "'.$jenis_kelamin.'", 
      "'.$tanggal_lahir.'",
      "'.$agama_siswa.'", 
      "'.$alamat_jalan.'", 
      "'.$nokk.'", 
      "'.$nonik.'", 
      "'.$tempat_lahir.'",
      "'.$nama_negara.'", 
      "'.$nama_provinsi.'", 
      "'.$nama_kabupaten.'", 
      "'.$alamat_kelurahan.'", 
      "'.$alamat_kecamatan.'", 
      "'.$kode_pos.'", 
      "'.$moda_transportasi.'", 
      "'.$tinggi_badan.'", 
      "'.$anak_keberapa.'", 
      "'.$kebutuhan_khusus.'", 
      "'.$tempat_tinggal.'", 
      "'.$berat_badan.'", 
      "'.$jumlah_saudara_kandung.'", 
      "'.$nama_ayah.'", 
      "'.$pendidikan_ayah.'", 
      "'.$penghasilan_ayah.'", 
      "'.$tahun_lahir_ayah.'", 
      "'.$pekerjaan_ayah.'", 
      "'.$nohp_ayah.'", 
      "'.$nama_ibu.'", 
      "'.$pendidikan_ibu.'", 
      "'.$tahun_lahir_ibu.'", 
      "'.$pekerjaan_ibu.'", 
      "'.$nohp_ibu.'", 
      "'.$nama_wali.'", 
      "'.$pendidikan_wali.'", 
      "'.$penghasilan_wali.'",
      "'.$tahun_lahir_wali.'", 
      "'.$pekerjaan_wali.'", 
      "'.$nohp_wali.'", 
      "'.$gambar_baru.'",
      "'.$status_administrasi.'",
      "Siswa",
      "'.$currentDate.'", 
      "'.$currentDate.'")';
  
      $sql = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));
      // Tampilkan pesan alert
      echo '<script>alert("Selamat anda berhasil registrasi. Silahkan Login dan Melakukan Cetak Bukti Registrasi");</script>';
      echo "<script> document.location.href='../../login';</script>";
    }
?>
<?php
include "views/templates_dashboard/footer.php";
?>