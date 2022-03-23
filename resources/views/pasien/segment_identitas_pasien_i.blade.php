<h4 class="ui dividing header">Identitas Pasien Baru</h4>
<div class="grouped fields">
  <div class="required field">
    <label>Nama Pasien</label>
    <input type="text" name="nama_pasien" id="nama_pasien" value="" placeholder="Masukan Nama Pasien Baru">
    <span class="warnaMerah tidakTerlihat" id="validasi_nama_pasien">
      Nama Pasien Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nama_pasien_a">
      <br/>Nama Pasien Tidak Valid: Nama Pasien  Tidak Boleh Mengandung Angka atau Tanda Baca
    </span>
  </div>
  <div class="required field">
    <label>Nama Belakang Pasien</label>
    <input type="text" name="nama_alias_pasien" id="nama_alias_pasien" placeholder="Masukan Nama Alias Pasien">
    <span class="warnaMerah tidakTerlihat" id="validasi_nama_alias_pasien">
      Nama Belakang Pasien Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nama_alias_pasien_a">
      <br/>Nama Belakang Tidak Valid: Nama Belakang Tidak Boleh Mengandung Angka atau Tanda Baca
    </span>
  </div>
  <div class="required field">
    <label>Nomor KTP atau SIM</label>
    <input type="text" name="nomor_identitas" id="nomor_identitas" placeholder="Masukan Nomor KTP / SIM">
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_identitas">
      Nomor KTP atau SIM Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_identitas_a">
      <br/>Nomor KTP atau SIM Hanya Boleh Angka
    </span>
  </div>
  <div class="required field">
    <label>Jenis Kelamin</label>
    <div class="ui fluid selection dropdown">
      <input type="hidden" name="jenis_kelamin" id="jenis_kelamin">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Jenis Kelamin</div>
      <div class="menu">
        <div class="item" data-value="M">Laki-laki</div>
        <div class="item" data-value="F">Perempuan</div>
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_jenis_kelamin">
      Jenis Kelamin Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Agama</label>
    <div class="ui fluid selection dropdown">
      <input type="hidden" name="agama" id="agama">
      <i class="dropdown icon"></i>
      <div class="default text">Pilih Agama</div>
      <div class="menu">
        <div class="item" data-value="BD">Budha</div>
        <div class="item" data-value="HD">Hindu</div>
        <div class="item" data-value="IS">Islam</div>
        <div class="item" data-value="KC">Konghucu</div>
        <div class="item" data-value="KR">Kristen</div>
        <div class="item" data-value="KT">Katholik</div>
        <div class="item" data-value="LL">Lain-lain</div>
      </div>
    </div>
    <span class="warnaMerah tidakTerlihat" id="validasi_agama">
      Agama Tidak Boleh Kosong
    </span>
  </div>
  <div class="required field">
    <label>Nomor Handphone</label>
    <input type="text" name="nomor_handphone" id="nomor_handphone" value="" placeholder="Masukan Nomor Hanphone">
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_handphone">
      Nomor Handphone Tidak Boleh Kosong
    </span>
    <span class="warnaMerah tidakTerlihat" id="validasi_nomor_handphone_a">
      <br/>Nomor Handphone Tidak Boleh Mengandung Spasi atau Karakter.
    </span>
  </div>
  <div class="required field">
    <label>Tempat dan Tanggal Lahir</label>
    <div class="fields">
      <div class="eight wide field">
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="" placeholder="Masukan Tempat Lahir">
        <span class="warnaMerah tidakTerlihat" id="validasi_tempat_lahir">
          Tempat Lahir Tidak Boleh Kosong
        </span>
        <span class="warnaMerah tidakTerlihat" id="validasi_tempat_lahir_a">
          Tempat Lahir Tidak Boleh Mengandung Angka atau Tanda Baca
        </span>
      </div>

      <div class="eight wide  field">
        <input type="date" name="tgl_lahir" id="tgl_lahir" value="">
        <span class="warnaMerah tidakTerlihat" id="validasi_tgl_lahir">
          Tanggal Lahir Tidak Boleh Kosong
        </span>
      </div>
    </div>

  </div>
  <div class="field">
    <label>Umur Pasien Saat Ini</label>
    <div class="ui right labeled input">
      <input type="text" name="umur_pasien" id="umur_pasien" value="" readonly=true>
      <div class="ui label">
        Tahun
      </div>
    </div>
  </div>
</div>

 <div class="ui tiny primary right floated right labeled icon button" id="nextIdentitasPasienI" tabindex="0">
  Selanjutnya
  <i class="right arrow icon"></i>
</div>
<div class="ui tiny primary left floated left labeled icon button" id="backIdentitasPasienI" tabindex="0">
  Sebelumnya
  <i class="left arrow icon"></i>
</div>
